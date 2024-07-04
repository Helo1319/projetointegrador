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

        <div class="row col-md-12 text-center"><h1 class="titulo1">BEBIDAS</h1>

        <div class="table-responsive">
            <table class="table align-top table-borderless">
                <thead>
                    <tr>
                        <th>
                       <h2 class="text-center">SUCOS</h2>            
                       </th>
                       <th>
                       <h2 class="text-center">REFRIGERANTES</h2>            
                       </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <td class = "text-center">
                            <h4>ABACAXI..........R$ 9,90</h4>                            
                            <br>
                            <h4>ACEROLA..........R$ 9,90</h4>                            
                            <br>
                            <h4>MORANGO..........R$ 9,90</h4>                            
                            <br>
                            <h4>LARANJA..........R$ 9,90</h4>                            
                            <br>
                            <h4>UVA..........R$ 9,90</h4>
                            <br>
                            <h4>GOIABA..........R$ 9,90</h4>
                            <br>
                            <h4>MARACUJÁ..........R$ 9,90</h4>
                            <br><br>               
                            <img src="img/sucos.png" style="height: 220px; width: 300px; border-radius: 5px;" alt="">             
                        </td>
                        <td class = "text-center">
                            <h4>COCA-COLA 1L..........R$ 12,50</h4>
                            <br>
                            <h4>COCA-COLA 600ML..........R$ 8,50</h4>                            
                            <br>
                            <h4>FANTA LARANJA 1L.......R$ 10,50</h4>                            
                            <br>
                            <h4>GUARANÁ 1L..........R$ 11,50</h4>
                            <br>
                            <h4>GUARANÁ 600ML..........R$ 7,50</h4>
                            <br>
                            <h4>SPRITE 1L..........7,00</h4>
                            <br>
                            <h4>SPRITE 600ML..........10,50</h4>                        
                            <br><br>
                            <img src="img/refri.png" style="height: 220px; width: 300px; border-radius: 5px;" alt="">
                        </td>
                       
                    </tr class="">
                </tbody>
            </table>
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