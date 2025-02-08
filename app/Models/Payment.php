<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_payment';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'payment';
    protected $fillable = ['id_payment','id_ticket','payment_method','total_price','status','amount','payment_date'];
}
