<?php

namespace App\Model;

use App\Database\DbConnection;
use PDO;
use PDOException;

class UserModel
{
    public function listarTodosUsuarios(): array
    {
        $db = new DbConnection();
        $conn = $db->getConnection();

         try {
            $sql = "SELECT * FROM t_usuarios";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Fecha a conexão (opcional, pois o PHP fecha automaticamente no fim do script)
            $conn = null;
            
            return $result;
            
        } catch (PDOException $e) {
            error_log("Erro ao buscar usuários: " . $e->getMessage());
            return [];
        }

    }

    public function listarUnicoUsuarios(int $id): array
    {
        $db = new DbConnection();
        $conn = $db->getConnection();

        try {
            $sql = "SELECT * FROM t_usuarios WHERE usu_id = :id LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verifica se encontrou algum resultado
            if ($result === false) {
                return []; // Retorna array vazio se não encontrar o usuário
            }
            
            // Fecha a conexão (opcional, pois o PHP fecha automaticamente no fim do script)
            $conn = null;
            
            return $result;
            
        } catch (PDOException $e) {
            error_log("Erro ao buscar usuário: " . $e->getMessage());
            return [];
        }
    }

    public function login(string $email, string $senha)
    {
        $db = new DbConnection();
        $conn = $db->getConnection();

        try {
            // 1. Busca o usuário pelo e-mail
            $stmt = $conn->prepare("SELECT usu_id, usu_nome, usu_senha FROM t_usuarios WHERE usu_email = :email LIMIT 1");
            // Ajuste: Definindo explicitamente como STRING
            $stmt->bindParam(':email', $email, \PDO::PARAM_STR); 
            $stmt->execute();

            $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

            // 2. Verifica se o usuário existe e se a senha é compatível
            // O password_verify só funciona se a senha no banco foi criada com password_hash
            if ($usuario && password_verify($senha, $usuario['usu_senha'])) {
                
                // 3. Inicia a sessão e armazena os dados básicos
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['usu_id'] = $usuario['usu_id'];
                $_SESSION['usu_nome'] = $usuario['usu_nome'];

                return true; // Login bem-sucedido
            }

            return false; // Email ou senha incorretos

        } catch (\PDOException $e) {
            error_log("Erro no login: " . $e->getMessage());
            return false;
        }
    }



    public function alterarUsuario(int $id)
    {
        $db = new DbConnection();
        $conn = $db->getConnection();

        
    }
}