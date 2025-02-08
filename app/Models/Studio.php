<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Studio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_studio';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'studio';
    protected $fillable = ['nama_studio','kursi','durasi','lokasi' ];
}
