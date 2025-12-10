<?php
session_start();
include './inc/connection.php';

if (!empty($_SESSION['adminLogin'])) {
    header("Location: dashboard.php");
    exit;
}


$admin_name = $_POST['admin_name'] ?? '';
$admin_pass = $_POST['admin_pass'] ?? '';
$error = '';

if ($admin_name && $admin_pass) {
    
    $sql = "SELECT * FROM admin_login WHERE admin_name='$admin_name' AND admin_pass='$admin_pass'";
    $res = mysqli_query($conn,$sql);
    
    if (mysqli_num_rows($res)) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminID'] = $row['id'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="login-form bg-white p-4 shadow-lg" style="width:400px; margin:150px auto; border-radius:10px;">

        <h3 class="text-center mb-4">Admin Login</h3>

        <?php 
        if ($error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
        ?>

        <form method="POST">
            <input type="text" name="admin_name" class="form-control mb-3" placeholder="Admin Name" required>

            <input type="password" name="admin_pass" class="form-control mb-3" placeholder="Password" required>

            <button name="login" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

</body>

</html>
