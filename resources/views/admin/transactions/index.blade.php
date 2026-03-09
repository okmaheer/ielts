@extends('layouts.app')

@section('content')
    {{-- Toolbar --}}
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Payment Transactions</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="{{ route('home') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item text-gray-500">Transactions</li>
            </ul>
        </div>
    </div>

    {{-- Stat cards --}}
    <div class="row g-4 mb-6">
        @foreach ([
            ['label'=>'Total',   'count'=>$counts['all'],     'color'=>'primary', 'icon'=>'fa-list',        'status'=>''],
            ['label'=>'Pending', 'count'=>$counts['pending'], 'color'=>'warning', 'icon'=>'fa-clock',       'status'=>'pending'],
            ['label'=>'Success', 'count'=>$counts['success'], 'color'=>'success', 'icon'=>'fa-check-circle','status'=>'success'],
            ['label'=>'Failed',  'count'=>$counts['failed'],  'color'=>'danger',  'icon'=>'fa-times-circle','status'=>'failed'],
        ] as $card)
        <div class="col-6 col-md-3">
            <a href="{{ route('admin.transactions.index', $card['status'] ? ['status'=>$card['status']] : []) }}"
               class="card border-0 shadow-sm text-decoration-none">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-{{ $card['color'] }} bg-opacity-10"
                         style="width:48px;height:48px;flex-shrink:0;">
                        <i class="fas {{ $card['icon'] }} text-{{ $card['color'] }} fs-4"></i>
                    </div>
                    <div>
                        <div class="fw-bolder fs-2 text-gray-800">{{ $card['count'] }}</div>
                        <div class="text-muted fs-7">{{ $card['label'] }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    {{-- Filters --}}
    <div class="card mb-5 shadow-sm border-0">
        <div class="card-body p-4">
            <form method="GET" action="{{ route('admin.transactions.index') }}" class="row g-3 align-items-end">
                <div class="col-md-5">
                    <label class="form-label fw-bold fs-7 text-gray-700">Search</label>
                    <input type="text" name="search" class="form-control form-control-sm"
                           placeholder="Name, email, transaction ID, course..."
                           value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold fs-7 text-gray-700">Status</label>
                    <select name="status" class="form-select form-select-sm">
                        <option value="">All</option>
                        <option value="pending" @selected(request('status') === 'pending')>Pending</option>
                        <option value="success" @selected(request('status') === 'success')>Success</option>
                        <option value="failed"  @selected(request('status') === 'failed')>Failed</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-sm btn-dark w-100">Filter</button>
                </div>
                @if(request('search') || request('status'))
                <div class="col-md-2">
                    <a href="{{ route('admin.transactions.index') }}" class="btn btn-sm btn-light w-100">Clear</a>
                </div>
                @endif
            </form>
        </div>
    </div>

    {{-- Table --}}
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-100 align-middle gs-0 gy-3 mb-0">
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th class="ps-4">Date</th>
                            <th>Transaction ID</th>
                            <th>Payer</th>
                            <th>Course</th>
                            <th>Amount</th>
                            <th>Method</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $tx)
                        <tr>
                            <td class="ps-4 text-muted fs-7" style="white-space:nowrap;">
                                {{ $tx->created_at->format('d M Y') }}<br>
                                <small>{{ $tx->created_at->format('H:i') }}</small>
                            </td>
                            <td>
                                <span class="font-monospace fs-7 text-gray-700">{{ $tx->transaction_id }}</span>
                            </td>
                            <td>
                                <div class="fw-bold text-gray-800">{{ $tx->payer_name }}</div>
                                <div class="text-muted fs-7">{{ $tx->payer_email }}</div>
                                <div class="text-muted fs-7">{{ $tx->payer_phone }}</div>
                            </td>
                            <td class="fw-semibold text-gray-700" style="max-width:180px;">
                                {{ $tx->item }}
                            </td>
                            <td class="fw-bolder" style="white-space:nowrap;">
                                {{ number_format($tx->amount, 2) }} {{ $tx->currency }}
                            </td>
                            <td class="text-muted fs-7">
                                {{ $tx->payment_method ?? '—' }}
                            </td>
                            <td>
                                @php
                                    $badge = match($tx->payment_status) {
                                        'success' => 'success',
                                        'failed'  => 'danger',
                                        default   => 'warning',
                                    };
                                @endphp
                                <span class="badge badge-light-{{ $badge }} fw-bolder px-3 py-2 fs-7">
                                    {{ ucfirst($tx->payment_status) }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-10">No transactions found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($transactions->hasPages())
            <div class="d-flex justify-content-end px-6 py-4 border-top">
                {{ $transactions->links() }}
            </div>
            @endif
        </div>
    </div>
@endsection
