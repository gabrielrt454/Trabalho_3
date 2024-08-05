
<html>
<h2>Adicionar um produto</h2>
<form method="POST" action="{{ route('produto.salvar') }}">
    @csrf
    <div>
        <label for="nome_produto">Nome do produto:</label>
        <input type="text" name="nome_produto" required>
    </div>
    <div>
        <label for="valor">Valor do Produto:</label>
        <input type="text" name="valor" required>
    </div>
    <div>
        <label for="data_validade">Data de validade deste produto:</label>
        <input type="date" name="data_validade" required>
    </div>
    <div>
        <label for="id">Id da marca:</label>
        <input type="text" name="id_marca" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</html>
