<?php

namespace App\Controllers;

class Home extends BaseController
{
        public function index()
        {
            echo view('front/head_view');
            echo view('front/navbar_view');
            echo view('front/principal');
            echo view('front/principal_ultimo');
            echo view('front/footer_view');
        }
    
        public function quienes_somos()
        {
            echo view('front/head_view');
            echo view('front/navbar_view');
            echo view('front/Quienes_Somos');
            echo view('front/footer_view');
        }
        public function Acerca_De()
        {
            echo view('front/head_view');
            echo view('front/navbar_view');
            echo view('front/Acerca_De');
            echo view('front/footer_view');
        }
    
    
    
        public function Registrarse()
        {
            echo view('front/head_view');
            echo view('front/navbar_view');
            echo view('front/Registrarse');
            echo view('front/footer_view');
        }
    
    
    
       public function Ingresar()
        {
            echo view('front/head_view');
            echo view('front/navbar_view');
            echo view('front/Ingresar');
            echo view('front/footer_view');
        }
    
    
}