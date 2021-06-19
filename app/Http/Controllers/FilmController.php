<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FilmModel;

class FilmController extends Controller
{
    
    public function __construct()
    {
        $this->FilmModel = new FilmModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'film' => $this->FilmModel->allData(),
        ];
        return view('layout.v_data_film', $data);
    }

    public function bid($kode_film)
    {
        if (!$this->FilmModel->detailData($kode_film))
            abort(404);
        $data = [
            'film' => $this->FilmModel->detailData($kode_film),
        ];
        return view('layout.v_bidFilm', $data);
    }

    
    public function detail($kode_film)
    {
        if (!$this->FilmModel->detailData($kode_film))
            abort(404);
        $data = [
            'film' => $this->FilmModel->detailData($kode_film),
        ];
        return view('layout.v_detailFilm', $data);
    }

    public function add()
        {
            return view('layout.v_addFilm');
        }

    public function insert()
    {
        Request()->validate([
            'kode_film' => 'required',
            'judul_film' => 'required',
            'tanggal_rilis' => 'required',
            'sinopsis' => 'required',
            'informasi' => 'required',
            'status' => 'required',
            'link_download' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png',
        ],[
            'kode_film.required' => 'Wajib diisi',
            'judul_film.required' => 'Wajib diisi',
            'tanggal_rilis.required' => 'Wajib diisi',
            'sinopsis.required' => 'Wajib diisi',
            'informasi.required' => 'Wajib diisi',
            'status.required' => 'Wajib diisi',
            'link_download' => 'Wajib diisi',
            'foto.required' => 'Wajib diisi'

        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->kode_film . '.' . $file->extension();
        $file->move(public_path('foto'), $fileName);

        
        $data = [
            'kode_film' => Request()->kode_film,
            'judul_film' => Request()->judul_film,
            'tanggal_rilis' => Request()->tanggal_rilis,
            'sinopsis' => Request()->sinopsis,
            'informasi' => Request()->informasi,
            'status' => Request()->status,
            'link_download' => Request()->link_download,
            'foto' => $fileName,
        ];


        $this->FilmModel->addData($data);
        return redirect()->route('film')->with('pesan', 'Data berhasil Ditambahkan!');
    }

    public function edit($kode_film)
        {
            if (!$this->FilmModel->detailData($kode_film))
            abort(404);
            $data = [
                'film' => $this->FilmModel->detailData($kode_film),
            ];
            return view('layout.v_editFilm', $data);
        }
    
    public function update($kode_film)
    {
        Request()->validate([
            'kode_film' => 'required',
            'judul_film' => 'required',
            'tanggal_rilis' => 'required',
            'sinopsis' => 'required',
            'informasi' => 'required',
            'status' => 'required',
            'link_download' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png',
            
        ],[
            'kode_film.required' => 'Wajib diisi',
            'judul_film.required' => 'Wajib diisi',
            'tanggal_rilis.required' => 'Wajib diisi',
            'sinopsis.required' => 'Wajib diisi',
            'informasi.required' => 'Wajib diisi',
            'status.required' => 'Wajib diisi',
            'link_download' => 'Wajib diisi',
            'foto.required' => 'Wajib diisi'
            
        ]);

        //jika tidak ada validasi, maka simpan
        if (Request()->foto <> "") {
            //jika ingin ganti foto
            //upload foto
            $file = Request()->foto;
            $fileName = Request()->kode_film . '.' . $file->extension();
            $file->move(public_path('foto'), $fileName);

        
            $data = [
                'kode_film' => Request()->kode_film,
                'judul_film' => Request()->judul_film,
                'tanggal_rilis' => Request()->tanggal_rilis,
                'sinopsis' => Request()->sinopsis,
                'informasi' => Request()->informasi,
                'status' => Request()->status,
                'link_download' => Request()->link_download,
                'foto' => $fileName,
            ];

            $this->FilmModel->editData($kode_film, $data);
        } else {
            //jika tidak ingin ganti foto
            $data = [
                'kode_film' => Request()->kode_film,
                'judul_film' => Request()->judul_film,
                'tanggal_rilis' => Request()->tanggal_rilis,
                'sinopsis' => Request()->sinopsis,
                'informasi' => Request()->informasi,
                'status' => Request()->status,
                'link_download' => Request()->link_download,
                'foto' => $fileName,
            ];

            $this->FilmModel->editData($kode_film, $data);
        }
        
        return redirect()->route('film')->with('pesan', 'Data berhasil Diperbarui!');
    }

    public function delete($kode_film)
    {
        $film = $this->FilmModel->detailData($kode_film);
        if ($film->foto <> "") {
            unlink(public_path('foto') . '/' . $film->foto);
        }
        $this->FilmModel->deleteData($kode_film);
        return redirect()->route('film')->with('pesan', 'Data Berhasil Dihapus!');
    }

    //test
    //public function detail1($kode_film)
    //{
    //    return view('layout.v_home');
    //}

}
