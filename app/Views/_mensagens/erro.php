<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('conteudo') ?>


<div class="erro">
    <p><?php echo $mensagem ?></p>
    <hr>
    <p><?php echo anchor(base_url(), 'Página Inicial') ?></p>
</div>


<?php echo $this->endSection('conteudo') ?>