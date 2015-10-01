<?php
	require ('../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn=$conexion->conectar();


	$usu_login=		ltrim(rtrim($_POST['login']));
	$usu_clave=		ltrim(rtrim($_POST['clave']));
	$usu_clave_confi=ltrim(rtrim($_POST['clave_confi']));

	require ('../modelo/mod_usuario.php');

	$usuario = new usuario();
	if($usu_clave!=$usu_clave_confi){
		echo "Clave invalida";

	}
	else{
			$usu_clave= password_hash($usu_clave, PASSWORD_BCRYPT);
			$inserto=$usuario->agregar($usu_login,$usu_clave,$pgconn);

			echo "Registro exitoso";


		}
?>