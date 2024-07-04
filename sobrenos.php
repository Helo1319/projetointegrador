<?php
include_once('inc/classes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    
    <!-- JS / CSS -->
    <?php include_once('inc/css.php'); ?> 
    <?php include_once('inc/js.php'); ?>
    <!-- / JS / CSS -->

    <title>Sobre Nós - Tudo Acaba em pizza</title>
</head>

<body>

    <div class="container">
        <!-- MENU -->
        <div>
        <?php include_once('inc/menu.php'); ?>
        </div>
        <!--/ MENU -->
        <!-- CONTEUDO -->
               
        <div class="row">
            <div class="col-md-7 mt-6 p-2 ">
                <div class="texto"><h1 style="color: #004733;"> SOBRE NÓS </h1></div>
                <p class="p1"> 
                Desde fevereiro de 2023 no mercado de delivery, nós da Canes Pizza buscamos atender com qualidade e excelência!
                Desde a nossa criação, realizamos mais de 3500 pedidos. Durante o período da pandemia, passamos 
                a oferecer aos nossos clientes um cardápio diversificados com ingredientes selecionados, sob encomenda. 
                Os nossos clientes tem sonhos, e o nosso trabalho é realizá-los!!!!
                </p>
            
            
                <div class="texto"><h1 style="color: #004733;"> HISTÓRIA</h1></div>
                <p class="p1">
                Em 2023, THOMAS CARVALHO DE MELO idealizou uma pizzaria em que o ambiente fosse acolhedor e que unisse simplicidade 
                e descontração. Um lugar em que as pessoas pudessem saborear confortavelmente as melhores pizzas da região com 
                suas famílias e amigos. Para concretizar essa ideia, juntou-se a ele seu irmão MARCO ANTONIO ALVES DE ALVARENGA, e então, eles 
                voltaram sua atenção à qualidade das pizzas, o que se tornou, indiscutivelmente, a marca registrada da casa. 
                Elaboradas com todo o cuidado, da massa crocante ao farto recheio e, assadas em fornos à lenha, suas pizzas 
                marcaram época pelo sabor e também pela inovação.
                </p> 
            </div>        
            <div id="pizzal" class="col-md-5">
                <img src="img/pizzatabua.png" alt="pizza" width="100%">
            </div>
        </div>    
         <!-- /CONTEUDO -->
         <!-- RODAPE -->
         <div class="patrocinios">
            <img src="img/border.png" class="img-fluid mt-4" alt="borda">
            <?php
            include_once('inc/rodape.php'); ?>
        </div>
          <!-- /RODAPE -->
     </div>
</body>

</html>