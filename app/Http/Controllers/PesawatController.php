<?php

namespace App\Http\Controllers;

use App\Models\PesawatModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesawatController extends Controller
{
    public function insert(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'nama_pesawat' => 'required',
            'eco_seat' => 'required',
            'buss_seat' => 'required',
            'first_seat' => 'required',
        ]);
        if ($validator->fails()) {
            // $data['status'] = false;
            // $data['message'] = $validator->errors();
            return Response()->json($validator->errors());
        }
        $simpan = PesawatModel::create([
            'nama_pesawat' => $req->nama_pesawat,
            'eco_seat' => $req->eco_seat,
            'buss_seat' => $req->buss_seat,
            'first_seat' => $req->first_seat,
        ]);
        if ($simpan) {
            return Response()->json(['status' => "Sukses menambahkan data"]);
            // $data['status'] = true;
            // $data['message'] = "Sukses menambahkan data";
        } else {
            return Response()->json(['status' => "Gagal menambahkan data"]);
            // $data['status'] = false;
            // $data['message'] = "Gagal menambahkan data";
        }
        // return Response()->json($data);
    }
}
