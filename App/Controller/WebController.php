<?php

namespace App\Controller;

class WebController
{
    public function start()
    {
        $title = "Titulo da Página";
        $titulo_principal = "Titulo Principal";
        
        require VIEW . "Web/start.php";
    }

    public function admin()
    {
        $title = "Titulo da Página";
        
        require VIEW . "Admin/admin.php";
    }

}