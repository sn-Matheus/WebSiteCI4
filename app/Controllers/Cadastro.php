<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CategoriaModel;
use App\Models\UsuarioModel;

class Cadastro extends BaseController
{
    private $usuarioModel;
    private $categoriaModel;
    private $bannerModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
        $this->categoriaModel = new CategoriaModel();
        $this->bannerModel = new BannerModel();
    }

    /**
     * Chama a view com o formulário de cadastro
     *
     * @return void
     */
    public function index()
    {
        $dados = [
            'categorias' => $this->categoriaModel->findAll(),
            'banners' => $this->bannerModel->findAll()
        ];

        echo view('cadastro/form', $dados);
    }

    /**
     * Cadastra um usuário
     *
     * @return void
     */
    public function store()
    {
        $post = $this->request->getPost();
        if ($this->usuarioModel->save($post)) {
            return redirect()->to('/mensagem/sucesso')->with('mensagem', 'Dados cadastrados com sucesso.');
        } else {
            $dados = [
                'categorias' => $this->categoriaModel->findAll(),
                'banners' => $this->bannerModel->findAll(),
                'erros' => $this->usuarioModel->errors()
            ];

            echo view('cadastro/form', $dados);
        }
    }
}
