<?php
class usuario
{
	private 	$usu_cedula;
	private 	$usu_nombre;
   	private 	$usu_apellido;
   	private 	$usu_login;
    private 	$usu_clave;
    private 	$usu_telefono;
    private 	$usu_correo;
    private 	$dep_cod;
    private 	$dep_nombre;
    private 	$per_cod;
    private 	$per_nombre;
    private 	$estu_cod;
    private 	$pgconn;

public function agregar($usu_login, $usu_clave,$pgconn)
	{
		$query = "INSERT INTO usuario (usu_login, usu_clave)
				VALUES('$usu_login','$usu_clave')";
		$consulta = pg_query($pgconn,$query) or die("Consulta errónea: ".pg_last_error());
		return $consulta;
    }


    public function autenticar($usu_login,$pgconn){
        $query = "SELECT usu_clave from usuario WHERE usu_login='$usu_login'";
        $consulta = pg_query($query) or die("Consulta errónea: ".pg_last_error());
        if ($consulta)
        {
            return $consulta;
        }
    }
}
?>