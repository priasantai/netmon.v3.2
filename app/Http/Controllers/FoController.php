<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fo;

class FoController extends Controller
{
    public function index(){
        $fo = Fo::simplePaginate(5);
        return view ('fo', ['fo => $fo'],
        compact('fo'));
    }
    public function tambahfo()
    {
        return view ('tambahfo');
    }
    public function store(Request $request)
    {
        fo::create([
            'lokasi'=>$request->lokasi,
            'perangkat'=>$request->perangkat,
            'ip'=>$request->ip,
            'odp'=>$request->odp,
            'bandwith'=>$request->bandwith
        ]);
        return redirect('fo')->with('pesan', 'Ont Added Successfully!');
    }
    public function aturfo($id)
    {
        $aturfo = fo::findorfail($id);
        return view ('aturfo',compact('aturfo'));
        
    }
    public function update(Request $request, $id)
    {
        $aturfo = fo::findorfail($id);
        $aturfo->update($request->all());
        return redirect('fo')->with('pesan', 'Ont Updated Successfully!');
    }
    public function destroy($id)
    {
        $aturfo = fo::findorfail($id);
        $aturfo->delete();
        return back()->with('success', 'Ont Deleted Successfully!');
    }
}
