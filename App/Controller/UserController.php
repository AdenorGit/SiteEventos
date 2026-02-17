<?php

namespace App\Controller;

use App\Model\UserModel;

class UserController
{
    public function login()
    {
        // 1. Captura os dados enviados via POST pelo fetch
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        header('Content-Type: application/json');

        // Validação básica de campos vazios
        if (empty($email) || empty($senha)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'E-mail e senha são obrigatórios.'
            ]);
            exit;
        }

        $model = new UserModel();
        $resultado = $model->login($email, $senha);

        // 2. Verifica o resultado do model
        if ($resultado) {
            echo json_encode([
                'status' => 'success',
                'data' => true
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Usuário ou senha inválidos.'
            ]);
        }

        exit;
    }
}
