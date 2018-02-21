<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    protected $fillable = ['name','email','message'];

    public function GetCreatedAtAttribute ($data){

        return Carbon::createFromFormat('Y-m-d H:i:s', $data)->format('H:i:s / d.m.Y');
    }
}


