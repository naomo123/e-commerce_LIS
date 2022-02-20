<?php
    	session_start();
    	$codigo = $_GET['codigo'];
     
    	$productos = simplexml_load_file('files/productos.xml');
     
    	//we're are going to create iterator to assign to each user
    	$index = 0;
    	$i = 0;
     
    	foreach($productos->producto as $producto){
    		if($producto->codigo== $codigo){
    			$index = $i;
    			break;
    		}
    		$i++;
    	}
     
    	unset($productos->producto[$index]);
    	file_put_contents('files/productos.xml', $productos->asXML());
     
    	$_SESSION['message'] = 'Member deleted successfully';
    	header('location: index.php');
     
    ?>