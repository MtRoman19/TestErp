<?php

    class authModel extends Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function insert($data){
             $query = $this->db->connect()->prepare('INSERT INTO users (nombre, correo, contra) VALUES(:nombre, :correo, :contra)');
             $query-> execute(['correo' => $data['correo'],'nombre' => $data['nombre'],'contra' => $data['contra']]);
            
        }
        public function searchEmail($data){
            $query = $this->db->connect()->prepare('SELECT correo FROM users WHERE correo = :correo');
            if($query -> execute(['correo' => $data['correo']])) {
                $out = [];
                while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $out[] = $row["correo"];
                }
                if(empty($out)) {
                    // Noo hay registros
                   return  0;
                } else {
                    // si hay registros
                   return 1;
                }
            } else {
                return $db->errorInfo();
            }
        }
        public function login($data){

            $query = $this->db->connect()->prepare('SELECT correo FROM users WHERE correo = :correo AND contra = :contra');
            if($query -> execute(['correo' => $data['correo'], 'contra' => $data['contra']])) {
                $out = [];
                $row = $query->fetch(PDO::FETCH_ASSOC);
                if(empty($row)) {
                    // Noo hay registros
                   return  0;
                } else {
                    // si hay registros
                   return 1;
                }
            } else {
                return $db->errorInfo();
            }
        }
    }


?>