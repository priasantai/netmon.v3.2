<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wireless;

class WirelessController extends Controller
{
    public function index(){
        $radio = Wireless::all();
        return view ('radio', ['radio => $wireless'],compact('radio'));
    }
    public function tambahwireless(){
        return view ('tambahwireless');
    }
    public function store(Request $tambah){
        wireless::create([
            'lokasi'=>$tambah->lokasi,
            'perangkat'=>$tambah->perangkat,
            'ip'=>$tambah->ip,
            'ketinggian'=>$tambah->ketinggian,
            'bandwith'=>$tambah->bandwith
        ]);
        return redirect ('radio')->with('pesan','Added Successfully!');
    }
    public function aturwireless($id)
    {
        $aturwireless = wireless::findorfail($id);
        return view ('aturwireless',compact('aturwireless'));
    }
    public function update(Request $request, $id)
    {
        $aturwireless = wireless::findorfail($id);
        $aturwireless->update($request->all());
        return redirect('radio')->with('pesan', 'Radio Updated Successfully!');
    }
    public function destroy($id)
    {
        $aturwireless = wireless::findorfail($id);
        $aturwireless->delete();
        return back()->with('success', 'Radio Deleted Successfully!');
    }
}
