<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int         $id
 * @property int|null    $user_id
 * @property string      $transaction_id
 * @property float       $amount
 * @property string      $currency
 * @property string      $item
 * @property string      $payer_name
 * @property string      $payer_email
 * @property string      $payer_phone
 * @property string      $course_slug
 * @property string      $payment_status
 * @property string|null $payment_method
 * @property string|null $swichnow_response
 */
class PaymentTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'transaction_id',
        'amount',
        'currency',
        'item',
        'payer_name',
        'payer_email',
        'payer_phone',
        'course_slug',
        'payment_status',
        'payment_method',
        'swichnow_response',
    ];
}
