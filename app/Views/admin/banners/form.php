<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>

<h2>::Edição de Banner - <?php echo strtoupper($tipo) ?></h2>
<div class="contact-form">
    <?php echo form_open_multipart('admin/banner/store', ['novalidate' => true]) ?>
    <div class="form-group">
        <label for="banner">Banner - <small>Tamanho máximo: 2MB - Tamanho exato: <?php echo $tipo == 'topo' ? '460x90px' : '690x228px' ?></small></label>
        <input type="file" name="banner_file" id="banner" class="form-control">
    </div>
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" class="form-control" value="<?php echo isset($banner['link']) ? $banner['link'] : set_value('link'); ?>">
        <?php if (!empty($erros['link'])) : ?>
            <div class="alert bg-red"><?php echo $erros['link'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Salvar" class="btn bg-green">
    </div>
    <input type="hidden" name="tipo" value="<?php echo isset($banner['tipo']) ? $banner['tipo'] : set_value('tipo') ?>">
    </form>
</div>

<?php echo $this->endSection('conteudo');
