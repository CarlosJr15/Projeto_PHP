<h2 class="mb-4">Mensagens Recebidas (Fale Conosco)</h2>

<?php
// A lógica real de busca de dados (SELECT * FROM contatos) viria aqui.

// Exemplo de como a busca seria feita:
// require_once "config.inc.php";
// $sql = "SELECT * FROM contatos ORDER BY data DESC";
// $resultado = mysqli_query($conexao, $sql);

// if (mysqli_num_rows($resultado) > 0) {
?>

    <div class="table-responsive">
        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Assunto</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Aqui entraria o loop: while($mensagem = mysqli_fetch_array($resultado)) { ... }
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
            <h3>Caixa de Entrada Vazia!</h3>
            <p>Nenhuma mensagem de contato recebida até o momento.</p>
          </div>";
// }
?>