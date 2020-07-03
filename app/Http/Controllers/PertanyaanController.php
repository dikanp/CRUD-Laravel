<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = Pertanyaan::getAll();
        dd($pertanyaan);
        // return view('pertanyaan', compact('pertanyaans'));
        return view('pertanyaan', ['pertanyaans' => $pertanyaan]);
    }

    public function create(){
        return view('form');
    }

    public function save(Request $request){
        // dd($request->all());
        $new_pertanyaan = Pertanyaan::save($request->all());

        return redirect('/pertanyaan');
    }
}
