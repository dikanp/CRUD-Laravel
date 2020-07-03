<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function find_by_id($pertanyaan_id){
        $jawabans = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->first();
        return $jawabans;
    }
}
