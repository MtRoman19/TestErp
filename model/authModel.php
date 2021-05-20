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
    }


?>