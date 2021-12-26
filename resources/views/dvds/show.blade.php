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
        /* CSS DA VISULIZAÇÃO DOS CARDS*/
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


        html,

        /* CSS DA VISULIZAÇÃO DAS TABELAS E FUNDO*/

body {

  background: linear-gradient(45deg, #49a09d, #5f2c82);
  font-family: sans-serif;
  font-weight: 100;
  background: url('{{url('/img/fundo_show.jpg')}}');
  box-shadow: inset 0px 0px 400px 110px rgba(0, 0, 0, .99);
}
.container-exib-cadastro {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.container-exib-cadastro table {
  width: 800px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}
.container-exib-cadastro th,
.container-exib-cadastro td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
}
.container-exib-cadastro th {
  text-align: left;
}
.container-exib-cadastro thead th {
  background-color: #55608f;
}
.container-exib-cadastro  tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
.container-exib-cadastro tbody td {
  position: relative;
}
.container-exib-cadastro tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}

/* CSS DA LOGO SVG*/

.svg-icon-netflix-logo{
    fill: #e50914;
    line-height: normal;
    width:350px;
}
.logo_index{
    display:flex;
    justify-content:center;
}
.logo_index svg{
    stroke-linejoin: miter;

    stroke-width: 1px;
}

h1{
    font-size: 4rem;
}
h1, h2, p, span,a{

    font-family: 'Netflix Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
    color: white;

}
.texto-titulo{
    margin-top: 0px;
    margin-bottom: 0px;
    text-align: center;
}

.text-sm {
    background-color: #e50914;
    line-height: normal;
    padding: 7px 17px;
    font-weight: 400;
    font-size: 1rem;
    text-decoration: none;
    color: white;
    outline: 0;
    border-radius: 5px;
}
.btn{
    height: 40px;
}
        </style>
    <?php if(auth()->user()->cliente==1): ?>
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
    <?php endif ?>
    <?php if(auth()->user()->admin==1): ?>
        <div class="container-exib-cadastro">
            <div class="logo_index">
                <a href="{{ route('home') }}">
                    <svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="false"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>
                </a>
            </div>
            <div class="texto-titulo">
                <h2 id="" class="our-story-card-title" data-uia="hero-title">Filmes Cadastrados. </h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Legenda</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th>Disponibilidade</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dvds as $dvd):
                    <tr>
                        <td>{{$dvd->nome}}</td>
                        <td>{{$dvd->legenda}}</td>
                        <td>{{$dvd->preco}}</td>
                        <td>{{$dvd->quantidade}}</td>
                        <td>Categoria</td>
                        <td>Disponibilidade</td>
                        <td><a href="{{ route('editar_dvd', ['id'=>$dvd->id])}}"
                            title="Editar dvd {{$dvd->nome}}">Editar</a>
                        </td>
                        <td><a href="{{ route('excluir_dvd', ['id'=>$dvd->id])}}"
                            title="Excluir dvd {{$dvd->nome}}">Excluir</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="btn">
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Painel</a>
                <a  class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('registrar_dvd')}}">Cadastrar DVD</a>            </div>

            </div>
    <?php endif ?>
</body>
</html>
