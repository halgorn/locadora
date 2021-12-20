<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver DVD</title>
</head>
<body>
    <table>
        <tr><th>Nome</th><th>Legenda</th><th>Preço</th><th>Quantidade</th>
        @foreach($dvds as $dvd):
            <tr>
                <td>{{$dvd->nome}}</td>
                <td>{{$dvd->legenda}}</td>
                <td>{{$dvd->preco}}</td>
                <td>{{$dvd->quantidade}}</td>
                <td>Editar</td>
                <td><a href="{{ route('excluir_dvd', ['id'=>$dvd->id])}}"
                        title="Excluir dvd {{$dvd->nome}}">Excluir</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>