<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver DVD</title>
</head>
<body>

    <style>
        .container {
          display: flex;
          margin-top: 50px;
        }

        .item {
          position: relative;
          display: block;
          flex: 1 1 0px;
          transition: transform 500ms;
        }

        .container:focus-within .item,
        .container:hover .item {
          transform: translateX(-25%);
        }

        .item:focus ~ .item,
        .item:hover ~ .item {
          transform: translateX(25%);
        }

        .container .item:focus,
        .container .item:hover {
          transform: scale(1.5);
          z-index: 1;
        }

        body {
          overflow: hidden;
        }

        .item img {
          display: block;
          max-width: 100%;
            width: 300px;
        }
        </style>

    <div class="container-categoria">
        <h1>Filmes para alugar</h1>
        <h3>Categoria</h3>
        <div class="container dvds">

            @foreach($dvds as $dvd):
                <div class="dvd">

                    <?php
                    $subject = $dvd->imagem;
                    $search = 'public/' ;
                    $url = str_replace($search, '', $subject) ;
                   ?>
                    <a href="#animals" class="item"><img src="{{ url ("storage/{$url}") }}" alt="Animals"></a>
                    <p>{{$dvd->nome}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <table>
        <tr><th>Nome</th><th>Legenda</th><th>Preço</th><th>Quantidade</th>
        @foreach($dvds as $dvd):
            <tr>
                <td>{{$dvd->nome}}</td>
                <td>{{$dvd->legenda}}</td>
                <td>{{$dvd->preco}}</td>
                <td>{{$dvd->quantidade}}</td>
                <td><a href="{{ route('editar_dvd', ['id'=>$dvd->id])}}"
                        title="Editar dvd {{$dvd->nome}}">Editar</a>
                </td>

                <td><a href="{{ route('excluir_dvd', ['id'=>$dvd->id])}}"
                        title="Excluir dvd {{$dvd->nome}}">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
