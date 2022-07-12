<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    protected $table = 'pengajars';

    public $incrementing = false;

    protected $fillable = ['id','nama_lengkap','nama_panggilan','email_pengajar','no_hp','alamat_lengkap','aktivitas','kode_pos','pendidikan_terakhir','id_materi','ceritakan_diri','foto_pribadi','foto_ktp','foto_ijazah','foto_lainnya','status','status2'];

    public function materi()
    {
        return $this->belongsTo('App\materi', 'id_materi');
    }
}
