<?php
  //incluir o arquivo de conexão com o banco de dados
  include ("database.php");

  //iniciar a sessão
  session_start();

  //recuperar as informações via post do formulário
  $loginUsername = $_POST['loginUsername'];

  $loginPassword = $_POST['loginPassword'];

  //teste rápido para verificar se as informações do formulário estão corretas
  //echo $loginUsername. '<br><br>' .$loginpassword;

  //Verificar se os campos do formulário estão vazios
  if(empty($loginUsername))
  {
      $_SESSION['mensagem']="Preencha o campo Login";
      header("Location: loginScreen.php");
  }
  else if(empty($loginPassword))
  {
      $_SESSION['mensagem']="Preencha o campo Senha";
      header("Location: loginScreen.php");
  }
  else
  {
      //Construir a SQL de consulta ao banco de dados
      $sql = "SELECT * FROM heitor_users_login WHERE user_username='$loginUsername' AND user_password='$loginPassword'";

      //Comando para executar o sql
      $resultado = mysqli_query($conexao, $sql);

      //Comando para converter o resultado em um array associativo
      $dados = mysqli_fetch_assoc($resultado);

      //Validar os dados do usuário
      if($dados['user_username']==$loginUsername && $dados['user_password'] == $loginPassword)
      {
          //Criar um array novo com os dados do usuário
          $usuario = array("username"=>$dados['user_username'], "password"=>$dados['user_password'], "type"=>$dados['user_type']);
           
          //colocar o array de usuário em uma sessão
          $_SESSION['usuario'] = $usuario;

          //redicionar após verificação
          header("Location: profileScreen.php");
      }
      else//Caso a verificação falhe
      {
          //Criar uma nova mensagem para sessão
          $_SESSION['mensagem'] = "Login ou senha inválidos";

          //Redicionar para página de login
          header("Location: loginScreen.php");
      }

  }
  