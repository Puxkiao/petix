<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_users';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'users';
    protected $fillable = ['id_users','nama','username','password' ];
}
