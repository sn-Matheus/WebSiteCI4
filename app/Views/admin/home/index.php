<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>

<table class="table">
    <caption>Últimas Compras</caption>
    <?php foreach ($dadosCompras as $dados) : ?>
        <tr>
            <td colspan="3" class="bg-light-gray"><?php echo anchor('admin/usuario/index/' . $dados['usuario']['id_usuario'], $dados['usuario']['nome']) ?></td>
        </tr>
        <tr>
            <td>
                <table class="table">
                    <tr>
                        <th>Código</th>
                        <th>Produto</th>
                        <th>Data da Compra</th>
                    </tr>
                    <?php foreach ($dados['compras'] as $compra) : ?>
                        <tr>
                            <td><?php echo $compra['id_produto'] ?></td>
                            <td><?php echo $compra['nome_produto'] ?></td>
                            <td class="text-center"><?php echo toDataBR($compra['data']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php echo $this->endSection('conteudo');
