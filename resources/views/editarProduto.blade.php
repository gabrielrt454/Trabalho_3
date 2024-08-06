<!DOCTYPE html>
<html>
    <h2>Editar Produto</h2>
    <form method="POST" action="{{ route('produto.editar',$produto->id)}}">
        @csrf
        @method('POST')

        <div>
            <label for="nome">ID:</label>
            <input type="number" name="id" value="{{ $produto->id }}" readonly required>
        </div>
        <div>
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" name="nome_produto" value="{{ $produto->nome_produto}}" required>
        </div>
        <div>
            <label for="valor">Valor do Produto:</label>
            <input type="number" name="valor" value = "{{$produto->valor}}" required>
        </div>
        <div>
            <label for="data_validade">Data de Validade do Produto:</label>
            <input type="date" name="data_validade" value = "{{$produto->data_validade}}" required>
        </div>
        <div>   
            <label for="id_marca">Id da marca do Produto:</label>
            <input type="number" name="id_marca" value = "{{$produto->id_marca}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>
