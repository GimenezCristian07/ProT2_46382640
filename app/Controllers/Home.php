<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'NotiGames';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'NotiGames';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/Quienes_Somos');
        echo view('front/footer_view');
    }
    public function Acerca_De()
    {
        $data['titulo'] = 'NotiGames';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/Acerca_De');
        echo view('front/footer_view');
    }



    public function Registrarse()
    {
        $data['titulo'] = 'NotiGames';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/Registrarse');
        echo view('front/footer_view');
    }



    public function Ingresar()
    {
        $data['titulo'] = 'NotiGames';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/Ingresar');
        echo view('front/footer_view');
    }


}