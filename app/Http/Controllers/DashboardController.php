<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('admin.home');
    }

    public function akun(){
        $id = Auth()->user()->id;

        $data = User::all();

        $result = $data->where('id', $id);

        return view("admin.account", [
            "result" => $result
        ]);
    }

    public function client(){
        return view('admin.client');
    }

    public function getClients(Request $request)
    {
        if ($request->ajax()) {
            $data = Client::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="client/edit/'.$row->id.'" class="buttonedit px-2 py-1 rounded-md text-white">Edit</a> <a href="client/delete/'.$row->id.'" class="buttondelete px-2 py-1 rounded-md text-white">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function money(){
        return view('admin.money');
    }

    public function getMoneys(Request $request)
    {
        if ($request->ajax()) {
            $data = Client::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/money/debitkredit/'.$row->id.'" class="buttonedit px-2 py-1 rounded-md text-white">Debit/Kredit</a> <a href="/money/riwayat/'.$row->id.'" class="buttondelete px-2 py-1 rounded-md text-white">Riwayat</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function settings(){
        $id = Auth()->user()->id;

        $data = User::all();

        $result = $data->where('id', $id);

        return view("admin.settings", [
            "result" => $result
        ]);
    }

    public function update(Request $request){

            $id = Auth()->user()->id;

            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'nik' => 'required',
                'address'=>'required',
                'email' => 'required|email:dns',
                'password' => 'required|min:5|max:255',
                'dob' => 'required',
                'sex' => 'required',
                'mobilenumber' => 'required',
            ]);
            

            $validatedData['password'] = bcrypt($validatedData['password']);

            User::where('id', $id)->update($validatedData);

            return redirect('/admin/settings')->with('success', 'Update data Successfull!');
        }

}
