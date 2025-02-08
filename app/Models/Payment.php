<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_payment';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'payment';
    protected $fillable = ['id_ticket','payment_method','status','amount' ];
}
