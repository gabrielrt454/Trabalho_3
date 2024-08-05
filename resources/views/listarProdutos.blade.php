<html>
<body>
<div>
    <h1>Lista de Produtos</h1>

    <table>
        <thead>
        <tr>
            <th>ID da Marca</th>
            <th>Nome do produto</th>
            <th>Data de validade</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        @foreach ($produtos as $produto)
            <ul>
            <li>{{ $produto->nome_produto }} - {{ $produto->valor }} - {{ $produto->data_validade }} - {{ $produto->id_marca }}</li>z
</ul>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>


