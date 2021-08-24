<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'order_records';

    protected $fillable = [
        'user_id',
        'name_product',
        'total_paid',
        'payment_method',
        'status_payment',
        'address',
        'postcode',
        'mobile',
    ];

    public $timestamps = false;
}
