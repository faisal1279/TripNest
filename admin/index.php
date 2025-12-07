<?php    
    require('./inc/essentials.php');
    require('./inc/connection.php');

    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
      redirect('dashboard.php'); 

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('./inc/links.php') ?>
    <style>
    div.login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
    </style>
</head>

<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form action="" method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none"
                        placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input type="password" required name="admin_pass" class="form-control shadow-none"
                        placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>
    <?php 
        if(isset($_POST['login'])){
            $frm_data = filteration($_POST);
            // echo"<h1>$frm_data[admin_name]</h1>";
            // echo"<h1>$frm_data[admin_pass]</h1>";

            $query = "SELECT *FROM `admin_login` WHERE `admin_name`=? AND `admin_pass`=? ";
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

            $res = select($query, $values,'ss');
            // print_r($res);

            if($res->num_rows == 1){
                // echo "got user";
                $row = mysqli_fetch_assoc($res);
            
                $_SESSION['adminLogin'] = true;
                $SESSION['adminID'] = $row['id'];
                redirect('dashboard.php');
            }else{
                alert('error','Login failed - Invalid Credentials!');
              
            }
        }

  
    
    ?>
    <?php require('./inc/script.php') ?>
</body>

</html>