<?php  
  session_start(); 
  require('../config/database.php'); 
  date_default_timezone_set("Asia/Jakarta"); 
  
  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
    if  ($page=="logout") {header("Location:logout");}
    $admin_page = array(
      "home","kegiatan","login","probinmaba","user"
    );
    if  (in_array($page, $admin_page)) { $page=$page; }
    else { $page="404"; }
  }
  else{ $page="home"; } 
  
  if ($page=="login") {
    include("../config/admin/controller.php"); 
    include("../config/admin/views.php");
  }
  else {
    require('../config/admin/session.php');
    include("../config/admin/controller.php"); 
    include("../config/admin/views.php");  
  }
   
  //mysqli_close($conn);
?> 