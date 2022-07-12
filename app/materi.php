<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $table = 'materis';

    public $incrementing = false;

    protected $fillable = ['id','nama_materi','foto_materi'];
}
