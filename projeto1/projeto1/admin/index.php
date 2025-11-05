<?php
    // Inclui o topo com o CSS e o Cabeçalho
    include_once "topo_admin.php"; 
?>

<div class="container mt-4">
    <h2 class="mb-4">Painel de Navegação</h2>
    
    <nav class="admin-nav mb-4">
        <a href="index.php">Início</a>
        <a href="?pg=admin_clientes">Clientes/Planos</a>
        <a href="?pg=admin_paginas">Administrar Páginas</a>
        <a href="?pg=admin_contato">Administrar Contatos</a>
    </nav>
    
    <hr style="color: #FF4500;">

    <?php
        // Conteúdo
        if(empty($_SERVER["QUERY_STRING"])){
           echo "<h3>Bem-vindo(a) ao Painel de Gestão.</h3>";
        }elseif($_GET['pg']){
            $pg = $_GET['pg'];
            include_once "$pg.php";
        }else{
            echo "Página não encontrada";
        }
    ?>
</div>

<?php
    // Inclui o rodapé que fecha as tags HTML
    include_once "rodape_admin.php"; 
?>