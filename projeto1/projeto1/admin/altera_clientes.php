<?php
    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['cliente'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "UPDATE clientes SET
            cliente = '$nome',
            cidade = '$cidade',
            estado = '$estado'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    // Se a página for incluída via index.php, ela estará dentro da div container
    
    if($resultado){
        echo "<div class='alert alert-info mt-4' role='alert'>
                <h3 class='alert-heading'>ℹ️ Alteração Concluída!</h3>
                <p>Cadastro do Aluno **$nome** Alterado com sucesso!</p>
                <hr>
                <a href='?pg=admin_clientes' class='btn btn-info'>Voltar para a Lista</a>
              </div>";
    }else{
        echo "<div class='alert alert-danger mt-4' role='alert'>
                <h3 class='alert-heading'>❌ Erro!</h3>
                <p>Houve um erro na alteração do cadastro.</p>
                <hr>
                <a href='?pg=admin_clientes' class='btn btn-danger'>Voltar para a Lista</a>
              </div>";
    }
?>