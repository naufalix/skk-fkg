<?php  
  session_start(); 
  require('../config/database.php'); 
  date_default_timezone_set("Asia/Jakarta"); 
  
  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    if  ($page=="logout") {header("Location:logout");}
    $admin_page = array(
      "home","kegiatan","kelulusan","lain-lain","login","probinmaba","user"
    );
    if  (in_array($page, $admin_page)) { $page=$page; }
    else { $page="404"; }
  }
  else{ $page="home"; } 
  
  if ($page=="login"||$page=="unsub") {
    include("../config/controller.php"); 
    include("../config/views.php");
  }
  else {
    require('../config/session-mhs.php');
    include("../config/controller.php"); 
    include("../config/views.php");  
  }
   
  //mysqli_close($conn);
?> 