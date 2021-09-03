<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <?php echo link_tag('assets/css/estilos.css') ?>
    <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
    <title>Administração - Mega Loja-Virtual</title>
</head>

<body>
    <div class="container">
        <div class="header text-center">
            <div class="top-link">
                <p><a href="<?php echo base_url() ?>">Voltar para o Site Principal</a></p>
            </div>
            <h1>Área Administrativa</h1>
            <div class="menu">
                <div class="menu-esquerdo">
                    <nav>
                        <ul>
                            <li><?php echo anchor(base_url('admin'), 'Admin') ?></li>
                            <li><?php echo anchor('admin/categoria', 'Categorias') ?></li>
                            <li><?php echo anchor('admin/produto', 'Produtos') ?></li>
                            <li><?php echo anchor('admin/usuario', 'Usuários') ?></li>
                            <li><?php echo anchor('admin/banner', 'Banners') ?></li>
                        </ul>
                    </nav>
                </div>
                <div class="menu-direito">
                    <nav>
                        <ul>
                            <li class="boas-vindas">Bem-vindo <?php echo session()->nome ?></li>
                            <li><a href="<?php echo base_url('login/signout') ?>">Sair</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="admin-conteudo">
            <?php echo $this->renderSection('conteudo') ?>
        </div>
    </div>
</body>

</html>