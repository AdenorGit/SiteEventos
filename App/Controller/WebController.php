<?php

namespace App\Controller;

use App\Model\EventModel;

class WebController
{
    public function start()
    {
        $title = "EVENTIFY - Site de Eventos";

        $model = new EventModel();
        $eventos = $model->listarTodosEventos();
       
        require VIEW . "Web/start.php";
    }

    public function login()
    {
        $title = "Titulo da Página";
        $h1_titulo = "Login";
        $js_user_login = '<script src="/App/Default/Assets/Js/UserLogin.js" defer></script>';

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

        $model = new EventModel();
        $eventos = $model->listarTodosEventos();

        require VIEW . "Web/dashboard.php";
    }

    public function logout()
    {
        // Garante que a sessão esteja acessível
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Remove todas as variáveis de sessão
        $_SESSION = array();

        // Destrói o cookie de sessão no navegador do usuário
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Destrói a sessão no servidor
        session_destroy();

        // Redireciona para a home
        header("Location: /");
        exit;
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