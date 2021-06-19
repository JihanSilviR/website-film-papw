<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TwrModel;

class TwrController extends Controller
{
    
    public function __construct()
    {
        $this->TwrModel = new TwrModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'penawaran' => $this->TwrModel->allData(),
        ];
        return view('layout.v_dataPenawaran', $data);
    }

    public function bid($kode_film)
    {
        if (!$this->TwrModel->detailData($kode_film))
            abort(404);
        $data = [
            'penawaran' => $this->TwrModel->detailData($kode_film),
        ];
        return view('layout.v_bidfilm', $data);
    }

    
    //public function detail($kode_film)
    //{
    //    if (!$this->TwrController->detailData($kode_film))
    //        abort(404);
    //    $data = [
    //        'penawaran' => $this->TwrController->detailData($kode_film),
    //    ];
    //    return view('layout.v_detailfilm', $data);
    //}
//
    public function add()
        {
            return view('layout.v_dataPenawaran');
        }

    public function insert()
    {
        Request()->validate([
            'penawar' => 'required',
            'no_hp' => 'required',
            'harga_penawaran' => 'required',
        ],[
            'penawar.required' => 'Wajib diisi',
            'no_hp.required' => 'Wajib diisi',
            'harga_penawaran.required' => 'Wajib diisi',

        ]);

        //upload foto
        //$file = Request()->foto;
        //$fileName = Request()->kode_film . '.' . $file->extension();
        //$file->move(public_path('foto'), $fileName);

        
        $data = [
            'penawar' => Request()->penawar,
            'no_hp' => Request()->no_hp,
            'harga_penawaran' => Request()->harga_penawaran,
        ];


        $this->TwrModel->addData($data);
        return redirect()->route('penawaran')->with('pesan', 'Tawaran berhasil Ditambahkan!');
    }

    //public function edit($kode_film)
    //    {
    //        if (!$this->TwrController->detailData($kode_film))
    //        abort(404);
    //        $data = [
    //            'penawaran' => $this->TwrController->detailData($kode_film),
    //        ];
    //        return view('layout.v_editFilm', $data);
    //    }
    //
    //public function update($kode_film)
    //{
    //    Request()->validate([
    //        'kode_film' => 'required',
    //        'judul_film' => 'required',
    //        'tanggal_rilis' => 'required',
    //        'sinopsis' => 'required',
    //        'informasi' => 'required',
    //        'status' => 'required',
    //        'link_download' => 'required',
    //        'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
    //    ],[
    //        'kode_film.required' => 'Wajib diisi',
    //        'judul_film.required' => 'Wajib diisi',
    //        'tanggal_rilis.required' => 'Wajib diisi',
    //        'sinopsis.required' => 'Wajib diisi',
    //        'informasi.required' => 'Wajib diisi',
    //        'status.required' => 'Wajib diisi',
    //        'link_download' => 'Wajib diisi',
    //        'foto.required' => 'Wajib diisi'
    //    ]);
//
    //    //jika tidak ada validasi, maka simpan
    //    if (Request()->foto <> "") {
    //        //jika ingin ganti foto
    //        //upload foto
    //        $file = Request()->foto;
    //        $fileName = Request()->kode_film . '.' . $file->extension();
    //        $file->move(public_path('foto'), $fileName);
//
    //    
    //        $data = [
    //            'kode_film' => Request()->kode_film,
    //            'judul_film' => Request()->judul_film,
    //            'tanggal_rilis' => Request()->tanggal_rilis,
    //            'sinopsis' => Request()->sinopsis,
    //            'informasi' => Request()->informasi,
    //            'status' => Request()->status,
    //            'link_download' => Request()->link_download,
    //            'foto' => $fileName,
    //        ];
//
    //        $this->TwrController->editData($kode_film, $data);
    //    } else {
    //        //jika tidak ingin ganti foto
    //        $data = [
    //            'kode_film' => Request()->kode_film,
    //            'judul_film' => Request()->judul_film,
    //            'tanggal_rilis' => Request()->tanggal_rilis,
    //            'sinopsis' => Request()->sinopsis,
    //            'informasi' => Request()->informasi,
    //            'status' => Request()->status,
    //            'link_download' => Request()->link_download,
    //            'foto' => $fileName,
    //        ];
//
    //        $this->TwrController->editData($kode_film, $data);
    //    }
    //    
    //    return redirect()->route('penawaran')->with('pesan', 'Data berhasil Diperbarui!');
    //}
//
    //public function delete($kode_film)
    //{
    //    $film = $this->TwrController->detailData($kode_film);
    //    if ($barang->foto <> "") {
    //        unlink(public_path('foto') . '/' . $film->foto);
    //    }
    //    $this->TwrController->deleteData($kode_film);
    //    return redirect()->route('penawaran')->with('pesan', 'Data Berhasil Dihapus!');
    //}

    //test
    //public function detail1($kode_film)
    //{
    //    return view('layout.v_home');
    //}

}
