<?php
  $usuario=array("Amilcar","Carlos","Erick","Jhon","Cesar");
  $pass=array(012,345,678,91011,121314);

  $nombre=$_POST['nombre'];
  $contrase�a=$_POST['contrase�a'];

  $pros=count($usuario);

  for($x=0;$x<$pros;$x++)
  {
    if($usuario[$x]==$nombre && $pass[$x]==$contrase�a)
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