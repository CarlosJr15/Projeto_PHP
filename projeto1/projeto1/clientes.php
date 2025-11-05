<?php
// O 'MODELO' - Onde a lógica de dados (SQL) reside

// 1. INCLUIR A CONFIGURAÇÃO: Colocamos aqui para garantir que $conexao seja criada no escopo global.
// O caminho "admin/config.inc.php" está correto, pois o clientes_model.php é incluído pelo index.php.
require_once "admin/config.inc.php";

/**
 * Função responsável por buscar todos os clientes do banco de dados.
 * @return mysqli_result|false O resultado da query.
 */
function buscarTodosClientes() {
    
    // 2. ACESSO GLOBAL: Traz a variável $conexao (criada no require_once acima) para dentro desta função.
    global $conexao; 
    
    // 3. O COMANDO SQL
    $sql = "SELECT * FROM clientes"; 
    
    // 4. Execução da query
    // O erro geralmente ocorre aqui se $conexao for NULL ou indefinida
    $resultado = mysqli_query($conexao, $sql);
    
    // Tratamento de erro básico (opcional, mas recomendado)
    if (!$resultado) {
        // Se a query falhar, retorna NULL para evitar erro no mysqli_fetch_array no clientes.php
        return null; 
    }
    
    // 5. Retorna o resultado para o arquivo de visualização
    return $resultado;
}
?>