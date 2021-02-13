<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view ('akses', ['user => $user'],
        compact('user'));
    }
    public function tambahuser()
    {
        return view ('tambahuser');
    }
    public function store(Request $request)
    {
        user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request['password']),
            'kantor'=>$request->kantor,
            'level'=>$request->level
        ]);
        return redirect('akses')->with('pesan', 'Akses Added Successfully!');
    }
    public function aturuser($id)
    {
        $aturuser = user::findorfail($id);
        return view ('aturuser',compact('aturuser'));
        
    }
    public function update(Request $request, $id)
    {
        $aturuser = user::findorfail($id);
        $aturuser->update($request->only(['name','email','kantor','level']));
        $aturuser->update(['password' => Hash::make($request->get('password'))]);
        return redirect('akses')->with('pesan', 'Akses Updated Successfully!');
    }
    public function destroy($id)
    {
        $aturuser = user::findorfail($id);
        $aturuser->delete();
        return back()->with('success', 'Akses Deleted Successfully!');
    }
}
