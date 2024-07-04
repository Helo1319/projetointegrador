<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="./css/estilo_pizzaria.css" rel="styleheet">


    <!-- JS / CSS -->
    <?php include_once('inc/css.php'); ?>
    <?php include_once('inc/js.php'); ?>
    <!-- / JS / CSS -->


    <title>Tudo Acaba em Pizza</title>
</head>

<body>

    <div class="container">
        <?php include_once('inc/menu.php'); ?>

            <div class="row col-md-12 text-center"><h1 class="titulo1">PEDIDO FEITO!</h1>

            <div class="alert alert-success" role="alert">
               <h3> Pedido Realizado com Sucesso! :)
                <br>
                Em 40 minutos você poderá saborear sua pizza ;)
                </h3>
            </div>


            <div class="patrocinios">
                <img src="img/border.png" class="img-fluid mt-4" alt="borda">
                <?php
                include_once('inc/rodape.php'); ?>
            </div>
        </div>

   
    </div>

</body>

</html>