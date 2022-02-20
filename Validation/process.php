<?php
require_once '../Validation/validate.php';
if (isset($_POST)) {

    extract($_POST);

    $error_log = array();

    if (!isset($codigo) || isEmpty($codigo))
        $error_log["codigo_error"] = "Debes ingresar el codigo del producto";
    else if (!isLicense($codigo))
        $error_log["codigo_error"] = "Debe tener un formato PROD#####";

    if (!isset($nombre) || isEmpty($nombre))
        $error_log["nombre_error"] = "Debes ingresar el nombre";
    else if (!isText($nombre))
        $error_log["nombre_error"] = "Debes ingresar solamente letras";

    if (!isset($descripcion) || isEmpty($descripcion))
        $error_log["descripcion_error"] = "Debes ingresar una descripcion";

    if (!isset($precio) || isEmpty($precio))
        $error_log["precio_error"] = "Debes ingresar el precio";
    else if (!isMoney($precio))
        $error_log["precio_error"] = "Debes ingresar un precio válido";

    if (!isset($existencias) || isEmpty($existencias))
        $error_log["existencias_error"] = "Debes ingresar la cantidad de existencias";
    else if (!isEntero($existencias))
        $error_log["existencias_error"] = "Debes ingresar una cantidad valida";

    if (!isset($_FILES['img']['name']) || isEmpty($_FILES['img']['name']))
        $error_log["img_error"] = "Debes  escoger una imagen";
    else if (!isImage($_FILES['img']['name']))
        $error_log["img_error"] = "Debes ingresar una imagen valida";
}
