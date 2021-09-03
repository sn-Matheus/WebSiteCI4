<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>

<h2>::<?php echo $titulo ?></h2>
<div class="content-form">
    <?php echo form_open('admin/categoria/store', ['novalidate' => true]) ?>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao" class="form-control" value="<?php echo isset($categoria['descricao']) ? $categoria['descricao'] : set_value('descricao') ?>" required autofocus>
        <?php if (!empty($erros['descricao'])) : ?>
            <div class="alert bg-red"><?php echo $erros['descricao'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Salvar" class="btn bg-green">
    </div>
    <input type="hidden" name="id" value="<?php echo isset($categoria['id']) ? $categoria['id'] : set_value('id') ?>">
    </form>
</div>
<?php echo $this->endSection('conteudo') ?>