<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    // Variáveis iniciais para evitar erro se o ID for inválido
    $id_cliente = '';
    $nome = '';
    $cidade = '';
    $estado = '';
    
    if ($cliente = mysqli_fetch_array($resultado)){
        $id_cliente = $cliente['id'];
        $nome = $cliente['cliente'];
        $cidade = $cliente['cidade'];
        $estado = $cliente['estado'];
    }
?>

<div class="mt-4 p-4 border border-secondary rounded bg-dark">
    <h3 class="mb-4">Alterar Cadastro do Aluno (ID: <?=$id_cliente?>)</h3>
    <form action="?pg=altera_clientes" method="post">
        
        <input type="hidden" name="id" value="<?=$id_cliente?>">
        
        <div class="mb-3">
            <label class="form-label">Nome do Aluno:</label>
            <input type="text" class="form-control" name="cliente" value="<?=$nome?>" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Localidade/Unidade:</label>
            <input type="text" class="form-control" name="cidade" value="<?=$cidade?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Plano Contratado:</label>
            <input type="text" class="form-control" name="estado" value="<?=$estado?>">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Salvar Alterações">
        <a href="?pg=admin_clientes" class="btn btn-secondary ms-2">Cancelar</a>
    </form>
</div>