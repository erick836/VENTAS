<?php
  $usuario=array("Amilcar","Carlos","Erick","Jhon","Cesar");
  $pass=array(112,345,678,91011,121314);

  $estado=false;

  $NOMBRE=$_POST['NOMBRE'];
  $CONTRASEŅA=$_POST['CONTRASEŅA'];

  $tam=count($usuario);

  for($x=0; $x<$tam; $x++)
  {
    if($usuario[$x]==$NOMBRE && $pass[$x]==$CONTRASEŅA)
	{
	  $estado=true;
	} 
  }

  if($estado)
  {
    header("location:ventas.html");
  }
  else 
  {
	header("location:index.html");
  }

?>