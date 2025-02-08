<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Films extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_films';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'films';
    protected $fillable = ['judul_films','tanggal','durasi','jam_tayang' ];
}
