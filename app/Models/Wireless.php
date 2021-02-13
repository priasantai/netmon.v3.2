<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wireless extends Model
{
    protected $table = "wirelesses";
    protected $primarykey ="id";
    protected $fillable = ['id','lokasi','perangkat','ip','ketinggian','bandwith'];
}
