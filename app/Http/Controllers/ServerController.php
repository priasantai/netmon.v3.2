<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServerController extends Controller
{
    public function index(){
        $server = Server::all();
        return view ('server', ['server => $server'],compact('server'));
    }
    public function tambahserver(){
        return view ('tambahserver');
    }
    public function store(Request $tambah){
        server::create([
            'lokasi'=>$tambah->lokasi,
            'perangkat'=>$tambah->perangkat,
            'ip'=>$tambah->ip,
            'rak'=>$tambah->rak,
            'bandwith'=>$tambah->bandwith
        ]);
        return redirect ('server')->with('pesan','Added Successfully!');
    }
    public function aturserver($id)
    {
        $aturserver = server::findorfail($id);
        return view ('aturserver',compact('aturserver'));
    }
    public function update(Request $request, $id)
    {
        $aturserver = server::findorfail($id);
        $aturserver->update($request->all());
        return redirect('server')->with('pesan', 'Updated Successfully!');
    }
    public function destroy($id)
    {
        $aturserver = server::findorfail($id);
        $aturserver->delete();
        return back()->with('success', 'Deleted Successfully!');
    }
}