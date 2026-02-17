<?php

namespace App\Model;

use App\Database\DbConnection;
use PDO;
use PDOException;

class EventModel
{
    public function listarTodosEventos(): array
    {
        $db = new DbConnection();
        $conn = $db->getConnection();

        try {
            // $sql = "SELECT * FROM t_eventos";
            $sql = "SELECT t_eventos.*, t_usuarios.usu_nome
                    FROM t_eventos 
                    INNER JOIN t_usuarios
                    ON t_eventos.eve_id_usu = t_usuarios.usu_id;
";
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
}