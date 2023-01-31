<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel = "stylesheet" href = "./../style/estilo.css">
      <title> Login </title>   
  </head>

  <body>   

    <div id = "form"> 
          <h2>  Login  </h2>
          <h3> preencha os campos abaixo: </h3>
          <br/>
          <br/>
           <div>
              <form action = "processa_login.php" method='POST'>
                <h2> E-mail cadastrado: </h2>
                <br/>

                <div> 
                 <input type = "text" id = "fname" name = "emailconf" placeholder = "Digite seu email...">
                </div>
           
               <br/>
               <br/>
               <h2> Senha cadastrada: </h2>
               <br/>

               <div>
                 <input type = "password" id = "lname" name = "senhaconf" placeholder = "Digite sua senha...">
               </div>

               <br/>
               <br/>
               <button type = "submit" class = "btn" name="submit"> Enviar </button>
               
             </form>
           </div>


    </div>

</section>


  </body>
</html>