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
        $titulo_principal = "Titulo Principal";
        
        require VIEW . "Web/login.php";
    }

    public function cadastrar()
    {
        $title = "Titulo da Página";
        $titulo_principal = "Titulo Principal";
        
        require VIEW . "Web/cadastrar.php";
    }

    public function dashboard()
    {
        $title = "Titulo da Página";
        $titulo_principal = "Titulo Principal";
        
        require VIEW . "Web/cadastrar.php";
    }

    public function logout()
    {
        header("Location: /");
    }

    public function admin()
    {
        $title = "Administração";
        $titulo_admin = "Sistema de Gerenciamento";
        
        require VIEW . "Admin/admin.php";
    }

    public function adminCadastrar()
    {
        $title = "Administração";
        $titulo_admin = "Sistema de Gerenciamento";
        
        require VIEW . "Admin/cadastrar.php";
    }

    public function adminDashboard()
    {
        $title = "Administração";
        $titulo_admin = "Sistema de Gerenciamento";
        
        require VIEW . "Admin/dashboard.php";
    }

    public function adminLogout()
    {
        header("Location: /");
    }

    

}