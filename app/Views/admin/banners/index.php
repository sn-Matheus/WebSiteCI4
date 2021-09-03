<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>

<?php $mensagem = session()->getFlashdata('mensagem') ?>
<?php if (is_array($mensagem) && count($mensagem) > 0) : ?>
    <div class="alert <?php echo $mensagem['tipo'] ?>">
        <?php echo $mensagem['mensagem'] ?>
    </div>
<?php endif; ?>

<table class="table table-stripped">
    <caption>Banners Cadastrados</caption>
    <tr class="dark">
        <th>Tipo</th>
        <th>Banner</th>
        <th>Link</th>
        <th>Ação</th>
    </tr>
    <?php foreach ($banners as $banner) : ?>
        <tr>
            <td class="text-center"><?php echo strtoupper($banner['tipo']) ?></td>
            <td><img class="foto" src="<?php echo base_url('banner/getFoto/' . $banner['tipo']) ?>"></td>
            <td><input type="text" value="<?php echo $banner['link'] ?>" readonly class="form-control"></td>
            <td class="text-center">
                <a href="<?php echo base_url("admin/banner/edit/{$banner['tipo']}") ?>">Editar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->endSection('conteudo');
