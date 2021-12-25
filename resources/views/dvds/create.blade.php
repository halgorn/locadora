<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cadastrar um novo DVD</title>
</head>
<body>
    <form action="{{ route('registrar_dvd')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Nome</label> <br/>
        <input type="text" name="nome"> <br/>
        <label for="">Legenda</label> <br/>
        <input type="text" name="legenda"> <br/>
        <label for="">Preço</label> <br/>
        <input type="text" name="preco"> <br/>
        <label for="">Quantidade</label> <br/>
        <input type="text" name="quantidade"> <br/>
        <input type="file" name="imagem"> <br/>
        <button>Salvar</button>
    </form>
</body>
</html>
