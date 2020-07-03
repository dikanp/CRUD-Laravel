<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jawaban;

class JawabanController extends Controller
{
    public function index($pertanyaan_id){
        $jawaban = Jawaban::find_by_id($pertanyaan_id);
        dd($jawaban);
        // return view('pertanyaan', compact('pertanyaans'));
        return view('show', ['jawabans' => $jawaban]);	
    }
}