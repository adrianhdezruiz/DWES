<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
echo "Usuario no reconocido!";
exit;
}
else {
  //Conectamos con la base de datos
  include 'dbconnection.php';
  echo "Probando conexion a base datos <br>";

  $sql="SELECT password FROM agenda WHERE username = :user";
  $stmt=$conn->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
  $stmt->execute(array(':user' => $_SERVER['PHP_AUTH_USER']));
  $usuario= $stmt-> fetchAll(PDO::FETCH_ASSOC);

  if (password_verify($_SERVER['PHP_AUTH_PW'], $usuario[0]["password"])) {
      print "Acceso autorizado <br>";

    if (isset($_COOKIE['ultimo_login'])) {
      $ultimo_login = $_COOKIE['ultimo_login'];

    }
      setcookie("ultimo_login", time(), time()+3600);
  } else {
      print "Acceso denegado <br>";
  }
  //$ncount = $stmt=>rowCount();


}

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ejercicio: Función header para autentificación HTTP</title>
<link href="dwes.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
echo "Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br />";
/*echo "Contraseña: ".$_SERVER['PHP_AUTH_PW']."<br />";*/

if (isset($ultimo_login)) {
  echo "Último login: " . date("d/m/y \a \l\a\s H:i", $ultimo_login);
} else {
  echo "Bienvenido. Esta es su primera visita.";
}
?>

</body>
</html>
