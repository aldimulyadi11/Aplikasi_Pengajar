<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';

    public $incrementing = false;

    protected $fillable = ['id','status','nama','username','password'];
}
