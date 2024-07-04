<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- / Fontes -->

    <!-- JS / CSS -->
    <?php include_once('inc/css.php'); ?>
    <?php include_once('inc/js.php'); ?>
    <!-- / JS / CSS -->

    <title>Home - Tudo Acaba Em Pizza</title>
</head>

<body>

    <!-- CONTAINER -->

    <div class="container">

        <?php include_once('inc/menu.php'); ?>

        <div class="banners">
            <div class="col-md-12">
                <!-- BANNERS -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div id="fixa">
                            <div class="ms-5 texto1">
                                <h1>BEM-VINDO À PIZZARIA TUDO ACABA EM PIZZA!</h1>
                                <p>Somos uma Pizzaria artesanal localizada no coração da cidade,
                                <br>e estamos comprometidos todos em oferecer aos nossos clientes
                                <br>a melhor experiencia em pizza possível.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img src="img/pizza1.png" class="d-block w-100" alt="Tudo Acaba em Pizza">
                        </div>
                        <div class="carousel-item">
                            <img src="img/pizza2.png" class="d-block w-100" alt="Tudo Acaba em Pizza">
                        </div>
                        <div class="carousel-item">
                            <img src="img/pizza3.png" class="d-block w-100" alt="Tudo Acaba em Pizza">
                        </div>
                </div>                    
                </div>
                <img src="img/border.png" class="img-fluid borda mb-5" alt="borda">
                <!-- /BANNERS -->
                
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8 texto2">
                        <p>
                            Além disso, também oferecemos opções de <strong>entrega e retirada</strong>, para que você possa desfrutar de nossas pizzas no conforto da sua casa. Não importa a ocasião, na pizzaria Tudo Acaba em Pizza, você sempre terá uma experiência deliciosa e satisfatória, venha nos visitar hoje mesmo e experimente nossas <strong>pizzas saborosas!</strong>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /CONTAINER -->
        <div class="patrocinios">
            <img src="img/border.png" class="img-fluid mt-3" alt="borda">
            <?php
            include_once('inc/rodape.php'); ?>
        </div>
</body>

</html>