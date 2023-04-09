<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{

    public function index()
    {
        $soal = Soal::all();
        //dd('soal.index');
        return view('soal.index', compact('soal'));
    }

    public function create()
    {
        return view('soal.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        
        $this->validate($request,[
            'nama_mk' => 'required',
            'dosen' => 'required|min:5',
            'jumlah_soal' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        Soal::create($request->all());
        return redirect(route('soal.index'));
    }

    

}
