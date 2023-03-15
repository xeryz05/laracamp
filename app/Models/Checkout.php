<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Datebase\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabel = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];
}
