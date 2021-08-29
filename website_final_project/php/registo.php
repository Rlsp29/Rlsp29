<?php

    include("conect.php");
    
    $email = $nome = $apelido= $pass = $pass1 = '';

     $email = $_POST['email'];
     $nome = $_POST['unome'];
     $apelido= $_POST['uapelido'];
     $pass = $_POST['psw'];
     $pass1 = $_POST['psw-repeat'];

    
    //  if(mysql_num_rows($email_check) == 1){
    //     echo "<script> alert('Inseriu um email que já está registado.')</script>";
    //   }
    //   else{
            if ($pass != $pass1){
                echo "<script>alert('Inseriu palavras-chave distintas.'); window.location.href='../index.php#reservar';</script>";
            }
            else{
                $sql = "INSERT INTO registo(email, nome, apelido, _password)VALUES ('$email', '$nome', '$apelido', '$pass')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script>alert('Conta registada com sucesso.'); window.location.href='../index.php#reservar';</script>";
                    } else {
                            echo "<script>alert('Inseriu um email que já está registado.'); window.location.href='../index.php#reservar';</script>";
                    }
            }
        mysqli_close($conn);
?>
