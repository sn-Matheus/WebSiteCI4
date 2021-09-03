<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;
use App\Models\ProdutoModel;

class Produto extends BaseController
{

    private $produtoModel;
    private $categoriaModel;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
        $this->categoriaModel = new CategoriaModel();
    }
    /**
     * Retorna a Página Principal
     *
     * @return void
     */
    public function index()
    {
        $dados = [
            'produtos' => $this->produtoModel->getAll()
        ];

        echo view('admin/produtos/index', $dados);
    }

    /**
     * Chama o form de Criação
     *
     * @return void
     */
    public function create()
    {
        echo view('admin/produtos/form', [
            'titulo' => 'Novo Produto',
            'dropDownCategorias' => $this->categoriaModel->formDropDown(),
            'dropDownSimNao' => [
                0 => 'Não',
                1 => 'Sim'
            ]
        ]);
    }

    /**
     * Salva um produto no banco de dados.
     *
     * @return void
     */
    public function store()
    {
        $post = $this->request->getPost();
        unset($post['foto']);
        $file = $this->request->getFile('foto');

        if ($file->isValid()) {
            $arquivo = $file->store();
            $post['foto'] = $arquivo;
        }

        if ($this->produtoModel->save($post)) {
            return redirect()->to('/admin/produto')->with('mensagem', [
                'tipo' => 'bg-green',
                'mensagem' => 'Produto salvo com sucesso'
            ]);
        } else {
            echo view('admin/produtos/form', [
                'titulo' => !empty($post['id']) ? 'Editar Produto' : 'Novo Produto',
                'erros' => $this->produtoModel->errors(),
                'dropDownCategorias' => $this->categoriaModel->formDropDown(),
                'dropDownSimNao' => [
                    0 => 'Não',
                    1 => 'Sim'
                ]
            ]);
        }
    }

    /**
     * Chama o form de edição de produto
     *
     * @param [type] $id_produto
     * @return void
     */
    public function edit($id_produto)
    {
        $produto = $this->produtoModel->find($id_produto);
        if (!is_null($produto)) {
            echo view('admin/produtos/form', [
                'titulo' => 'Editar Produto',
                'produto' => $produto,
                'dropDownCategorias' => $this->categoriaModel->formDropDown(),
                'dropDownSimNao' => [
                    0 => 'Não',
                    1 => 'Sim'
                ]
            ]);
        } else {
            return redirect()->to('/admin/produto')->with('mensagem', [
                'tipo' => 'bg-red',
                'mensagem' => 'ERRO - Produto não encontrado'
            ]);
        }
    }

    /**
     * Apaga um produto
     *
     * @param [type] $id_produto
     * @return void
     */
    public function delete($id_produto)
    {
        if ($this->produtoModel->delete($id_produto)) {
            return redirect()->to('/admin/produto')->with('mensagem', [
                'tipo' => 'bg-green',
                'mensagem' => 'Produto excluído com sucesso.'
            ]);
        } else {
            return redirect()->to('/admin/produto')->with('mensagem', [
                'tipo' => 'bg-red',
                'mensagem' => 'ERRO - Não foi possível excluir o produto.'
            ]);
        }
    }
}
