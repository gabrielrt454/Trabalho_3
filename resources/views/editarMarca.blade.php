<!DOCTYPE html>
<html>
    <h2>Editar Marca</h2>
    <form method="POST" action="{{ route('marca.editar',$marca->id)}}">
        @csrf
        @method('POST')

        <div>
            <label for="nome">ID:</label>
            <input type="number" name="id" value="{{ $marca->id }}" readonly required>
        </div>
        <div>
            <label for="nome_marca">Nome da Marca:</label>
            <input type="text" name="nome_marca" value="{{ $marca->nome_marca }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>
</html>
