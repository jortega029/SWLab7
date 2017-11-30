<?php
ob_start();
session_start();
if (isset($_SESSION['rol'])){
    if ($_SESSION['rol'] == 'alumno'){
        header("Location: gestionPreguntas.php");
    }
    else if ($_SESSION['rol'] == 'profesor'){
        header("Location: revisarPreguntas.php");
    }
}
?>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Registrarse</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="registrar.php" >Registrarse</a></span>
      		<span class="right"><a href="login.php" >Login</a></span>
          <span class="logueadoDatos" id="logueadoImagen"></span></br></br>
          <span class="logueadoDatos"><label id = "usuarioMostrar"/></span>
      		<span class="right" style="display:none;" id ="logout" ><a href="logout.php">Logout</a></span>
          
          
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.html' id="layout">Inicio</a></span>
		<span><a href='quiz.php' id="quiz">Juega</a></span>
		<span><a href='creditos.php' id="creditos">Creditos</a></span>
		
	</nav>
    <section class="main" id="s1">
    
	<div>
		<form enctype="multipart/form-data" id='fregistrar' name='fregistrar' action="registrar.php" method='POST'>
			<p>Introduce tu correo electr&oacute;nico*:   
			<input type='text' id = 'textoEmail' name = 'textoEmail'> </br>
			Nombre y Apellidos*:   
			<input type='text' id = 'textoNombre' name = 'textoNombre'> </br>
			Nick*:
			<input type='text' id = 'textoNick' name = 'textoNick'> </br>
			Password*:
			<input type='password' id = 'textoContrasena' name = 'textoContrasena'> </br>
			Repetir password*:
			<input type='password' id = 'textoRepContrasena' name = 'textoRepContrasena'> </br>
      </p>
			<input name="archivos" id="archivos" type="file" size="20" accept="image/*">
      <div id="vista_previa"><!-- miniatura -->Vista previa</div>
      </br> </br>
			<input type ='submit' id="botonenviar" value='Enviar' class = "boton" disabled="true"> <input type='reset' id="botonreset" class = "boton"/>
      </br></br>
      <div class="error">
        <label id="error" style="color:black;font-size: 50px;"></label>
        <label id="emailVIP"></label>
        <label id="contrasenaValida"></label>
      </div>
		</form>

</body>

	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com'>Link GITHUB</a>
	</footer>
  </div>
  </html>