<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{
    public function __construct(){
        helper(['form', 'url']);
    }
    public function create() {
        $dato['titulo']='Registro';
        echo view('front/head_view', $dato);
        echo view('front/nav_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
}