<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'package',
        'quantity',
        'use_date',
        'full_name',
        'phone_number',
        'email',
        'qr_code',
    ];
}