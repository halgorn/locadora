<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ver DVD</title>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
</head>
<?php if(auth()->user()->cliente==1): ?>
<body>
    <style>
        /* CSS VARIABLES */
:root {
  --primary: #141414;
  --light: #f3f3f3;
  --dark: #686868;
}

html,
body {
  width: 100vw;
  min-height: 100vh;
  margin: 0;
  padding: 0;
  background-color: var(--primary);
  color: var(--light);
  font-family: Arial, Helvetica, sans-serif;
  box-sizing: border-box;
  line-height: 1.4;
}

img {
  max-width: 100%;
}

h1 {
  padding-top: 60px;
}

.wrapper {
  margin: 0;
  padding: 0;
}

/* HEADER */
header {
  padding: 20px 20px 0 20px;
  position: fixed;
  top: 0;
  display: grid;
  grid-gap: 5px;
  grid-template-columns: 1fr 4fr 1fr;
  grid-template-areas: "nt mn mn sb . . . ";
  background-color: var(--primary);
  width: 100%;
  margin-bottom: 0px;
}

.netflixLogo {
  grid-area: nt;
  object-fit: cover;
  width: 100px;
  max-height: 100%;

  padding-left: 30px;
  padding-top: 0px;
}

.netflixLogo img {
  height: 35px;
}

#logo {
  color: #e50914;
  margin: 0;
  padding: 0;
}

.main-nav {
  grid-area: mn;
  padding: 0 30px 0 20px;
}

.main-nav a {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}

.main-nav a:hover {
  color: var(--dark);
}

.sub-nav {
  grid-area: sb;
  padding: 0 40px 0 40px;
}

.sub-nav a {
  color: var(--light);
  text-decoration: none;
  margin: 5px;
}

.sub-nav a:hover {
  color: var(--dark);
}

/* MAIN CONTIANER */
.main-container {
  padding: 50px;
}

.box {
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(6, minmax(100px, 1fr));
}

.box a {
  transition: transform 0.3s;
}

.box a:hover {
  transition: transform 0.3s;
  -ms-transform: scale(1.4);
  -webkit-transform: scale(1.4);
  transform: scale(1.4);
}

.box img {
  border-radius: 2px;
}

/* LINKS */
.link {
  padding: 50px;
}

.sub-links ul {
  list-style: none;
  padding: 0;
  display: grid;
  grid-gap: 20px;
  grid-template-columns: repeat(4, 1fr);
}

.sub-links a {
  color: var(--dark);
  text-decoration: none;
}

.sub-links a:hover {
  color: var(--dark);
  text-decoration: underline;
}

.logos a {
  padding: 10px;
}

.logo {
  color: var(--dark);
}

/* FOOTER */
footer {
  padding: 20px;
  text-align: center;
  color: var(--dark);
  margin: 10px;
}

/* MEDIA QUERIES */

@media (max-width: 900px) {
  header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
      "nt nt nt  .  .  . sb . . . "
      "mn mn mn mn mn mn  mn mn mn mn";
  }

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(4, minmax(100px, 1fr));
  }
}

