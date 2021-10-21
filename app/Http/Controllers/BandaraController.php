<?php

namespace App\Http\Controllers;

use App\Models\BandaraModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BandaraController extends Controller
{
    public function insert(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'kode' => 'required',
            'kota' => 'required',
            'nama_bandara' => 'required',
        ]);
        if ($validator->fails()) {
            // $data['status'] = false;
            // $data['message'] = $validator->errors();
            return Response()->json($validator->errors());
        }
        $simpan = BandaraModel::create([
            'kode' => $req->kode,
            'kota' => $req->kota,
            'nama_bandara' => $req->nama_bandara,
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
    public function update($id, Request $req)
    {
        $validator = Validator::make($req->all(), [
            'kode' => 'required',
            'kota' => 'required',
            'nama_bandara' => 'required',
        ]);
        if ($validator->fails()) {
            // $data['status'] = false;
            // $data['message'] = $validator->errors();
            return Response()->json($validator->errors());
        }
        $update = BandaraModel::where('id', $id)->update([
            'kode' => $req->kode,
            'kota' => $req->kota,
            'nama_bandara' => $req->nama_bandara,
        ]);
        if ($update) {
            return Response()->json(['status' => "Sukses update data"]);
            // $data['status'] = true;
            // $data['message'] = "Sukses update data";
        } else {
            return Response()->json(['status' => "Gagal update data"]);
            // $data['status'] = false;
            // $data['message'] = "Gagal update data";
        }
        // return Response()->json($data);
    }
    public function delete($id)
    {
        $delete = BandaraModel::where('id', $id)->delete();
        if ($delete) {
            return Response()->json(['status' => "Sukses hapus data"]);
            // $data['status'] = true;
            // $data['message'] = "Sukses update data";
        } else {
            return Response()->json(['status' => "Gagal hapus data"]);
            // $data['status'] = false;
            // $data['message'] = "Gagal update data";
        }
        // return Response()->json($data);
    }
}
