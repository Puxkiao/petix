<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_ticket';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'ticket';
    protected $fillable = ['id_users','id_studio','id_films','harga','status' ];
}
