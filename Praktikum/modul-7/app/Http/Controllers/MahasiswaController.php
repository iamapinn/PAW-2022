<?php

namespace App\Http\Controllers;

use App\Models\tbl_mhss;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class MahasiswaController extends Controller
{
    public function index()
    {
        $title = 'Data Mahasiswa';
        $tbl_mhs = Tbl_mhss::all();
        $count = Tbl_mhss::count();
        return view('mahasiswa.index', compact('title', 'tbl_mhs', 'count'));
    }

    public function create()
    {
        $title = 'Tambah Data Mahasiswa';
        return view('mahasiswa.create', compact('title'));
    }

    public function add_mhs(Request $request)
    {
        Tbl_mhss::create($request->except(['_token', 'submit']));
        return redirect('/mahasiswa');
    }

    public function update($nrp)
    {
        $title = 'Edit Data Mahasiswa';
        $tbl_mhs = Tbl_mhss::where('nrp', $nrp)->first();
        return view('mahasiswa.update', compact('title', ['tbl_mhs']));
    }

    public function update_mhs(Request $request, $nrp)
    {
        Tbl_mhss::where('nrp', $nrp)->update($request->except(['_token', 'update']));
        return redirect('/mahasiswa');
    }

    public function delete($nrp)
    {
        Tbl_mhss::where('nrp', $nrp)->delete();
        return redirect('/mahasiswa');
    }
}
