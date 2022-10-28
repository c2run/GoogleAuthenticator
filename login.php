<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
		<nav class="navtop">
		<div class="form-floating mb-3">
			<h2 class="fs-1" align="center">Hola tío Marcos</h2>
			<form method="post" action="verificar.php" align="center" >
			<label>Login con autenticador de google</label><br />
			<div class="form-control" align="center">
			<p class="fw-bolder">Usuario</p><input type="text"  class="input-group-text" name="username" id="username"/></div>
			<div class="form-control" align="center">
      <p class="fw-bolder">Contraseña</p><input type="password"  class="input-group-text" name="password" id="username"/></div>
			<div class="form-control" align="center">
			<input type="submit" class="btn btn-outline-primary btn-lg" name="code" id="BOTON"/></div>
			</div>
			</form>
		</div>
		</div>
	</body>
</html>
