<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('conteudo') ?>

<h2>::Entre em Contato</h2>
<div class="content-form">
    <h3>Se tiver alguma dúvida, entre em contato com a gente:</h3>
    <?php echo form_open('contato/send', ['novalidate' => true]) ?>
    <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo set_value('nome') ?>" required autofocus>
        <?php if (!empty($erros['nome'])) : ?>
            <div class="alert bg-red"><?php echo $erros['nome'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($dados['email']) ? $dados['email'] : set_value('email') ?>" required>
        <?php if (!empty($erros['email'])) : ?>
            <div class="alert bg-red"><?php echo $erros['email'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo isset($dados['telefone']) ? $dados['telefone'] : set_value('telefone') ?>" required>
        <?php if (!empty($erros['telefone'])) : ?>
            <div class="alert bg-red"><?php echo $erros['telefone'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="mensagem">Sua mensagem</label>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control" required><?php echo isset($dados['mensagem']) ? $dados['mensagem'] : set_value('mensagem') ?></textarea>
        <?php if (!empty($erros['mensagem'])) : ?>
            <div class="alert bg-red"><?php echo $erros['mensagem'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Enviar" class="btn">
    </div>
    <?php if (isset($erro_email)) : ?>
        <div class="alert bg-red">
            <?php echo $erro_email ?>
        </div>
    <?php endif; ?>
    </form>

</div>

<?php echo $this->endSection('content') ?>