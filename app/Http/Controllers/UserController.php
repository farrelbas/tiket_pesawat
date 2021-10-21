<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $data = UserModel::get();
        return response()->json($data);
    }
    public function show($id)
    {
        $data = UserModel::find($id);
        return $data;
    }
    // public function show($kata_kunci)
    // {
    //     $data = UserModel::where('id', 'like', '%' . $kata_kunci . '%')->get();
    //     return response()->json($data);
    // }
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'nama' => 'required',
            'nomer_telepon' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            // $data['status'] = false;
            // $data['message'] = $validator->errors();
            return Response()->json($validator->errors());
        }
        $simpan = UserModel::create([
            'nama' => $req->nama,
            'nomer_telepon' => $req->nomer_telepon,
            'email' => $req->email,
            'password' => $req->password,
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
