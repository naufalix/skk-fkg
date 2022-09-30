<?php 
session_start();  
session_unset();
setcookie("id","", time() + 3600, "/");
setcookie("role","", time() + 3600, "/");
header("Location:login"); 
?> 