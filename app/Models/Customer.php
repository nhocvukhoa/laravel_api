<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamp = false;
    protected $fillable = [
        'cus_name', 'cus_phone', 'cus_address', 'cus_email', 'cus_city'
    ];
    protected $primaryKey = 'id';
    protected $table = 'customers';
}
