<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view ('login',["mensaje"=>$mensaje]);
        
    }

  
    public function inicio()
    {
        echo view ('header');

        echo view ('inicio');
        echo view ('footer');

       

    }

    public function login()
    {

        
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');
        

        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->  obtenerUsuario(['usuario'=>$usuario]);
        
        
        if(count($datosUsuario) >0 && password_verify($clave,$datosUsuario[0]['clave']) )
        {
            $data = [ 
                        "usuario"=>$datosUsuario[0]['usuario'],
                        "type" => $datosUsuario[0]['type']

                    ];
            
            $session = session();
            $session -> set($data);
           
            return redirect()-> to(base_url('/inicio'))->with('mensaje','1');


        }

        else
        {
            return redirect()-> to(base_url('/'))->with('mensaje','0');

        }
        

    }


    public function salir()
    {

        $session = session();
        $session -> destroy();
        return redirect()-> to(base_url('/'));



    }
    









}


