<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TwrModel extends Model
{
    public function allData()
    {
        return DB::table('penawaran')->get();
    }

    public function bidData($kode_film)
    {
        return DB::table('penawaran')->where('kode_film', $kode_film)->first();
    }

    public function detailData($kode_film)
    {
        return DB::table('penawaran')->where('kode_film', $kode_film)->first();
    }

    public function addData($data)
    {
        DB::table('penawaran')->insert($data);
    }

    public function editData($kode_film, $data)
    {
        DB::table('penawaran')->where('kode_film', $kode_film)->update($data);
    }

    public function deleteData($kode_fiilm)
    {
        DB::table('penawaran')->where('kode_film', $kode_film)->delete();
    }

    //test
    //public function detail1Data($kode_film)
    //{
    //    return DB::table('film')->pluck('kode_film');
    //}

    
}
