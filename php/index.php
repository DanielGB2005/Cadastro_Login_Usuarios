<?php
   include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel = "stylesheet" href = "./../style/estilo.css">
      <title> Cadastro </title>   
  </head>

  <body> 

    <div id = "form"> 
          <h2>  Faça seu Cadastro para ter acesso ao site completo!  </h2>
          <h3> Cadastre-se nos campos abaixo: </h3>
           <div>
              <form action = "processa_cadastro.php" method='POST' onsubmit="return isvalid()">
                <h2> E-mail do usuário: </h2>
                <br/>

                <div> 
                 <input type = "text" id = "useremail" name = "useremail" placeholder = "Digite seu e-mail...">
                </div>
           
               <br/>
               <br/>
               <h2> Senha: </h2>
               <br/>

               <div>
                 <input type = "password" id = "senha" name = "senha" placeholder = "Digite uma senha...">
               </div>

               <br/>
               <br/>
               <button type = "submit" class = "btn" name="submit"> Enviar </button>

               <a href = "login.php"> Já sou cadastrado(a) </a>
               
             </form>
           </div>


    </div>

  </body>
</html>