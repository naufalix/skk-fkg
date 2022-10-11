<?php 
  if (isset($_POST["login"],$_POST["username"],$_POST["password"])) {
    $u = $_POST["username"];
    $p = MD5($_POST["password"]);

    //cek nim
    require("../models/user.php");
    $user = new user();
    $data = $user->login($u,$p);
    if ($data) {
        $_SESSION['id'] = $data["id"];
        $_SESSION['role'] = MD5($data["role"]);
        header("Location:home"); 
        //echo $id."<br>".$role;
    } else {$error="Username/password salah!";}
  }
?>