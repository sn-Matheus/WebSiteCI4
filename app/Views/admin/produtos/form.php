<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>


<h2>::<?php echo $titulo ?></h2>
<div class="content-form">
    <?php echo form_open_multipart('admin/produto/store', ['novalidate' => true]) ?>
    <div class="form-group">
        <label for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto" value="<?php echo isset($produto['nome_produto']) ? $produto['nome_produto'] : set_value('nome_produto')  ?>" class="form-control" required autofocus>
        <?php if (!empty($erros['nome_produto'])) : ?>
            <div class="alert bg-red"><?php echo $erros['nome_produto'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor" value="<?php echo isset($produto['valor']) ? $produto['valor'] : set_value('valor') ?>" class="form-control" required>
        <?php if (!empty($erros['valor'])) : ?>
            <div class="alert bg-red"><?php echo $erros['valor'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="desconto">Desconto em %</label>
        <input type="text" name="desconto" id="desconto" value="<?php echo isset($produto['desconto']) ? $produto['desconto'] : set_value('desconto') ?>" class="form-control" required>
        <?php if (!empty($erros['desconto'])) : ?>
            <div class="alert bg-red"><?php echo $erros['desconto'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="categorias_id">Categoria</label>
        <?php echo form_dropdown('categorias_id', $dropDownCategorias, isset($produto['categorias_id']) ? $produto['categorias_id'] : set_value('categorias_id'), ['class' => 'form-control', 'required' => true, 'id' => 'categorias_id']) ?>
    </div>
    <div class="form-group">
        <label for="foto">Foto - <small>Tamanho máximo: 2MB</small></label>
        <input type="file" name="foto" id="foto" class="form-control">
    </div>
    <div class="form-group">
        <label for="destaque">É destaque?</label>
        <?php echo form_dropdown('destaque', $dropDownSimNao, isset($produto['destaque']) ? $produto['destaque'] : set_value('destaque'), ['class' => 'form-control', 'id' => 'destaque', 'required' => true]) ?>
    </div>
    <div class="form-group">
        <label for="promocao">Em promoção?</label>
        <?php echo form_dropdown('promocao', $dropDownSimNao, isset($produto['promocao']) ? $produto['promocao'] : set_value('promocao'), ['class' => 'form-control', 'id' => 'promocao', 'required' => true]) ?>
    </div>
    <div class="form-group">
        <label for="link_pagamento">Llink de Pagamento</label>
        <input type="url" name="link_pagamento" id="link_pagamento" value="<?php echo isset($produto['link_pagamento']) ? $produto['link_pagamento'] : set_value('link_pagamento') ?>" class="form-control">
        <?php if (!empty($erros['link_pagamento'])) : ?>
            <div class="alert bg-red"><?php echo $erros['link_pagamento'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <label for="ativo">Ativo?</label>
        <?php echo form_dropdown('ativo', $dropDownSimNao, isset($produto['ativo']) ? $produto['ativo'] : set_value('ativo'), ['class' => 'form-control', 'id' => 'ativo', 'required' => true]) ?>
    </div>
    <div class="form-group">
        <label for="nome">Descrição do Produto</label>
        <textarea name="descricao_produto" id="descricao_produto" cols="30" rows="10" class="form-control" required><?php echo isset($produto['descricao_produto']) ? $produto['descricao_produto'] : set_value('descricao_produto') ?></textarea>
        <?php if (!empty($erros['descricao_produto'])) : ?>
            <div class="alert bg-red"><?php echo $erros['descricao_produto'] ?></div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Salvar" class="btn bg-green">
    </div>
    <input type="hidden" name="id" value="<?php echo isset($produto['id']) ? $produto['id'] : set_value('id') ?>">
    </form>
</div>

<?php echo $this->endSection('conteudo') ?>