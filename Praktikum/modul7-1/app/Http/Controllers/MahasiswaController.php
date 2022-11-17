<?php

namespace App\Http\Controllers;

use App\Models\tbl_mhs;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title = 'Simple Siakad';
        $tbl_mhs = Tbl_mhs::all();
        return view('index', compact('title', 'tbl_mhs'));
    }

    public function create()
    {
        $title = 'Create Data Mahasiswa';

        return view('create', compact('title'));
    }

    public function update($id)
    {
        $title = 'Update Data Mahasiswa';

        $tbl_mhs = Tbl_mhs::where('id', $id)->first();
        return view('update', compact('title', ['tbl_mhs']));
    }

    public function add_mhs(Request $request)
    {
        Tbl_mhs::create($request->except(['_token', 'simpan']));
        return redirect('/');
    }

    public function update_mhs(Request $request, $id)
    {
        Tbl_mhs::where('id', $id)->update($request->except(['_token', 'update']));
        return redirect('/');
    }

    public function delete($id)
    {
        Tbl_mhs::where('id', $id)->delete();
        return redirect('/');
    }

    public function about()
    {
        $title = 'About';
        $img = 'img/apinn.jpg';
        $judul = 'About Me';
        $nama = 'Muhammad Muqtafin Nuha';
        $background = 'Nama saya Muhammad Muqtafin Nuha, saya berasala dari kabupaten Gresik. Saya merupakan anak ke 1 dari 2 bersaudara.';
        $sukaduka = 'sukanya bisa mempelajari hal baru dan dukanya terlalu banyak tugas';

        return view('about', compact('title', 'img', 'judul', 'nama', 'background', 'sukaduka'));
    }
}
