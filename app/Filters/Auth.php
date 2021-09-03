<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        if ((bool)session()->admin === false) {

            return redirect()->to('/mensagem/erro')->with('mensagem', "Você não tem permissão para acessar a área administrativa");
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

        //nada a fazer
    }
}
