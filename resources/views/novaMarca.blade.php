<html>
<h2>Adicionar a sua marca à nossa compania</h2>
<form method="POST" action="{{ route('marca.salvar') }}">
    @csrf
    <div>
        <label for="nome">Nome de sua marca:</label>
        <input type="text" name="nome_marca" required>
    </div>
 
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</html>