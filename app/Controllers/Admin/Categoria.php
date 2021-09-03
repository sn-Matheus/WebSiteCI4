<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;


class Categoria extends BaseController
{

    private $categoriaModel;

    public function __construct()
    {
        $this->categoriaModel = new CategoriaModel();
    }

    /**
     * Traz todas as categorias.
     *
     * @return void
     */
    public function index()
    {
        echo view('admin/categorias/index', [
            'categorias' => $this->categoriaModel->getAll()
        ]);
    }

    /**
     * Chama a view de criação de categoria
     *
     * @return void
     */
    public function create()
    {
        echo view('admin/categorias/form', [
            'titulo' => 'Nova Categoria'
        ]);
    }
    /**
     * Chama o form de edição já populado
     *
     * @param [type] $id_categoria
     * @return void
     */
    public function edit($id_categoria)
    {
        $categoria = $this->categoriaModel->find($id_categoria);
        if (!is_null($categoria)) {
            echo view('admin/categorias/form', [
                'titulo' => 'Editar Categoria',
                'categoria' => $categoria
            ]);
        } else {
            return redirect()->to('/admin/categoria')->with('mensagem', [
                'tipo' => 'bg-red',
                'mensagem' => 'ERRO - Categoria não encontrada'
            ]);
        }
    }

    /**
     * Salva uma categoria
     *
     * @return void
     */
    public function store()
    {
        $post = $this->request->getPost();
        if ($this->categoriaModel->save($post)) {
            return redirect()->to('/admin/categoria')->with('mensagem', [
                'tipo' => 'bg-green',
                'mensagem' => 'Categoria salva com sucesso'
            ]);
        } else {
            echo view('admin/categorias/form', [
                'titulo' => !empty($post['id']) ? 'Editar Categoria' : 'Nova Categoria',
                'erros' => $this->categoriaModel->errors()
            ]);
        }
    }

    /**
     * Exclui  uma categoria
     *
     * @param [type] $id_categoria
     * @return void
     */
    public function delete($id_categoria)
    {
        if ($this->categoriaModel->delete($id_categoria)) {
            return redirect()->to('/admin/categoria')->with('mensagem', [
                'tipo' => 'bg-green',
                'mensagem' => 'Categoria excluída com sucesso.'
            ]);
        } else {
            return redirect()->to('/admin/categoria')->with('mensagem', [
                'tipo' => 'bg-red',
                'mensagem' => 'ERRO - Não foi possível excluir a categoria.'
            ]);
        }
    }
}
