<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminTamuController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('admin.tamu.index', compact('data'));
    }

    public function formTambah()
    {
        return view('admin.tamu.formTambah');
    }

    public function simpanData(Request $request)
    {
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat;
        $email = $request->email;
        $keperluan = $request->keperluan;

        $data = new User;
        $data->nama = $nama;
        $data->tlp = $telepon;
        $data->alamat = $alamat;
        $data->email = $email;
        $data->keperluan = $keperluan;
        $data->password = Hash::make('tamu');

        $data->save();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Disimpan');
    }

    public function formEdit($id)
    {
        $data = User::find($id);
        return view('admin.tamu.formEdit', compact('data'));
    }

    public function updateTamu(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $telepon = $request->telepon;
        $alamat = $request->alamat;
        $email = $request->email;
        $keperluan = $request->keperluan;

        $data = User::find($id);
        $data->nama = $nama;
        $data->tlp = $telepon;
        $data->alamat = $alamat;
        $data->email = $email;
        $data->keperluan = $keperluan;
        $data->update();

        return redirect('admin/tamu')->with('status', 'Data Berhasil Diperbarui');
    }

    public function hapusTamu(Request $request)
    {
        $id = $request->id;
        $data = User::find($id);
        $data->delete();
        return redirect('admin/tamu')->with('status', 'Data Berhasil Dihapus');
    }
}
