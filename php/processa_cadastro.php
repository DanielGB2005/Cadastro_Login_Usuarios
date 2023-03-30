<?php 
   include_once("conexao.php");

   $email = $_POST["useremail"];
   $senha = $_POST["senha"];
   $a = hash("sha512", $email);
   $b = hash("sha512", $senha);

   $sql = "SELECT * FROM users WHERE email ='$email' AND senha ='$senha'";
     if ($result=mysqli_query($conn,$sql)){
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result); 
    if($rowcount > 0){
      echo "Usuário existente! Por favor, Tente novamente inserindo outros dados para usuário";
    }else {
      $sql = "INSERT INTO users (email, senha) VALUES ('$a', '$b')";
      $result=mysqli_query($conn,$sql);
      header("Location: login.php");
    } 
   }

  ?>