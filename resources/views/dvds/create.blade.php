<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cadastrar um novo DVD</title>
</head>
<body>

    <style>
        html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#301414, #552424);
  background: url(http://localhost:8000/img/baixados.jpg);
  background-size: cover;
}
.container{
    background: url(http://localhost:8000/img/fundo_index.jpg);
    box-shadow: inset 0px 0px 400px 110px rgb(0 0 0 / 99%);
}
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:-25px;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a, button {
    background-color: #e50914;
    line-height: normal;
    padding: 7px 17px;
    font-weight: 400;
    font-size: 1rem;
    text-decoration: none;
    color: white;
    outline: 0;
    border-radius: 5px;
    border: none;
}

.login-box a:hover {
  background: #a20909;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}
.login-box button:hover {
  background: #a20909;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
.botoes{
    display: flex;
    height: 40px;
    align-items: center;
    width: 100%;
    justify-content: space-around;
}

    </style>

    <div class="container">
        <div class="login-box">
            <h2>Cadastro de DVDs</h2>
            <form action="{{ route('registrar_dvd')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="user-box">
                <input type="text" name="nome" required> <br/>
                <label for="">Nome</label> <br/>
              </div>
              <div class="user-box">
                <input type="text" name="legenda" required> <br/>
                <label for="">Legenda</label> <br/>
              </div>

              <div class="user-box">
                <input type="text" name="preco" required> <br/>
                <label for="">Preço</label> <br/>
              </div>

              <div class="user-box">
                <input type="text" name="quantidade" required> <br/>
                <label for="">Quantidade</label> <br/>
              </div>

              <div class="user-box">
                <input type="text" name="categoria" required> <br/>
                <label for="">Categoria</label> <br/>
              </div>

              <div class="user-box">
                <input type="file" name="imagem" required> <br/>
                <label for="">Imagem de capa</label> <br/>
              </div>

              <span></span>
              <span></span>
              <span></span>
              <div class="botoes">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <button>Salvar</button>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Painel') }}
                    </x-jet-nav-link>
                </div>
              </div>

            </form>
          </div>
    </div>


</body>
</html>
