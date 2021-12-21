<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Editar cadastro DVD</title>
</head>
<body>
    
    <form action="{{route('atualizar_dvd',['id' => $dvds->id ])}}" method="POST">
        @csrf
        <label for="">Nome</label> <br/>
        <input type="text" name="nome" value="{{$dvds->nome}}"> <br/>
        <label for="">Legenda</label> <br/>
        <input type="text" name="legenda"  value="{{$dvds->legenda}}"> <br/>
        <label for="">Preço</label> <br/>
        <input type="text" name="preco"  value="{{$dvds->preco}}"> <br/>
        <label for="">Quantidade</label> <br/>
        <input type="text" name="quantidade"  value="{{$dvds->quantidade}}"> <br/>
        <button>Salvar</button>
    </form>
</body>
</html>