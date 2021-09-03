<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('conteudo') ?>
<h2>Cadastre-se</h2>
<div class="content-form">

    <h3>Cadastre-se para comprar no site</h3>
    <?php echo form_open('cadastro/store', ['novalidate' => true]) ?>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required value="<?php echo set_value('nome') ?>">
        <?php if (!empty($erros['nome'])) : ?>
            <div class="alert bg-red"><?php echo $erros['nome'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required value="<?php echo set_value('email') ?>">
        <?php if (!empty($erros['email'])) : ?>
            <div class="alert bg-red"><?php echo $erros['email'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" class="form-control" required value="<?php echo set_value('endereco') ?>">
        <?php if (!empty($erros['endereco'])) : ?>
            <div class="alert bg-red"><?php echo $erros['endereco'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control">
        <?php if (!empty($erros['senha'])) : ?>
            <div class="alert bg-red"><?php echo $erros['senha'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="repita_senha">Repita a Senha</label>
        <input type="password" name="repita_senha" id="senha" class="form-control">
        <?php if (!empty($erros['repita_senha'])) : ?>
            <div class="alert bg-red"><?php echo $erros['repita_senha'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Cadastrar" class="btn bg-blue">
    </div>
    <?php echo form_close() ?>

</div>


<?php echo $this->endSection('content') ?>