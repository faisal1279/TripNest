<?php
function adminLogin()
{
    session_start();

    if(!isset($_SESSION['adminLogin'])){
        echo "<script>window.location.href='index.php';</script>";
        exit;
    }
}

function redirect($url){
    echo "<script>window.location.href='$url';</script>";
}

function alert($type, $msg){
    $cls = ($type == "success") ? "alert-success" : "alert-danger";

    echo "
        <div class='alert $cls alert-dismissible fade show' role='alert'>
            $msg
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        </div>
    ";
}
?>