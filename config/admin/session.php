
<?php
  if (isset($_SESSION['id'])&&isset($_SESSION['role'])) {
    $id   = $_SESSION['id'];
    $md5r = $_SESSION['role'];
    if($md5r==MD5("admin")){$role="admin";}
    else if($md5r==MD5("superadmin")){$role="superadmin";}
  }

  if (isset($id,$role)) {
    require("../models/user.php");
    $user = new user();
    $data = $user->tampil_id($id);
    $username = $data["username"]; 
    $name     = $data["name"];
  }
  else {header("Location:login");}
?>