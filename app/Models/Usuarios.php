<?php

 namespace App\models;
 use CodeIgniter\Model;


 class Usuarios extends Model{

 
      public function ObtenerUsuario($data)
      {
         $Usuario = $this -> db -> table ('persona3');
         $Usuario -> where ($data);
         return $Usuario->get()->getResultArray();



      }






 }


?>