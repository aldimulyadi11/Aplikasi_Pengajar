<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailMateri extends Model
{
    protected $table = 'detail_materis';

    public $incrementing = false;

    protected $fillable = ['id','id_materi','id_pengajar'];

    public function materi()
    {
        return $this->belongsTo('App\materi', 'id_materi');
    }
}
