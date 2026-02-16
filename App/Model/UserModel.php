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

    public function alterarUsuario(int $id)
    {
        $db = new DbConnection();
        $conn = $db->getConnection();

        
    }
}