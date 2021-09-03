<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>


<?php $mensagem = session()->getFlashdata('mensagem') ?>
<?php if (is_array($mensagem) && count($mensagem) > 0) : ?>
    <div class="alert <?php echo $mensagem['tipo'] ?>">
        <?php echo $mensagem['mensagem'] ?>
    </div>
<?php endif; ?>

<?php echo anchor('admin/produto/create', 'Novo Produto', ['class' => 'btn bg-blue']) ?>
<table class="table">
    <caption><?php echo count($produtos) ?> Produto(s) encontrado(s)</caption>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td class="text-center" rowspan="11">
                <img class="foto" src="<?php echo !empty($produto['foto']) ? base_url("produto/getFoto/{$produto['id_produto']}") : base_url('assets/imagens/sem_imagem.png') ?>" alt="Foto">
            </td>
        </tr>
        <tr>
            <td><strong>Código: </strong><?php echo $produto['id_produto'] ?></td>
        </tr>
        <tr>
            <td><strong>Nome: </strong><?php echo $produto['nome_produto'] ?></td>
        </tr>
        <tr>
            <td><strong>Valor: </strong>R$ <?php echo formata_valor($produto['valor']) ?></td>
        </tr>
        <tr>
            <td><strong>Desconto: </strong><?php echo $produto['desconto'] ?>%</td>
        </tr>
        <tr>
            <td><strong>Categoria: </strong><?php echo $produto['descricao'] ?></td>
        </tr>
        <tr>
            <td><strong>É destaque? </strong><?php echo $produto['destaque_formatado'] ?></td>
        </tr>
        <tr>
            <td><strong>Em Promoção? </strong><?php echo $produto['promocao_formatado'] ?></td>
        </tr>
        <tr>
            <td><strong>Link de pagamento: </strong><input type="text" value="<?php echo $produto['link_pagamento'] ?>" class="form-control" readonly></td>
        </tr>
        <tr>
            <td><strong>Ativo? </strong><?php echo $produto['ativo_formatado'] ?></td>
        </tr>
        <tr>
            <td>
                <div class="botoes_acao">
                    <a href="<?php echo base_url("admin/produto/edit/{$produto['id_produto']}") ?>" class="btn bg-green">Editar</a>
                    <a href="<?php echo base_url("admin/produto/delete/{$produto['id_produto']}") ?>" class="btn bg-red" onclick="return confirma()">Excluir</a>
                </div>

            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->endSection('conteudo') ?>