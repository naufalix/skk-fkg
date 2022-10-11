<!DOCTYPE html>
<html>

<head>
    <?php include("views/partials/head.php")?>
</head>

<body <?php if ($page=="login"||$page=="unsub"){ echo 'class="bg-default"'; } ?>>
  <script>
    <?php 
      if (isset($success)){ echo "swal('Berhasil', '$success', 'success');"; } 
      if (isset($error))  { echo "swal('Error!', '$error', 'error');"; } 
    ?>
  </script>

  <?php 
    if ($page=="login"||$page=="unsub"){ include("views/$page.php"); }
    else { 
  ?>

  <!-- Sidenav -->
  <?php include("views/partials/sidebar.php")?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php include("views/partials/navbar.php")?>
    <!-- Content -->
    <?php include("views/$page.php"); ?>
    <!-- Footer -->
    <?php include("views/partials/footer.php")?>
  </div>

  <?php } ?>

  <!-- Argon Scripts -->
  <?php include("views/partials/script.php")?>
</body>

</html>