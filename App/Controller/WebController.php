<?php

namespace App\Controller;

class WebController
{
    public function start()
    {
        $title = "EVENTIFY - Site de Eventos";
        
        require VIEW . "Web/start.php";
    }

    public function login()
    {
        $title = "Titulo da Página";
        $h1_titulo = "Login";
        
        require VIEW . "Web/login.php";
    }

    public function cadastrar()
    {
        $title = "Titulo da Página";
        $h1_titulo = "Cadastrar";        
        require VIEW . "Web/cadastrar.php";
    }

    public function dashboard()
    {
        $title = "Titulo da Página";
        $h1_titulo = "Dashboard";    

        require VIEW . "Web/dashboard.php";
    }

    public function logout()
    {
        header("Location: /");
    }

    public function admin()
    {
        $title = "Administração";
        $h1_titulo = "Login";
        
        require VIEW . "Admin/admin.php";
    }

    public function adminCadastrar()
    {
        $title = "Administração";
        $h1_titulo = "Cadastrar";
        
        require VIEW . "Admin/cadastrar.php";
    }

    public function adminDashboard()
    {
        $title = "Administração";
        $h1_titulo = "Dashboard";
        
        require VIEW . "Admin/dashboard.php";
    }

    public function adminLogout()
    {
        header("Location: /");
    }

    

}