<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Riwayat;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ClientController extends Controller
{
    //
    public function client(){
        return view("admin.client.client");
    }

    public function editclient($id){
        $datas = Client::all();

        $result = $datas->where("id", $id);

        return view('admin.client.editclient', ["result" => $result]);
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

    public function addClient(){

        return view("admin.client.addclient");
    }

    public function add(Request $request){
        $input = $request->all();  

        $database = collect([
            "name" => $input["name"],
            "nik" => $input["nik"],
            "address" => $input["address"],
            "dob" => $input["dob"],
            "sex" => $input["sex"],
            "mobilenumber" => $input["mobilenumber"],
            "no_rek" => $input["no_rek"],
            "nom_rek" => $input["nom_rek"],
        ]);

        $databasebaru = $database->toArray();

        Client::create($databasebaru);

        return view("admin.client.printclient",[
            "databasebaru" => $databasebaru
        ]);
    }

    public function editMoney(Request $request, $id){
        $datas = Client::all();

        $result = $datas->where("id", $id);

        return view("admin.money.moneydebkre", ["result" => $result]);

    }

    public function updateMoney(Request $request, $id){

        $datas = Client::all();
        $result = $datas->firstWhere("id", $id);

        if($request->debit !== null){

            $database = collect([
                "nom_rek" => $result["nom_rek"]+$request->debit
            ]);
            $riwayat = collect([
                "id_client" => $id,
                "keterangan" => "Penambahan Saldo dari teller senilai $request->debit"
            ]);

        }else{
            $database = collect([
                "nom_rek" => $result["nom_rek"] - $request->kredit
            ]);

            $riwayat = collect([
                "id_client" => $id,
                "keterangan" => "Penarikan Saldo dari teller senilai $request->kredit"
            ]);
        }

        $databasebaru = $database->toArray();
        $riwayats = $riwayat->toArray();

        $datenow = Carbon::now();        

        Client::where('id', $id)->update($databasebaru);

        Riwayat::create($riwayats);

        $dataprint = collect([
            "name"=>$result["name"],
            "no_rek"=>$result["no_rek"],
            "nom_rek"=>$result["nom_rek"],
            "debit"=>$request->debit,
            "kredit"=>$request->kredit,
            "time" => $datenow->toDateTimeString(),
            "totaluangdebit"=> $result["nom_rek"]+$request->debit,
            "totaluangkredit"=> $result["nom_rek"]-$request->kredit,
        ]);

        return view("admin.money.printmoney",[
            "dataprint" => $dataprint
        ]);
    }

    public function riwayat($id){
        $datas = Riwayat::all();

        $datauser = Client::all();
        $resultuser = $datauser->firstWhere("id", $id);

        $result = $datas->whereIn("id_client", $id);



        return view("admin.money.riwayat", [
            "result" => $result,
            "resultuser" => $resultuser
        ]);
    }

    public function printMoney(){
        return view("admin.money.printmoney");
    }

}
