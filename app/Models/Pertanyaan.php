<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

// class Pertanyaan extends Model
class Pertanyaan
{
    public static function getAll(){
        $items = DB::table('pertanyaan')->get();
        return $items;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function find_by_id($id){
        $item = DB::table('pertanyaan')->where('id', $id)->first();
        return $item;
    }
}
