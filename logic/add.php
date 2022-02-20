<?php
    	session_start();
    	if(isset($_POST['add'])){

			require_once '../Validation/process.php';
			$_SESSION['error_log']=$error_log;
		if(count($error_log)==0){
    		//open xml file
    		$productos = simplexml_load_file('../files/productos.xml');
    		$producto = $productos->addChild('producto');
    		$producto->addChild('codigo', $_POST['codigo']);
    		$producto->addChild('nombre', $_POST['nombre']);
    		$producto->addChild('descripcion', $_POST['descripcion']);

			//Recogemos el archivo enviado por el formulario
			
			

    		$producto->addChild('img',$_POST['img']);
            $producto->addChild('categoria', $_POST['categoria']);
            $producto->addChild('precio', $_POST['precio']);
            $producto->addChild('existencias', $_POST['existencias']);
    		// Save to file
    		// file_put_contents('files/productos.xml', $productos->asXML());
    		// Prettify / Format XML and save
    		$dom = new DomDocument();
    		$dom->preserveWhiteSpace = false;
    		$dom->formatOutput = true;
    		$dom->loadXML($productos->asXML());
    		$dom->save('files/productos.xml');
    		// Prettify / Format XML and save
			
    		$_SESSION['message'] = 'Producto añadido satisfactoriamente';
    		header('location: ../index.php');
			
		}
		else{
			$_SESSION['codigo'] = $_POST['codigo'];
			$_SESSION['nombre'] = $_POST['nombre'];
			$_SESSION['descripcion'] = $_POST['descripcion'];
			$_SESSION['categoria'] = $_POST['categoria'];
			$_SESSION['precio'] = $_POST['precio'];
			$_SESSION['existencias'] = $_POST['existencias'];
    		header('location: ../index.php');
		}
		
    	}
    	else{
    		$_SESSION['message'] = 'Fill up add form first';
			

    		header('location: ../index.php');
    	}
    