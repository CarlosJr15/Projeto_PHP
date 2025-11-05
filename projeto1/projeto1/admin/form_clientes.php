<div class="mt-4 p-3 border border-secondary rounded">
    <h3>Cadastro de Novo Aluno/Plano</h3>
    <form action="?pg=cadastra_clientes" method="post">
        <div class="mb-3">
            <label class="form-label">Nome do Aluno:</label>
            <input type="text" class="form-control" name="nome" required> 
        </div>
        <div class="mb-3">
            <label class="form-label">Localidade/Unidade:</label>
            <input type="text" class="form-control" name="cidade">
        </div>
        <div class="mb-3">
            <label class="form-label">Plano Contratado (Ex: VIP, Mensal, Anual):</label>
            <input type="text" class="form-control" name="estado">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Aluno">
    </form>
</div>