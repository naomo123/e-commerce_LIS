<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>admin</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 class="page-header text-center">Tienda</h1>
        <div class="row">
            <div class="col-xl-10 col-xl-offset-2">
                <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Nuevo producto</a>
                <?php
                session_start();
                extract($_SESSION);
                include('modal/add_modal.php');
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                <?php
                }
                if (isset($error_log) && count($error_log) != 0) {
                ?>
                    <script>
                        $('#addnew').modal('show');
                    </script>
                <?php
                }
                session_unset();
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" style="margin-top:20px;">
                        <thead>
                            <th>Codigo del producto</th>
                            <th>Nombre del producto</th>
                            <th>Descripción</th>
                            <th>Imagen del producto</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Existencias</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php
                            //load xml file
                            $productos = simplexml_load_file('files/productos.xml');

                            foreach ($productos->producto as $producto) {
                            ?>
                                <tr>
                                    <td><?php echo $producto->codigo; ?></td>
                                    <td><?php echo $producto->nombre; ?></td>
                                    <td><?php echo $producto->descripcion; ?></td>
                                    <td><img style="width:200px; height:200px; " src="img/<?= $producto->img ?>" /></td>
                                    <td><?php echo $producto->categoria; ?></td>
                                    <td>$<?php echo number_format((float)$producto->precio, $decimals = 2) ?></td>
                                    <td><?php echo $producto->existencias; ?></td>
                                    <td>
                                        <a href="#edit_<?php echo $producto->codigo; ?>" data-toggle="modal" class="btn btn-success btn-sm" style="margin-bottom:10px; width:80px;"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                                        <a href="#delete_<?php echo $producto->codigo; ?>" data-toggle="modal" class="btn btn-danger btn-sm" style=" width:80px;"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
                                    </td>
                                    <?php include('modal/edit_delete_modal.php'); ?>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.table').DataTable({
        "language": { "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json" },
        "responsive": true,
        "pageLength" : 5,
        "lengthChange": true,
        "autoWidth": false,
        "dom": 'Bfrtip',
        "buttons": [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
    </script>
</body>
</html>