<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function find_by_id($pertanyaan_id){
        $jawabans = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
        return $jawabans;
    }

    public static function save($data){
        unset($data["_token"]);
        $jawaban = DB::table('jawaban')->insert($data);
        return $jawaban;
    }
}
