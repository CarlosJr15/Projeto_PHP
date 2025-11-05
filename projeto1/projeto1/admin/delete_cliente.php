<?php
    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    // Se a página for incluída via index.php, ela estará dentro da div container

    if($resultado){
        echo "<div class='alert alert-warning mt-4' role='alert'>
                <h3 class='alert-heading'>🗑️ Excluído!</h3>
                <p>Aluno de ID **$id** excluído com sucesso!</p>
                <hr>
                <a href='?pg=admin_clientes' class='btn btn-warning'>Voltar para a Lista</a>
              </div>";
    }else{
        echo "<div class='alert alert-danger mt-4' role='alert'>
                <h3 class='alert-heading'>❌ Erro!</h3>
                <p>Erro ao excluir o aluno!</p>
                <hr>
                <a href='?pg=admin_clientes' class='btn btn-danger'>Voltar para a Lista</a>
              </div>";
    }
?>