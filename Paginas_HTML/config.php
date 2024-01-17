<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbEmail = '';
$dbUsuario = '';
$dbPassword = '';
$dbName = 'login-hobbie-hub';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


//  if($conexao->connect_errno)
//  {
//      echo "Erro";
//  }

//  else
//  {
//      echo "Conexão efetuada com sucesso";
//  }



?>



<?php

// $dbHost = 'LocalHost';
// $dbUsername = 'root';
// $dbEmail = ''; // Receba o valor do e-mail do usuário
// $dbUsuario = ''; // Receba o valor do nome de usuário do usuário
// $dbPassword = ''; // Receba o valor da senha do usuário
// $dbName = 'login-hobbie-hub';

// // Cria a conexão
// $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// // Verifica a conexão
// if ($conexao->connect_errno) {
//     echo "Erro: Não foi possível conectar ao banco de dados.";
// } else {
//     echo "Conexão efetuada com sucesso";

//     // Dados a serem inseridos (substitua pelos dados reais do formulário)
//     $nome = 'NomeExemplo';
//     $email = $dbEmail; // Use a variável que recebe o e-mail do usuário
//     $usuario = $dbUsuario; // Use a variável que recebe o nome de usuário do usuário
//     $senha = 'SenhaExemplo'; // Substitua pela variável que recebe a senha do usuário

//     // Prepara a consulta SQL utilizando prepared statements
//     $stmt = $conexao->prepare("INSERT INTO usuarios (nome, email, usuario, senha) VALUES (?, ?, ?, ?)");
    
//     // Vincula os parâmetros
//     $stmt->bind_param("ssss", $nome, $email, $usuario, $senha);

//     // Executa a consulta
//     if ($stmt->execute()) {
//         echo "Dados inseridos com sucesso na tabela 'usuarios'.";
//     } else {
//         echo "Erro ao inserir dados na tabela 'usuarios': " . $stmt->error;
//     }
    
//     // Fecha a consulta e a conexão
//     $stmt->close();
//     $conexao->close();
// }
?> 
