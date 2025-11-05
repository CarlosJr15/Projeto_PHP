<div class="mb-4">
    <a href="?pg=form_paginas" class="btn btn-success">
        Cadastrar Nova Página
    </a>
</div>

<h2 class="mb-3">Lista de Páginas Estáticas</h2>

<?php
// A lógica real de busca de dados (SELECT * FROM paginas) viria aqui, 
// utilizando o arquivo config.inc.php e a conexão mysqli.

// Exemplo de como a busca seria feita (com $paginas_ficticias removido):
// require_once "config.inc.php";
// $sql = "SELECT * FROM paginas";
// $resultado = mysqli_query($conexao, $sql);

// if (mysqli_num_rows($resultado) > 0) {
?>

    <div class="table-responsive">
        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título da Página</th>
                    <th>Slug / Arquivo</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Aqui entraria o loop: while($pagina = mysqli_fetch_array($resultado)) { ... }
                // Sem dados, a tabela estará vazia.
                // Exibindo apenas a mensagem de nenhum registro encontrado abaixo.
            ?>
            </tbody>
        </table>
    </div>

<?php
// Usando um IF para simular que não há resultados do banco de dados (por enquanto)
// if (mysqli_num_rows($resultado) == 0) {
    echo "<div class='alert alert-info' role='alert'>
            <h3>Atenção!</h3>
            <p>Nenhuma página estática foi cadastrada no banco de dados ainda.</p>
          </div>";
// }
?>