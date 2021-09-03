<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('conteudo') ?>

<h2>::Login</h2>
<div class="content-form">
    <h3>Digite seus dados de acesso</h3>
    <?php echo form_open('login/signin', ['novalidate' => true]) ?>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Enviar" class="btn bg-blue">
    </div>
    </form>
    <?php $mensagem = session()->getFlashdata('mensagem'); ?>
    <?php if (!empty($mensagem)) : ?>
        <div class="alert bg-red">
            <?php echo $mensagem; ?>
        </div>
    <?php endif; ?>
</div>
<?php echo $this->endSection('conteudo') ?>