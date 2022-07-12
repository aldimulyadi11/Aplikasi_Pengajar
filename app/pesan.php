<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table = 'pesans';

    public $incrementing = false;

    protected $fillable = ['id','nama','subject','email','pesan'];
}
