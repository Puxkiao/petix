<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_films';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'films';
    protected $fillable = ['judul_films','tanggal','durasi','jam_tayang' ];
}
