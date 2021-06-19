<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;

class HomeController extends Controller
{
    /*public function index()
    {
        return view('layout.v_home');
    }

    public function about($id)
        {
            return 'ini halaman about<br>' . $id;
        }*/
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'film' => $this->HomeModel->allData(),
        ];
        return view('layout.v_home', $data);
    }

    public function detail($id_film)
    {
        if (!$this->HomeModel->detailData($id_film))
            abort(404);
        $data = [
            'film' => $this->HomeModel->detailData($id_film),
        ];
        return view('layout.v_home', $data);
    }

    public function add()
        {
            return view('layout.v_addFilm');
        }

}
