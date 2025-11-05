<div class="mb-4">
    <a href="?pg=form_clientes" class="btn btn-success">
        Cadastrar Novo Aluno
    </a>
</div>

<h2 class="mb-3">Lista de Alunos (Membros)</h2>
<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM clientes ";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
?>
    <div class="table-responsive">
        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Localidade/Unidade</th>
                    <th>Plano Contratado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($dados = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?= $dados['id'] ?></td>
                    <td><?= $dados['cliente'] ?></td>
                    <td><?= $dados['cidade'] ?></td>
                    <td><?= $dados['estado'] ?></td>
                    <td>
                        <a href='?pg=form_clientes_alterar&id=<?= $dados['id'] ?>' class='btn btn-sm btn-primary me-2'>
                            Alterar
                        </a>
                        <a href='?pg=delete_cliente&id=<?= $dados['id'] ?>' class='btn btn-sm btn-danger'
                           onclick="return confirm('Tem certeza que deseja EXCLUIR o aluno <?= $dados['cliente'] ?>?');">
                            Excluir
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
<?php
    } else {
        echo "<div class='alert alert-warning' role='alert'>
                <h3>Nenhum aluno encontrado!</h3>
              </div>";
    }
?>