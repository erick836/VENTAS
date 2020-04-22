<?php
  $usuario=array("Amilcar","Carlos","Erick","Jhon","Cesar");
  $pass=array(012,345,678,91011,121314);

  $nombre=$_POST['nombre'];
  $contraseña=$_POST['contraseña'];

  $pros=count($usuario);

  for($x=0;$x<$pros;$x++)
  {
    if($usuario[$x]==$nombre && $pass[$x]==$contraseña)
	{
	  $estado=true;
	} 
  }

  if($estado)
  {
    header("location:VENTAS.html");
  }
  else 
  {
	header("location:index.html");
  }

?>