<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>SuperCool</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="img/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <?php
    $products = simplexml_load_file('files/productos.xml');

    function existsRandom($number, $array)
    {
        $length = count($array);
        for ($i = 0; $i < $length; $i++) {
            if ($array[$i] == $number)
                return true;
        }
        return false;
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="modalDetails" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: white;"><span id="nameTxt"></span><small>#<span id="codeTxt"></span></small></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <p>
                                <strong style="font-weight: 600;">Descripción:</strong><br>
                                <span id="descTxt"></span><br>
                                <strong style="font-weight: 600;">Precio: </strong>$<span id="priceTxt"></span><br>
                                <strong style="font-weight: 600;">Existencias: </strong><span id="stockTxt"></span>
                            </p>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div>
                                <img id="img" style="size: 50%;">
                                <h3 style="text-align: center;"><label id="typeTxt" class="badge badge-secondary"></label></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="display: block !important;">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-light">Comprar</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="img/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header class="section">
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section>
        <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
                <li data-target="#main_slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption">
                                    <h1>Bienvenido a Super<strong class="color">Cool</strong></h1>
                                    <p>Acá encontraras todos los productos que necesitas</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="img/some.png" alt="img" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $length = count($products);
                $numbers = array();
                for ($i = 0; $i < 3; $i++) {
                    do {
                        $rand = rand(0, $length - 1);
                    } while (existsRandom($rand, $numbers));
                    $numbers[$i] = $rand;
                }
                foreach ($numbers as $key => $value) {
                ?>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="carousel-caption">
                                        <h1><?= $products->producto[$value]->nombre ?></h1>
                                        <p><?= $products->producto[$value]->descripcion ?></p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="img-box">
                                        <figure><img class="round-image-bg" src="img/<?= $products->producto[$value]->img ?>" alt="img" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <!-- plant -->
    <div id="plant" class="section  product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><strong class="black">Nuestros</strong> Productos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clothes_main section">
        <div class="container">
            <div class="row">
                <?php
                foreach ($products->producto as $product) {
                ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="sport_product product" style="border-radius: 3%;" data-id="<?= $product->codigo ?>">
                            <figure><img src="img/<?= $product->img ?>" alt="img" /></figure>
                            <h3>$<strong class="price_text"><?= number_format((float)$product->precio, $decimals = 2) ?></strong></h3>
                            <h4><?= $product->nombre ?></h4>
                            <?=(int)$product->existencias == 0 ? '<h5 class="text-danger">Producto no disponible</h5>' : '' ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- end plant -->
    <!--about -->
    <div class="section about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                        <h2><strong class="black">Los +</strong> Baratos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section>
        <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $filtered = array();
                foreach ($products->producto as $product) {
                    if ($product->existencias != 0)
                        $filtered[] = $product;
                }
                usort($filtered, function ($a, $b) {
                    return (float)$a->precio - (float)$b->precio;
                });
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="carousel-item <?= $i == 0 ? "active" : "" ?>">
                        <div class="container">
                            <div class="row marginii">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="carousel-sporrt_text">
                                        <h1 class="sporrt_text"><?= $filtered[$i]->nombre ?></h1>
                                        <p class="lorem_text"><?= $filtered[$i]->descripcion ?></p>
                                        <h3>$<strong><?= number_format((float)$filtered[$i]->precio, $decimals = 2) ?></strong></h3>
                                        <div class="btn_main">
                                            <span data-id="<?= $filtered[$i]->codigo ?>" class="btn btn-lg btn-primary productBtn" role="button">Detalles</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="img-box">
                                        <figure><img src="img/<?= $filtered[$i]->img ?>" style="max-width: 70%; border: 15px solid #fff;" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
    </section>
    </div>
    <!-- end about -->
    <!--Our  Clients -->
    <div id="plant" class="section_Clients layout_padding padding_bottom_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nosotros</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section Clients_2 layout_padding padding-top_0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div id="testimonial" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#testimonial" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial" data-slide-to="1"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="titlepage">
                                    <div class="john">
                                        <div class="john_image"><img class="round-image" src="img/nao.png"></div>
                                        <div class="john_text">Naomi Iglesias<span style="color: #fffcf4;">(Back-End Developer)</span></div>
                                        <p class="lorem_ipsum_text">Deja que tu sonrisa cambie el mundo, pero no dejes que el mundo cambie tu sonrisa</p>
                                        <div class="icon_image"><img src="img/icon-1.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="titlepage">
                                    <div class="john">
                                        <div class="john_image"><img class="round-image" src="img/artu.png"></div>
                                        <div class="john_text">Arturo Zamora<span style="color: #fffcf4;">(Front-End Developer)</span></div>
                                        <p class="lorem_ipsum_text">Si hicieramos todo lo que somos capaces de hacer, nos quedaríamos completamente sorprendidos de nostros mismos</p>
                                        <div class="icon_image"><img src="img/icon-1.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#testimonial" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#testimonial" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- end Our  Clients -->

    </div>

    <!-- end Contact Us-->
    <!-- footer start-->
    <div id="plant" class="footer layout_padding">
        <div class="container">
            <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/">Free Html Templates</a></p>
        </div>
    </div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        let products = [];
        $(document).ready(function() {
            $(" .fancybox").fancybox({
                openEffect: " none",
                closeEffect: " none"
            });

            $(" .zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
            $(".product, .productBtn").on('click', function() {
                let id = $(this).attr('data-id');
                product = products.find(p => p.codigo == id);
                if (product.existencias == 0)
                {
                    Swal.fire('Producto sin existencias', '', 'error');
                    return;
                }
                $('#codeTxt').text(product.codigo);
                $('#nameTxt').text(product.nombre);
                $('#descTxt').text(product.descripcion);
                $('#img').attr('src', 'img/' + product.img);
                $('#typeTxt').text(product.categoria);
                $('#priceTxt').text(product.precio.toFixed(2));
                $('#stockTxt').text(product.existencias.toString());
                $('#modalDetails').modal('show')
            });
        });

        function product(codigo, nombre, descripcion, img, categoria, precio, existencias) {
            return {
                codigo: codigo,
                nombre: nombre,
                descripcion: descripcion,
                img: img,
                categoria: categoria,
                precio: precio,
                existencias: existencias
            };
        }
    </script>
    <?php
    foreach ($products->producto as $product) {
    ?>
        <script>
            products.push(new product(
                "<?= $product->codigo ?>",
                "<?= $product->nombre ?>",
                "<?= $product->descripcion ?>",
                "<?= $product->img ?>",
                "<?= $product->categoria ?>",
                <?= number_format((float)$product->precio, $decimals = 2) ?>,
                <?= $product->existencias ?>
            ));
        </script>
    <?php
    }
    ?>
</body>

</html>