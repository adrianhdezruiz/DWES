<?php
 require_once 'producto.php';
 $producto = new Producto(111, 'Pendrive 8', 'Pendrive marca Kingston de 8GB', 150);
 echo 'Id: '.$producto->get_id().'<br/>';
 echo 'Nombre: '.$producto->get_nombre() . '<br/>';
 echo 'Descripción: '.$producto->get_descripcion() . '<br/>';
 echo 'Precio: $'.$producto->get_precio() . '<br/>';
 $producto->set_nombre('Pendrive 16');
 $producto->set_descripcion('Pendrive marca Kingston de 16GB');
 $producto->set_precio(300);
 echo '<hr/>';
 echo 'Id: '.$producto->get_id() .'<br/>';
 echo 'Nombre: '.$producto->get_nombre() .'<br/>';
 echo 'Descripción: '.$producto->get_descripcion().'<br/>';
 echo 'Precio: $'. $producto->get_precio() .'<br/>';
?>
