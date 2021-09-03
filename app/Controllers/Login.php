<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CategoriaModel;
use App\Models\ProdutoModel;
use App\Models\UsuarioModel;

class Login extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    /**
     * Chama o formulário de login
     *
     * @return void
     */
    public function index()
    {
        $dados = [
            'categorias' => (new CategoriaModel())->findAll(),
            'banners' => (new BannerModel())->findAll()
        ];

        echo view('login/form', $dados);
    }

    /**
     * Loga o usuário
     *
     * @return void
     */
    public function signin()
    {
        $post = $this->request->getPost();
        $dadosUsuario = $this->usuarioModel->getByEmail($post['email']);
        if (!is_null($dadosUsuario)) {
            if (password_verify($post['senha'], $dadosUsuario['senha'])) {
                $dadosSession = [
                    'id_usuario' => $dadosUsuario['id'],
                    'nome' => $dadosUsuario['nome'],
                    'admin' => $dadosUsuario['admin'],
                    'isLoggedIn' => true
                ];
                $this->session->set($dadosSession);
                return redirect()->to(base_url());
            } else {
                return redirect()->to('/login')->with('mensagem', 'Usuário e/ou senha incorretos');
            }
        } else {
            return redirect()->to('/login')->with('mensagem', 'Usuário e/ou senha incorretos');
        }
    }

    /**
     * Desloga o usuário
     *
     * @return void
     */
    public function signout()
    {
        $this->session->destroy();
        return redirect()->to(base_url());
    }
}
