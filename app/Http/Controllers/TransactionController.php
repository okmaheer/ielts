<?php

namespace App\Http\Controllers;

use App\Models\PaymentTransaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = PaymentTransaction::latest();

        if ($request->filled('status')) {
            $query->where('payment_status', $request->status);
        }

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('payer_name',      'like', "%{$s}%")
                  ->orWhere('payer_email',   'like', "%{$s}%")
                  ->orWhere('transaction_id','like', "%{$s}%")
                  ->orWhere('item',          'like', "%{$s}%");
            });
        }

        $transactions = $query->paginate(20)->withQueryString();

        $counts = [
            'all'     => PaymentTransaction::count(),
            'pending' => PaymentTransaction::where('payment_status', 'pending')->count(),
            'success' => PaymentTransaction::where('payment_status', 'success')->count(),
            'failed'  => PaymentTransaction::where('payment_status', 'failed')->count(),
        ];

        return view('admin.transactions.index', compact('transactions', 'counts'));
    }
}
