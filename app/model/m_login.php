<?php

if(isset($_POST['email']) && isset($_POST['password']))
{ 
	$consulta="SELECT * FROM usuarios WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
	$arr_from_query_id= Accountconnect::variable_login_query($consulta);

	if( $arr_from_query_id == 0 ){
		$control ="El acceso no ha sido correcto. Email y/o contraseña incorrectos.";
		}
}

