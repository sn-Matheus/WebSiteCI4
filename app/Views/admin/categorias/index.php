<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>

<?php $mensagem = session()->getFlashdata('mensagem') ?>
<?php if (is_array($mensagem) && count($mensagem) > 0) : ?>
    <div class="alert <?php echo $mensagem['tipo'] ?>">
        <?php echo $mensagem['mensagem'] ?>
    </div>
<?php endif; ?>

<a href="<?php echo base_url('admin/categoria/create') ?>" class="btn bg-blue">Nova Categoria</a>
<table class="table table-stripped">
    <caption>Categorias Cadastradas</caption>
    <tr class="dark">
        <th>Código</th>
        <th>Descrição</th>
        <th class="text-center">Ação</th>
    </tr>
    <?php foreach ($categorias as $categoria) : ?>
        <tr>
            <td><?php echo $categoria['id'] ?></td>
            <td><?php echo $categoria['descricao'] ?></td>
            <td class="text-center">
                <a class="btn bg-green" href="<?php echo base_url('admin/categoria/edit/' . $categoria['id']) ?>">Editar</a>
                -
                <a onclick="return confirma(true)" class="btn bg-red" href="<?php echo base_url('admin/categoria/delete/' . $categoria['id']) ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>


<?php echo $this->endSection('conteudo') ?>