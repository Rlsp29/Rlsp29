<?php 
require_once('connection.php');

    if(isset($_POST['submit']))
    {
       if(empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['nr']) || empty($_POST['date']) || empty($_POST['espaco']) || empty($_POST['refeicao']))
       {
            echo "<script>alert('Não preencheu todos os campos necessários.'); window.location.href='../index.php#reservar';</script>";
       }
       else
       {
            $query="select * from registo where email='".$_POST['email']."' and _password='".$_POST['pass']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $email = $_POST['email'];
                $pessoas = $_POST['nr'];
                $data = $_POST['date'];
                $espaco = $_POST['espaco'];
                $refeicao = $_POST['refeicao'];
                //meter codigo de INSERT nas reservas
                $sql = "INSERT INTO reservas(email, pessoas, dia, espaco, refeicao)VALUES ('$email', '$pessoas', '$data', '$espaco', '$refeicao')";

                if (mysqli_query($con, $sql)) {
                    echo "<style>background-color:green;</style>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                }
                
                echo "<script>alert('Reserva efectuada com sucesso.'); window.location.href='../index.php#reservar';</script>";
                //mostrar alerta de missao completa
        
            }
            else
            {               
                echo "<script>alert('Password incorrecta ou conta inexistente'); window.location.href='../index.php#reservar';</script>";               
            }
       }
    }
    else
    {
        echo 'Página de momento indisponível.<br>Erro: Contacte o administrador da página.';
    }

?>


