<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_studio';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'studio';
    protected $fillable = ['nama_studio','kursi','durasi','lokasi' ];
}