@media (max-width: 700px) {
  header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
      "nt nt nt  .  .  . sb . . . "
      "mn mn mn mn mn mn  mn mn mn mn";
  }

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(3, minmax(100px, 1fr));
  }

  .sub-links ul {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 500px) {
  .wrapper {
    font-size: 15px;
  }

  header {
    margin: 0;
    padding: 20px 0 0 0;
    position: static;
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    grid-template-areas:
      "nt"
      "mn"
      "sb";
    text-align: center;
  }

  .netflixLogo {
    max-width: 100%;
    margin: auto;
    padding-right: 20px;
  }

  .main-nav {
    display: grid;
    grid-gap: 0px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
  }

  h1 {
    text-align: center;
    font-size: 18px;
  }

  .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
  }

  .box a:hover {
    transition: transform 0.3s;
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1.2);
  }

  .logos {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    text-align: center;
  }

  .sub-links ul {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
    font-size: 15px;
  }
}

    </style>
    <div class="wrapper">

      <!-- HEADER -->
      <header>
        <div class="netflixLogo">
            <a href="{{ route('home') }}">
                <svg style="fill: #e50914; line-height: normal;" viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="false"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg>
            </a>        </div>
        <nav class="main-nav">
          <a href="#home">Home</a>
          <a href="#tvShows">Show de TV</a>
          <a href="#movies">Filmes</a>
          <a href="#originals">Originais</a>
          <a href="#">Adicionados Recentemente</a>
        </nav>
        <nav class="sub-nav">
          <a href="{{ route('profile.show') }}">Conta</a>
        </nav>
      </header>
      <!-- END OF HEADER -->

      <!-- MAIN CONTAINER -->
      <section class="main-container" >
        <div class="location" id="home">
            <h1 id="home">Populares na Netflix</h1>
            <div class="box">
                @foreach($dvds as $dvd)
                <div class="dvd">
                    <?php
                    $subject = $dvd->imagem;
                    $search = 'public/' ;
                    $url = str_replace($search, '', $subject) ;
                    ?>
                    <a href="#animals" class="item"><img src="{{ url ("storage/{$url}") }}" alt="{{$dvd->nome}}"></a>
                </div>
                @endforeach
            </div>
        </div>


        <h1 id="myList">Tendencia Hoje</h1>
        <div class="box">
            @foreach($dvds as $dvd)
            <div class="dvd">
                <?php
                $subject = $dvd->imagem;
                $search = 'public/' ;
                $url = str_replace($search, '', $subject) ;
                ?>
                <a href="#animals" class="item"><img src="{{ url ("storage/{$url}") }}" alt="{{$dvd->nome}}"></a>
            </div>
            @endforeach
        </div>

        <h1 id="tvShows">Show de TV</h1>
        <div class="box">
            @foreach($dvds as $dvd)
                <div class="dvd">
                    <?php
                    $subject = $dvd->imagem;
                    $search = 'public/' ;
                    $url = str_replace($search, '', $subject) ;
                    ?>
                    <a href="#animals" class="item"><img src="{{ url ("storage/{$url}") }}" alt="{{$dvd->nome}}"></a>
                </div>
            @endforeach
        </div>


        <h1 id="movies">Ação e Aventura</h1>
        <div class="box">
            @foreach($dvds as $dvd)
                <div class="dvd">
                    <?php
                    $subject = $dvd->imagem;
                    $search = 'public/' ;
                    $url = str_replace($search, '', $subject) ;
                    ?>
                    <a href="#animals" class="item"><img src="{{ url ("storage/{$url}") }}" alt="{{$dvd->nome}}"></a>
                </div>
            @endforeach
        </div>

        <h1 id="originals"> Originais Netflix </h1>
        <div class="box">
            @foreach($dvds as $dvd)
                <div class="dvd">
                    <?php
                    $subject = $dvd->imagem;
                    $search = 'public/' ;
                    $url = str_replace($search, '', $subject) ;
                    ?>
                    <a href="#animals" class="item"><img src="{{ url ("storage/{$url}") }}" alt="{{$dvd->nome}}"></a>
                </div>
            @endforeach
        </div>
      <!-- END OF MAIN CONTAINER -->
      <!-- LINKS -->
      <section class="link">
        <div class="logos">
          <a href="https://www.facebook.com/netflixbrasil/"><i class="fab fa-facebook-square fa-2x logo"></i></a>
          <a href="https://www.instagram.com/netflixbrasil/?hl=pt-br"><i class="fab fa-instagram fa-2x logo"></i></a>
          <a href="https://twitter.com/NetflixBrasil"><i class="fab fa-twitter fa-2x logo"></i></a>
          <a href="https://www.youtube.com/channel/UCc1l5mTmAv2GC_PXrBpqyKQ"><i class="fab fa-youtube fa-2x logo"></i></a>
        </div>
        <div class="sub-links">
          <ul>
            <li><a href="#">Audio e Legenda</a></li>
            <li><a href="#">Descrição de Audio</a></li>
            <li><a href="#">Ajuda</a></li>
            <li><a href="#">Cartões de Presentes</a></li>
            <li><a href="#">Centro de Mídia</a></li>
            <li><a href="#">Relação com Investidores</a></li>
            <li><a href="#">Vagas</a></li>
            <li><a href="#">Termos de Uso</a></li>
            <li><a href="#">Privacidade</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Informações Corporativas</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>
      </section>
      <!-- END OF LINKS -->

      <!-- FOOTER -->
      <footer>
        <p>&copy 1997-2022 Netflix, Inc.</p>
      </footer>
    </div>
  </body>
<?php endif ?>


<?php if(auth()->user()->admin==1): ?>
<body>

    <style>
        /* CSS DA VISULIZAÇÃO DOS CARDS*/


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
                        <th>Email</th>
                        <th>Data Criação</th>
                        <th>Data Atualização</th>
                        <th>Cliente</th>
                        <th>Administrador</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($user as $u):
                    <tr>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->created_at}}</td>
                        <td>{{$u->update_at}}</td>
                        <td><?php if ($u->admin==1){   echo "Sim";  }else{  echo"Não"; }?></td>
                        <td><?php if ($u->cliente==1){ echo "Sim"; }else{  echo"Não"; } ?></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="btn">
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Painel</a>
                <a  class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('registrar_dvd')}}">Cadastrar Usuário</a>            </div>
            </div>
</body>
<?php endif ?>
</html>
