<?php

session_start();  

function adminLogin()
{
    if (empty($_SESSION['adminLogin'])) {
        header("Location: index.php");
        exit;
    }
}

?>
