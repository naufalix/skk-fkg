
<?php
  if (!empty($_COOKIE["id"])&&!empty($_COOKIE["role"])) { 
    $id   = $_COOKIE["id"];
    $md5r = $_COOKIE["role"];
    if($md5r==MD5("admin")){$role="admin";}
    else if($md5r==MD5("user")){$role="user";}
  }
  else if (isset($_SESSION['id'])&&isset($_SESSION['role'])) {
    $id   = $_SESSION['id'];
    $md5r = $_SESSION['role'];
    if($md5r==MD5("admin")){$role="admin";}
    else if($md5r==MD5("user")){$role="user";}
  }

  if (isset($id,$role)) {
    require("models/user.php");
    $user = new user();
    $data = $user->tampil_id($id);
    $username = $data["username"]; 
    $nama     = $data["nama"];
    $foto     = $data["foto"];
    if (empty($foto)) {$foto="default.png";}
  }
  else {header("Location:login");}
?>