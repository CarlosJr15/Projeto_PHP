<?php
    require_once "config.inc.php";

    $sql = "INSERT INTO  clientes (cliente, cidade, estado)VALUES (
            '$_POST[nome]','$_POST[cidade]','$_POST[estado]')";

    // Nota: O nome da coluna no banco deve ser 'cliente', mas no POST vem como 'nome' (corrigido no form_clientes.php).
    // O código original usava 'nome' no POST. Mantendo '$_POST[nome]' para compatibilidade com seu form_clientes.php.
    
    $execute = mysqli_query($conexao, $sql);

    // Se a página for incluída via index.php, ela estará dentro da div container

    if ($execute) {
        echo "<div class='alert alert-success mt-4' role='alert'>
                <h3 class='alert-heading'>✅ Sucesso!</h3>
                <p>Aluno cadastrado com sucesso!</p>
                <hr>
                <a href='?pg=admin_clientes' class='btn btn-success'>Voltar para a Lista</a>
              </div>";
    }else{
        echo "<div class='alert alert-danger mt-4' role='alert'>
                <h3 class='alert-heading'>❌ Erro!</h3>
                <p>Houve um erro ao cadastrar o aluno!</p>
                <hr>
                <a href='?pg=form_clientes' class='btn btn-danger'>Tentar Novamente</a>
              </div>";
    }
?>