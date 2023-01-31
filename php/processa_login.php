<?php
include("conexao.php");

  if(isset($_POST['submit'])){
    $emailconf = $_POST['emailconf'];
    $senhaconf = $_POST['senhaconf'];

    $sql = "SELECT * FROM users WHERE email = '$emailconf' and senha = '$senhaconf'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count==1 && $_POST['emailconf'] != "" && $_POST['senhaconf'] != "") {
        header("Location: paginicial.php");
    } else {
        echo '<script>
    window.location.href = "index.php";
    alert("O login falhou, pois um ou mais campos são inválidos. Confira o e-mail e a senha informados");
    </script>';

    }

 }  
?>