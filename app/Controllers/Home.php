<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Ruli3D';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }
    public function quienes_somos()
    {
        $data['titulo']='¿Quienes Somos?';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    public function acerca_de()
    {
        $data['titulo']='Acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/acerca_de');
        echo view('front/footer');
    }
    public function registro()
    {
        $data['titulo']='Registro';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }
    public function login()
    {
        $data['titulo']='Login';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }
}
