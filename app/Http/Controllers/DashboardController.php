<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fo;
use App\Models\Wireless;
use App\Models\Server;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $fo = Fo::all('id')->count();
        $wireless = Wireless::all('id')->count();
        $server = Server::all('id')->count();
        $user = User::all('id')->count();
        return view ('dashboard', ['fo => $fo','wireless => $wireless','server => $server','user => $user'],
        compact('fo','wireless','server','user'));
    }
}
