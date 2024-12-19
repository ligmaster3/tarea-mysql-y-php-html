<!DOCTYPE html> 
<html> 
<head> 
 	<title>Registrar información / Pablo Cerrud</title> 
 	<meta charset="utf-8"> 
 	<link rel="stylesheet" type="text/css" href="estilo.css"> 
</head> 
<body> 
        
    <form method="post"> 
        <img src="imagenes/copu z0.png" width="50" height="45" alt="logo"  /> 
     	<h2>Registrar información del evento</h2> 
        <h2>Datos 2021</h2> 
        <h3>Favor escribir bien la información solicitada</h3> 
     	<input type="text" name="name" placeholder="Nombre completo"> 
     	<input type="email" name="email" placeholder="Email que utilizó en el congreso"> 
 	<input type="cedula" name="cedula" placeholder="Número de identidad personal o Cédula">        
    <input type="submit" name="register"> 
    </form>        
     <?php  
        include("registrar.php"); 
        ?> 
</body> 
</html> 
