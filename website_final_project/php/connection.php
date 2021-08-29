<?php

    $con=mysqli_connect('localhost','root','','desire');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>