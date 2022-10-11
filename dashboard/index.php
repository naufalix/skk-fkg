<?php  
  session_start(); 
  require('../config/database.php'); 
  date_default_timezone_set("Asia/Jakarta"); 
  
  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    if  ($page=="logout") {header("Location:logout");}
    $user_page = array(
      "home","kegiatan","kelulusan","lain-lain","login","probinmaba"
    );
    if  (in_array($page, $user_page)) { $page=$page; }
    else { $page="404"; }
  }
  else{ $page="home"; } 
  
  if ($page=="login") {
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