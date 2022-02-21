<?php namespace App\Filters;


use CodeIgniter\HTTP\requestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

    class Sessionadmin implements FilterInterface
   
    {
        public function before (RequestInterface $request, $arguments = null)
        {

            if (!session('type')=='admin')
            {

                return redirect()-> to(base_url('/inicio'));

            }





        }



        public function after (RequestInterface $request, ResponseInterface $response, $arguments=null)
        {


                // sadsa



        }






    }






?>
