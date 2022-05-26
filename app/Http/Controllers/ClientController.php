<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function client(){
        return view('admin.client');
    }

    public function editclient($id){
        $datas = Client::all();

        $result = $datas->where("id", $id);

        return view('admin.editclient', ["result" => $result]);
    }

    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required',
            'address'=>'required',
            'dob' => 'required',
            'sex' => 'required',
            'mobilenumber' => 'required',
        ]);
        

        Client::where('id', $id)->update($validatedData);

        return redirect("/admin/client/edit/$id")->with('success', 'Update data Successfull!');
    }

    public function delete($id){
        $datas = Client::where("id", $id);

        $datas->delete();
        return redirect("/admin/client")->with('success', 'Delete Data Successfull');
    }

}
