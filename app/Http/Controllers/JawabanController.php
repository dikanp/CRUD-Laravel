<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jawaban;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
        $jawaban = Jawaban::find_by_id($pertanyaan_id);
        // dd($jawaban);
        // return view('pertanyaan', compact('pertanyaans'));
        return view('show', [
            'jawabans' => $jawaban, 
            'pertanyaan_id' => $pertanyaan_id
            ]);	
    }

    public function create($pertanyaan_id){
        return view('form_jawaban', compact('pertanyaan_id'));
    }

    public function save(Request $request, $pertanyaan_id){
        // dd($request->all());
        $jawaban = Jawaban::save($request->all());

        return redirect('jawaban/'.$pertanyaan_id);
    }
}