<?php
ob_start();
session_start();

    if(isset($_GET['cambiar'])){
        $color = $_GET['color'];
        $_SESSION['color'] = $color;
        header('location:index.php');
    }
    else{
        echo "no se incerto, ayuda pls";
    }

?>