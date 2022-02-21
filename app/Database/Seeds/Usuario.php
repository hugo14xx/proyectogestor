<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{  
     public function run()
    {
        $usuario="usuario";
        $clave = password_hash("123", PASSWORD_DEFAULT);
        $type = "usuario";
        $data = [
            'usuario' =>  $usuario,
            'clave'    => $clave,
            'type' => $type,
        ];

      
        // Using Query Builder
        $this->db->table('persona3')->insert($data);
    }






}
