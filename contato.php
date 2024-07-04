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
    <link href="http://localhost/tudoacabaempizza/css/estilo_pizzaria.css" rel="stylesheet">

    <!-- / JS / CSS -->

    <title>Home - Tudo Acaba Em Pizza</title>
</head>

<body>
    <!-- Container- -->
    <div class="container">
        <div>
            <?php include_once('inc/menu.php'); ?>
        </div>

        <div class="row text-center">
            <h1 class="text-white py-4 titulo1">ENTRE EM CONTATO CONOSCO</h1>
        </div>

        <div class="row text-center mt-4">
            <h2 class="titulo2">ENVIE SUA MENSAGEM</h2>
        </div>

        <div>
            <form action="?" method="post" enctype="multipart/form-data" class="mt-3 text-center">

                <div class="col-6">
                    <label for="nome" class="form-label">NOME:</label> <input placeholder="Ex.: Ana Laura Clementino" name="nome" id="nome" type="text" class="form-control "></input>
                </div>
                <div class="col-6">
                    <label for="email" class="form-label">E-MAIL:</label><input placeholder="alessandra_silva@gmail.com" name="email" id="email" type="email" class="form-control"></input>
                </div>
                <div class="col-6">
                    <label for="mensagem" class="form-label">MENSAGEM:</label><textarea placeholder="Adorei o Atendimento da Luiza!" name="mensagem" id="mensagem" type="text" class="form-control"></textarea>
                </div>

                <div class="col-6 mb-5">
                    <br>
                    <input type="submit" class="btn btn-outline-success" name="btnEnviar" id="ntmEnviar" value="Enviar">
                </div>
            </form>


        </div>

        <div class="patrocinios">
            <img src="img/border.png" class="img-fluid mt-4" alt="borda">
            <?php
            include_once('inc/rodape.php'); ?>
        </div>
    </div>
    <!-- /Container -->
</body>

</html>