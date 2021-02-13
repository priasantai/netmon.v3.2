<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table = "servers";
    protected $primarykey ="id";
    protected $fillable = ['id','lokasi','perangkat','ip','rak','bandwith'];
}
