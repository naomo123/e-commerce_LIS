<?php
    	session_start();
		include_once '../Validation/validate.php';
    	if(isset($_POST['edit'])){
    		$productos = simplexml_load_file('../files/productos.xml');
    		foreach($productos->producto as $producto){
    			if($producto->codigo == $_POST['codigo']){
    				$producto->nombre = $_POST['nombre'];
    				$producto->descripcion = $_POST['descripcion'];
					if(!isEmpty($_POST['img']))
                    	$producto->img = $_POST['img'];
    				$producto->categoria = $_POST['categoria'];
                    $producto->precio = $_POST['precio'];
                    $producto->existencias = $_POST['existencias'];
    				break;
    			}
    		}
     
    		file_put_contents('../files/productos.xml', $productos->asXML());
    		$_SESSION['message'] = 'Producto actualizado satisfactoriamente';
    		header('location: ../index.php');
    	}
    	else{
    		$_SESSION['message'] = 'Selecciona un producto para editar';
    		header('location: ../index.php');
    	}
     
    ?>