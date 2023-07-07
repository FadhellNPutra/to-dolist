<?php 
    session_start();
    include "library/config.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    $jml = mysqli_num_rows($query);

    if($jml > 0){
        $_SESSION['username'] = $data['username']; 
        $_SESSION['password'] = $data['password'];
        
        header("location:index.php");
    }else {
        echo "<p style=text-align: center;>Login gagal! Coba lagi atau registrasi dahulu</p>";
        echo '<meta http-equiv="refresh" content="2;url=login.html">';
    }
?>