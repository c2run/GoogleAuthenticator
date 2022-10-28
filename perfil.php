<?php
session_start();
if (!isset($_SESSION['id']))
{
    header("Location: login.php");
    die();
}else{
?>

<!DOCTYPE html>
<html lang=es>
<head>
  <meta charset="utf-8">
  <title>Perfil de usuario</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body.html {
    height: 100%;
          }
          .bg{
            background-image: url("21.jpg");
            height: 100%;
            background-position: center;
            background-repeat: repeat;
            background-size: auto;
          }
</style>
  </head>
  <body class="bg">
    <div class="container" >
      <div class="row">
        <div class="container" align="center" style="background: white; padding 20px; box-shadow; 10px 10px 5px #888888; margin-top 100 px;">
        <h1 align="center">Perfil de usuario</h1>
        <hr >
        Bienvenido usuario
          <?php echo $_SESSION['id'];?>
        
          <hr />
          <a link href="logout.php">Cerrar sesión</a>
          <hr />
    </div>
  </body>
  </html>
<?php
}
 ?>
