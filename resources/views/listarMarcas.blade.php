<html>
<body>
<div>
    <h1>Lista de Produtos</h1>

    <table>
        <thead>
        <tr>
            <th>ID da Marca</th>
            <th>Nome da marca</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        @foreach ($marcas as $marca)
            <tr>
                <td>{{ $marca->nome_marca }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>


