<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'descricao'
    ];

    protected $validationRules = [
        'descricao' => [
            'label' => 'Descrição',
            'rules' => 'required'
        ]
    ];

    /**
     * Retorna todas as categorias.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->orderBy('descricao')->findAll();
    }

    /**
     * Cria um array pronta pra ser usada no formDropdown
     *
     * @return void
     */
    public function formDropDown()
    {
        $dadosCategorias = $this->select('id, descricao')->orderBy('descricao')->findAll();

        $optionsSelecione = [
            '' => 'Selecione...'
        ];

        $categorias = array_column($dadosCategorias, 'descricao', 'id');

        $result = $optionsSelecione + $categorias;
        return $result;
    }
}
