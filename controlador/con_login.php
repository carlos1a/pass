<?php
	require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$pgconn= $conexion->conectar();

	$usu_login 		= $_POST['login'];
	$usu_clave 		= $_POST['clave'];



		require('../modelo/mod_usuario.php');
		$usuario = new usuario();
		$consulta = $usuario->autenticar($usu_login,$pgconn);

if(pg_num_rows($consulta)>0){
		$row = pg_fetch_array($consulta,0,PGSQL_ASSOC);
		$x=$row['usu_clave'];
}
  if (password_verify($usu_clave, $x)){

    echo 'La contrasena es valida!';
} else {
    echo 'La contrasena no es valida';

}
?>