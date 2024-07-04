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
        <div class="row col-md-12 text-center titupizza">
            <h1 class="titulo1">Pizzas Salgadas</h1>
        </div>

        <div class="  table-responsive text-center" style="display: flex;">

        <div class="col-md-2">
            <table class=" table align-top">

            <tbody >
                <img src="img/atum.jpg" style="height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/BAURU.jpg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/BROCOLIS.jpg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/CALABRESA.jpg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/FRANGO.jpeg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                </tbody>
            </table>
        </div>

        <div class="col-md-4">
            <table class=" table align-top ">
                <tbody>
                    <tr>
                        <td>
                            <h4>ATUM..........R$ 38,00</h4>
                            <strong>Atum e cebola. </strong>
                            <br><br>
                            <h4>BAURU..........R$ 40,00</h4>
                            <strong>Presunto, tomate e mussarela.</strong>
                            <br><br>
                            <h4>BROCÓLIS..........R$ 42,00</h4>
                            <strong>Brócolis, cebola, mussarela e bacon.</strong>
                            <br><br>
                            <h4>CALABRESA..........R$ 40,00</h4>
                            <strong>Calabresa fatiada.</strong>
                            <br><br>
                            <h4>FRANGO..........R$ 41,00</h4>
                            <strong>Frango desfiado e catupiry.</strong>
                            <br><br>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col-md-2">
            <table class=" table align-top">

                <tbody >
                <img src="img/MARGHERITA.jpg" style="height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/MILHO.jpeg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/MUSSARELA.jpg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img//NAPOLITANA.jpeg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                <br>
                <img src="img/PORTUGUESA.jpg" style="margin-top:5px; height: 80px; width: 120px; border-radius: 5px;" alt="...">
                </tbody>
            </table>
            </div>

            <div class="col-md-3">
                <table class=" table align-top ">            
                <tbody>
                    <tr>
                       
                        <td>
                            
                           
                            <h4>MARGHERITA..........R$ 40,00</h4>
                            <strong>Mussarela, manjericão e tomate.</strong>
                            <br><br>
                            <h4>MILHO..........R$ 40,00</h4>
                            <strong>Milho com mussarela.</strong>
                            <br><br>
                            <h4>MUSSARELA..........R$ 40,00</h4>
                            <strong>Mussarela com rodelas de tomate.</strong>
                            <br><br>
                            <h4>NAPOLITANA..........R$ 40,00</h4>
                            <strong>Mussarela, tomate, parmesão e molho gratinado.</strong>
                            <br><br>
                            <h4>PORTUGUESA..........R$ 40,00</h4>
                            <strong>Mussarela, presunto, ovos e calabresa.</strong>
                        </td>
                    </tr>
                </tbody>



            </table>
            </div>
        </div>  
        <div class="patrocinios">
            <img src="img/border.png" class="img-fluid mt-4" alt="borda">
            <?php
            include_once('inc/rodape.php'); ?>
        </div>
    </div>

  
</body>

</html>