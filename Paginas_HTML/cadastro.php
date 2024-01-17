<?php

if(isset($_POST['submit']))
{
  // print_r($_POST['nome']);
  // print_r('<br>');
  // print_r($_POST['email']);
  // print_r('<br>');
  // print_r($_POST['usuario']);
  // print_r('<br>');
  // print_r($_POST['senha']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,usuario,senha) VALUES ('$nome','$email','$usuario','$senha')");

}

?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HobbiesHub</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #BD09B6;">

  <style>
    #circulo {
      width: 300px;
      height: 300px;
      background-color: yellow;
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      margin-top: 150px;
    }


    .hobbie_icone {
      display: block;
      margin: 50px auto 0;
      width: 70%;
    }

    .instagram {
      width: 10.5%;
    }

    .facebook {
      width: 7%;
    }

    .menu-toggle {
      display: flex;
      flex-direction: column;
      cursor: pointer;
    }

    .bar {
      display: block;
      width: 25px;
      height: 3px;
      background-color: black;
      margin: 5px 0;
      transition: 0.4s;
    }

    .menu {
      display: none;
    }

    .menu.active {
      display: block;
    }

    .menu ul {
      list-style-type: none;
      padding: 0;
      background-color: white;
      border: 2px solid black;
      position: absolute;
    }

    .menu li {
      border: 1px solid black;
    }

    .menu a {
      text-decoration: none;
      color: black;
      font-size: 18px;
    }



    /* CSS Página Login */

    #FundoAmareloLogin {
      width: 450px;
      height: 280px;
      background-color: yellow;
      position: absolute;
      border-radius: 5%;
      top: 35%;
      left: 50%;
      transform: translate(-50%, -50%);
      margin-top: 150px;
    }

    .cadastro_dados_usuario {
      background: none;
      border: none;
      border-bottom: 2px solid black;
      outline: none;
      color: black;
      font-size: 15px;
      width: 100%;
      transition: transform 0.3s ease;
      /* Adiciona uma transição suave de 0.3 segundos */
    }

    #login {
      margin-top: 20px;
      transition: transform 0.3s ease;
      /* Adiciona uma transição suave de 0.3 segundos */
    }


    .cadastro_dados_usuario:hover {
      transform: scale(1.1);
      /* Aumenta o tamanho em 10% quando o mouse está sobre o input */
    }

    #login:hover {
      transform: scale(1.1);
      /* Aumenta o tamanho em 10% quando o mouse está sobre o input */
    }

    #animacao_barrinhas {
      transition: transform 0.3s ease;
      /* Adiciona uma transição suave de 0.3 segundos */
    }

    #animacao_barrinhas:hover {
      transform: scale(1.1);
      /* Aumenta o tamanho em 10% quando o mouse está sobre o input */

    }
  </style>








  <form action="login.php" method="POST">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12" style="background-color: #FFDE00; text-align: center; font-size: 20px;">
          <h3 style="margin-top: 10px; padding: 0px 0;">Descubra aqui seu hobbie</h3>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #BD09B6; height: 95vh;">
      <div class="row">
        <div class="col-12"
          style="font-family: 'Shrikhand', cursive; text-align: center; font-size: 60px; padding: 0%;">
          <p style="margin: 0;"><a href="index.html" style=" color: black;">HobbyHub.</a></p>
        </div>
      </div>

      <div class="row">
        <div class="col-1" style="margin-top: 10px;" id="animacao_barrinhas">
          <div class="menu-toggle" id="toggle-button">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>



        <div class="row">
          <div class="col-2">
            <div class="menu" id="menu">
              <ul>
                <li><a href="#">Configurações &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
                <li><a href="#">Novidades</a></li>
                <li><a href="#">Quem somos</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-6" id="FundoAmareloLogin">


          <div class="row" id="login">
            <div class="col-1"></div>
            <div class="col-2">Nome:</div>
            <div class="col-8"><input type="text" class="cadastro_dados_usuario" name="nome"></div>
            <div class="col-1"></div>
          </div>



          <div class="row" id="login">
            <div class="col-1"></div>
            <div class="col-2">Email:</div>
            <div class="col-8"><input type="email" class="cadastro_dados_usuario" name="email"></div>
            <div class="col-1"></div>
          </div>



          <div class="row" id="login">
            <div class="col-1"></div>
            <div class="col-2">Usuário:</div>
            <div class="col-8"><input type="text" class="cadastro_dados_usuario" name="usuario"></div>
            <div class="col-1"></div>
          </div>




          <div class="row" id="login">
            <div class="col-1"></div>
            <div class="col-2">Senha:</div>
            <div class="col-8"><input type="text" class="cadastro_dados_usuario" name="senha"></div>
            <div class="col-1"></div>
          </div>


          <div class="row" id="login">
            <div class="col-1"></div>
            <div class="col-3">Confirmar:</div>
            <div class="col-7"><input type="text" class="cadastro_dados_usuario"></div>
            <div class="col-1"></div>
          </div>

        </div>

      </div>


      <div class="row" style="margin-top: 30%;">
        <div class="col-4"></div>
        <div class="col-2"><a href="index.html"><button type="button" class="btn btn-primary btn-lg"
          style="background-color: #FFDE00; color: #000;"> &nbsp; voltar &nbsp; </button></a></div>
        <div class="col-3"><button type="submit" class="btn btn-primary btn-lg" name="submit"
            style="background-color: #FFDE00; color: #000; margin-left: 28%;"> &nbsp; Enviar &nbsp; </button></div>



        <div class="row" style = "padding-top: 20px;">
          <div class="col-5"></div>
          <div class="col-4">
            <a href="login.html" style="font-size: 20px; text-decoration: underline; margin-left: 30px; color: black">Possuo cadastro</a>
          </div>
        </div>

      </div>

    </div>








    <div class="container-fluid" style="background-color: #FFDE00;">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-6">
          <p style="font-size: 20px; height: 0.4vh;">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Segue a gente nas redes sociais
          </p>
        </div>
        <div class="col-1"></div>
      </div>

      <div class="row">
        <div class="col-5"></div>
        <div class="col-6">
          &nbsp; &nbsp; &nbsp; <img src="../Imagens/2227-removebg.png" alt="Ícone instagram" class="instagram">
          <img src="../Imagens/Facebook_icon_2013.svg-removebg-preview.png" alt="Ícone facebook" class="facebook">
        </div>
      </div>
    </div>






    <script>
      document.getElementById('toggle-button').addEventListener('click', function () {
        document.getElementById('menu').classList.toggle('active');
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </form>

</body>

</html>