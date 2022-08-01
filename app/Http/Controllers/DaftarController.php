<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    //
    public function index(){
        return view("daftar");
    }

    public function add(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required',
            'address'=>'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255',
        ]);
        

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/register')->with('success', 'Register Berhasil');
}

}
