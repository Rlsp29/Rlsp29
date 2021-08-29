<?php 
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();
        // header("location:index.php");
        header("location:../html/admin.html");
    }

?>