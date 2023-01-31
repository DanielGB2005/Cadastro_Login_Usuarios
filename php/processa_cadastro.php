<?php 
   include_once("conexao.php");

   $email = $_POST["useremail"];
   $senha = $_POST["senha"];

   $sql = "SELECT * FROM users WHERE email ='$email' AND senha ='$senha'";
     if ($result=mysqli_query($conn,$sql)){
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result); 
    if($rowcount > 0){
      echo "Usuário existente! Por favor, Tente novamente inserindo outros dados para usuário";
    }else {
      $sql = "INSERT INTO users (email, senha) VALUES ('$email', '$senha')";
      $result=mysqli_query($conn,$sql);
      header("Location: login.php");
    } 
   }

  ?>