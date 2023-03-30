<?php 
    $servidor = "localhost:3306";
    $usuario = "root";
    $senha = "leinad$5";
    $dbname = "projetologin";

    $conn = new mysqli($servidor, $usuario, $senha, $dbname);

    if($conn->connect_error){
        die("falha na conexão com o banco de dados");
    }
    else{
        echo "";
    }
?>

