<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class civil extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'nik';
    protected $guarded = [];
}
