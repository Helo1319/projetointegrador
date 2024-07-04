<!DOCTYPE html>
<html lang="pt-br">

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

    <style>
        button {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: 0.15 ease-in-out;
            background: none;
        }

        button:hover {
            transform: scale(1.05);
        }
    </style>


    <title>Tudo Acaba em Pizza</title>
</head>

<body>
    <div class="container">
        <?php include_once('inc/menu.php'); ?>
        <div class="row col-md-12 text-center titupizza">
            <h1 class="titulo1">Monte sua Pizza!</h1>
        </div>
        <!-- FORMATOS -->
        <div class=" col-12 formato mt-2 " >
            <h4 class="test-bold">Escolha o formato da sua Pizza:</h4>
            <br>
            <!-- FORMATOS -->
            <label id="lblFormatoRedondo" for="btnFormatoRedondo" class="col-md-4 btn btn-outline-danger Formatos">
                <input type="radio" name="btnMostrarFormatos" id="btnFormatoRedondo" value="r" class="d-none" required>
                <img src="img/circleform.png" alt="">Redonda
            </label>

            <label id="lblFormatoCoracao" for="btnFormatoCoracao" class="col-md-4 btn btn-outline-danger Formatos">
                <input type="radio" name="btnMostrarFormatos" id="btnFormatoCoracao" value="c" class="d-none ">
                <img src="img/heartform.png" alt="">Coração
            </label>

        </div>
        <!-- /FORMATOS -->
        <!-- TAMaNHOS -->
        <div id="tamanhos" class="mt-3 col-md-12" style="display: none;">
            <h4 class="text-bold">Tamanho:</h4>

            <input type="radio" name="tamanho" id="tmG" value="G" class="d-none" required>
            <label for="tmG" id="lbltmG" class="col-md-3 btn btn-outline-danger">
                <img src="img/pizza-tam-128.png" alt="">
                <br>
                Grande
            </label>

            <input type="radio" name="tamanho" id="tmM" value="M" class="d-none">
            <label for="tmM" id="lbltmM" class="col-md-3 btn btn-outline-danger">
                <img src="img/pizza-tam-64.png" alt="">
                <br>
                Média (tradicional)
            </label>

            <input type="radio" name="tamanho" id="tmP" value="P" class="d-none">
            <label for="tmP" id="lbltmP" class="col-md-3 btn btn-outline-danger">
                <img src="img/pizza-tam-48.png" alt="">
                <br>
                Pequeno
            </label>
        </div>
        <!-- /TAMaNHOS -->

        <div id="intmetades" class="mt-3 col-md-12" style="display: none;">
            <h4>Pizza de só um sabor ou metade:</h4>
            <input type="radio" name="intmetade" id="lblinteira" value="I" class="d-none" required>
            <label for="lblinteira" class="col-md-3 btn btn-outline-danger"><img src="img/pizzainteira.png" alt=""> <br>Inteira</label>

            <input type="radio" name="intmetade" id="lblmetade" value="Me" class="d-none">
            <label for="lblmetade" class="col-md-3 btn btn-outline-danger"><img src="img/pizzametade.png" alt=""><br>Metade</label>

        </div>

        <div id="sabor" class="mt-3 col-md-12" style="display: none;">
            <h4>Escolha o sabor da sua pizza:</h4>
            <br>
            <h5>Salgadas:</h5>
            <div class="juntar col-md-12 " style="display: flex;">
                <div class="col-md-6">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="sabores" id="exampleRadios1" value="option1">
                        <label class="form-check-label S" for="exampleRadios1">
                            Atum
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios2" value="option2">
                        <label class="form-check-label S" for="exampleRadios2">
                            Bauru
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option3">
                        <label class="form-check-label S" for="exampleRadios3">
                            Brócolis
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option4">
                        <label class="form-check-label S" for="exampleRadios4">
                            Calabresa
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option5">
                        <label class="form-check-label S" for="exampleRadios5">
                            Frango
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="sabores" id="exampleRadios1" value="option6">
                        <label class="form-check-label S" for="exampleRadios6">
                            Marguerita
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios2" value="option7">
                        <label class="form-check-label S" for="exampleRadios7">
                            Milho
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option8">
                        <label class="form-check-label S" for="exampleRadios8">
                            Mussarela
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option9">
                        <label class="form-check-label S" for="exampleRadios9">
                            Napolitana
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option10">
                        <label class="form-check-label S" for="exampleRadios10">
                            Portuguesa
                        </label>
                    </div>
                </div>

            </div>
            <br>
            <h5>Doces:</h5>
            <div class="juntar col-md-12 " style="display: flex;">
                <div class="col-md-6">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="sabores" id="exampleRadios11" value="option11">
                        <label class="form-check-label S" for="exampleRadios11">
                            Abacaxi
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios12" value="option12">
                        <label class="form-check-label S" for="exampleRadios12">
                            Banana
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios13" value="option13">
                        <label class="form-check-label S" for="exampleRadios13">
                            Brigadeiro
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios14" value="option14">
                        <label class="form-check-label S" for="exampleRadios14">
                            M&M's
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option15">
                        <label class="form-check-label S" for="exampleRadios15">
                            Mallow
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="sabores" id="exampleRadios1" value="option16">
                        <label class="form-check-label S" for="exampleRadios16">
                            Ouro Branco
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios2" value="option17">
                        <label class="form-check-label S" for="exampleRadios17">
                            Prestígio
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option18">
                        <label class="form-check-label S" for="exampleRadios18">
                            R&J
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"" name="sabores" id="exampleRadios3" value="option19">
                        <label class="form-check-label S" for="exampleRadios19">
                            Sedução
                        </label>
                    </div>
                    
                </div>
            </div>

        </div>

        <div class="juntar col-md-12 " style="display: flex;">
        <div id="sabor2" class="mt-3 col-md-5" style="display: none;">
            <h4>Escolha o sabor da 1º metade:</h4>
            <h5>Salgadas:</h5>
            <div class="form-check ">
                        <input class="form-check-input2" type="checkbox" name="sabores" id="exampleRadios1" value="option1">
                        <label class="form-check-label S" for="exampleRadios1">
                            Atum
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios2" value="option2">
                        <label class="form-check-label S" for="exampleRadios2">
                            Bauru
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option3">
                        <label class="form-check-label S" for="exampleRadios3">
                            Brócolis
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option4">
                        <label class="form-check-label S" for="exampleRadios4">
                            Calabresa
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option5">
                        <label class="form-check-label S" for="exampleRadios5">
                            Frango
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox" name="sabores" id="exampleRadios1" value="option6">
                        <label class="form-check-label S" for="exampleRadios6">
                            Marguerita
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios2" value="option7">
                        <label class="form-check-label S" for="exampleRadios7">
                            Milho
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option8">
                        <label class="form-check-label S" for="exampleRadios8">
                            Mussarela
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option9">
                        <label class="form-check-label S" for="exampleRadios9">
                            Napolitana
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option10">
                        <label class="form-check-label S" for="exampleRadios10">
                            Portuguesa
                        </label>
                    </div>
                    <br>
                    <h5>Doces:</h5>
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox" name="sabores" id="exampleRadios11" value="option11">
                        <label class="form-check-label S" for="exampleRadios11">
                            Abacaxi
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios12" value="option12">
                        <label class="form-check-label S" for="exampleRadios12">
                            Banana
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios13" value="option13">
                        <label class="form-check-label S" for="exampleRadios13">
                            Brigadeiro
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios14" value="option14">
                        <label class="form-check-label S" for="exampleRadios14">
                            M&M's
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option15">
                        <label class="form-check-label S" for="exampleRadios15">
                            Mallow
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox" name="sabores" id="exampleRadios1" value="option16">
                        <label class="form-check-label S" for="exampleRadios16">
                            Ouro Branco
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios2" value="option17">
                        <label class="form-check-label S" for="exampleRadios17">
                            Prestígio
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option18">
                        <label class="form-check-label S" for="exampleRadios18">
                            R&J
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input2" type="checkbox"" name="sabores" id="exampleRadios3" value="option19">
                        <label class="form-check-label S" for="exampleRadios19">
                            Sedução
                        </label>
                    </div>
                </div>
                

        <div id="sabor3" class="mt-3 col-md-5" style="display: none;">
            <h4>Escolha o sabor da 2º metade</h4>
            <h5>Salgadas:</h5>
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox" name="sabores" id="exampleRadios1" value="option1">
                        <label class="form-check-label S" for="exampleRadios1">
                            Atum
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios2" value="option2">
                        <label class="form-check-label S" for="exampleRadios2">
                            Bauru
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option3">
                        <label class="form-check-label S" for="exampleRadios3">
                            Brócolis
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option4">
                        <label class="form-check-label S" for="exampleRadios4">
                            Calabresa
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option5">
                        <label class="form-check-label S" for="exampleRadios5">
                            Frango
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox" name="sabores" id="exampleRadios1" value="option6">
                        <label class="form-check-label S" for="exampleRadios6">
                            Marguerita
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios2" value="option7">
                        <label class="form-check-label S" for="exampleRadios7">
                            Milho
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option8">
                        <label class="form-check-label S" for="exampleRadios8">
                            Mussarela
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option9">
                        <label class="form-check-label S" for="exampleRadios9">
                            Napolitana
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option10">
                        <label class="form-check-label S" for="exampleRadios10">
                            Portuguesa
                        </label>
                    </div>
                    <br>
                    <h5>Doces:</h5>
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox" name="sabores" id="exampleRadios11" value="option11">
                        <label class="form-check-label S" for="exampleRadios11">
                            Abacaxi
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios12" value="option12">
                        <label class="form-check-label S" for="exampleRadios12">
                            Banana
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios13" value="option13">
                        <label class="form-check-label S" for="exampleRadios13">
                            Brigadeiro
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios14" value="option14">
                        <label class="form-check-label S" for="exampleRadios14">
                            M&M's
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option15">
                        <label class="form-check-label S" for="exampleRadios15">
                            Mallow
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox" name="sabores" id="exampleRadios1" value="option16">
                        <label class="form-check-label S" for="exampleRadios16">
                            Ouro Branco
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios2" value="option17">
                        <label class="form-check-label S" for="exampleRadios17">
                            Prestígio
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option18">
                        <label class="form-check-label S" for="exampleRadios18">
                            R&J
                        </label>
                    </div>
                    
                    <div class="form-check ">
                        <input class="form-check-input3" type="checkbox"" name="sabores" id="exampleRadios3" value="option19">
                        <label class="form-check-label S" for="exampleRadios19">
                            Sedução
                        </label>
                    </div>
            

            </div>
        </div> <!-- fecha juntar/ -->

        <div id="bebidas" class="mt-3 col-md-12" style="display: none;">
            <h4 class="text-bold">Deseja adicionar alguma <strong>Bebida?</strong></h4>

            <input type="radio" name="bebida" id="bRe" value="Re" class="d-none" required>
                <label for="bRe" id="lblbRe" class="col-md-3 btn btn-outline-danger">
                <img src="img/refriiiiii.png" alt="">
                <br>
                Refrigerantes
                </label>

            <input type="radio" name="bebida" id="bSu" value="Su" class="d-none" required>
                <label for="bSu" id="lblbSu" class="col-md-3 btn btn-outline-danger">
                <img src="img/juiii.png" alt="">
                <br>
                Sucos
                </label>

            <input type="radio" name="bebida" id="bSb" value="Sb" class="d-none" required>
                <label for="bSb" id="lblbSb" class="col-md-3 btn btn-outline-danger">
                <img src="img/xxxx.png" alt="">
                <br>
                Sem Bebida
                </label>
        </div>

        <div id="refris" class="mt-3 col-md-12" style="display: none;" required>
            <select  value="fzr" name="refri" id="idrefri" class="form-select form-select-lg"  aria-label="Large select example">
            
                    <option selected>Escolha uma opção</option>
                    <option value="CocaColaL">Coca-Cola 1L</option>
                    <option value="CocaColaMl">Coca-Cola 600ML</option>
                    <option value="FantaLaranjaL">Fanta Laranja 1L</option>
                    <option value="GuranaL">Guaraná 1L</option>
                    <option value="GuaranaMl">Guaraná 600 ML</option>
                    <option value="SpriteL">Sprite 1L</option>
                    <option value="SpriteMl">Sprite 600ML</option>
            </select>
            <br>

            <input type="radio" name="add" id="lbladdr" value="btnaddr" class="d-none">
                <label for="btnaddr" id="lbladdr" class="col-md-3 btn btn-outline-danger lbladdr-add-btn">
                    Mais uma Bebida?<i class="bi bi-check-lg"></i>
                </label>

            <a href="realizado.php">
            <input type="radio" name="finaliza" id="lblfzr" value="btnfz" class="d-none">
                <label for="btnfzr" id="lblfzr" class="col-md-3 btn btn-outline-success ">
                    Finalizar Pedido <i class="bi bi-check-lg"></i>
                </label>
            </a>

        </div>

        <div id="sucos" class="mt-3 col-md-12 " style="display: none;" required>
            <select  value="fzs" name="suco" id="idsucos" class="form-select form-select-lg"  aria-label="Large select example">
                <option selected>Escolha uma opção</option>
                <option value="Abacaxi"> Suco de Abacaxi</option>
                <option value="Acerola"> Suco de Acerola</option>
                <option value="Morango"> Suco de Morango</option>
                <option value="Laranja"> Suco de Laranja</option>
                <option value="Uva"> Suco de Uva</option>
                <option value="Goiaba"> Suco de Goiaba</option>
                <option value="Maracuja"> Suco de Maracujá</option>
            </select>
            <br>

            <input type="radio" name="add" id="lbladds" value="btnadds" class="d-none">
                <label for="btnadds" id="lbladds" class="col-md-3 btn btn-outline-danger lbladds-add-btn">
                    Finalizar Pedido <i class="bi bi-check-lg"></i>
                </label>

            <a href="realizado.php">
            <input type="radio" name="finaliza" id="lblfzs" value="btnfz" class="d-none">
                <label for="btnfzs" id="lblfzs" class="col-md-3 btn btn-outline-success">
                    Finalizar Pedido <i class="bi bi-check-lg"></i>
                </label>
            </a>
        </div>

        <div id="sembebidas" class="mt-3 col-md-12" style="display: none;">
            <a href="realizado.php">
            <input type="radio" name="sembebida" id="lblfipe" value="btnsb" class="d-none">
                <label for="btnfipe" id="lblfipe" class="col-md-3 btn btn-outline-success">
                    Finalizar Pedido <i class="bi bi-check-lg"></i>
                </label>
            </a>
        </div>

        <div class="patrocinios">
            <img src="img/border.png" class="img-fluid mt-4" alt="borda">
            <?php
            include_once('inc/rodape.php'); ?>
        </div>
    </div>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

    // FORMATOS
    $('.Formatos').click(function(e) {
        // e.preventDefault();
        var formato = $("input[name=btnMostrarFormatos]:checked").val();
        $('#tamanhos').show();
        if (formato === 'r') {
            $("#lblFormatoRedondo").addClass('btn-danger');
            $("#lblFormatoRedondo").removeClass('btn-outline-danger');

            $("#lblFormatoCoracao").removeClass('btn-danger');
            $("#lblFormatoCoracao").addClass('btn-outline-danger');
        } else {
            $("#lblFormatoCoracao").addClass('btn-danger');
            $("#lblFormatoCoracao").removeClass('btn-outline-danger');

            $("#lblFormatoRedondo").removeClass('btn-danger');
            $("#lblFormatoRedondo").addClass('btn-outline-danger');
        }
    });

    // TAMANHOS
    $("input[name=tamanho]:radio").click(function(e) {
        // e.preventDefault();
        var tamanho = $(this).val();
        $('#intmetades').show();
        console.log(tamanho);
        switch (tamanho) {
            case 'G':
                $("#lbltmG").addClass('btn-danger');
                $("#lbltmG").removeClass('btn-outline-danger');

                $("#lbltmM").removeClass('btn-danger');
                $("#lbltmM").addClass('btn-outline-danger');

                $("#lbltmP").removeClass('btn-danger');
                $("#lbltmP").addClass('btn-outline-danger');
                break;
            case 'M':
                $("#lbltmM").addClass('btn-danger');
                $("#lbltmM").removeClass('btn-outline-danger');

                $("#lbltmG").removeClass('btn-danger');
                $("#lbltmG").addClass('btn-outline-danger');

                $("#lbltmP").removeClass('btn-danger');
                $("#lbltmP").addClass('btn-outline-danger');
                break;
            case 'P':
                $("#lbltmP").addClass('btn-danger');
                $("#lbltmP").removeClass('btn-outline-danger');

                $("#lbltmG").removeClass('btn-danger');
                $("#lbltmG").addClass('btn-outline-danger');

                $("#lbltmM").removeClass('btn-danger');
                $("#lbltmM").addClass('btn-outline-danger');
                break;            
        }

    });  

    //intmetade
    $("input[name=intmetade]:radio").click(function(e) {
        // e.preventDefault();
        var intmetade = $(this).val();
        console.log(intmetade);
        switch (intmetade) {
            case 'I':
                $('#sabor').show();
                $('#sabor2').hide();
                $('#sabor3').hide();
                $("#lblinteira").addClass('btn-danger');
                $("#lblinteira").removeClass('btn-outline-danger');

                $("#lblmetade").removeClass('btn-danger');
                $("#lblmetade").addClass('btn-outline-danger');
                break;
            case 'Me':
                $('#sabor2').show();
                $('#sabor3').show();
                $('#sabor').hide();
                $("#lblmetade").addClass('btn-danger');
                $("#lblmetade").removeClass('btn-outline-danger');

                $("#lblinteira").removeClass('btn-danger');
                $("#lblinteira").addClass('btn-outline-danger');
                break;  
                
            }
    }); 

    // sabor 1
    $(function(){
       $('input.form-check-input').click(function(){
          if($(this).is(":checked")){
             $('input.form-check-input').attr('disabled',true);
             $(this).removeAttr('disabled');
          }else{
             $('input.form-check-input').removeAttr('disabled');
          }
       })
    });

    // sabor 2
    $(function(){
       $('input.form-check-input2').click(function(){
          if($(this).is(":checked")){
             $('input.form-check-input2').attr('disabled',true);
             $(this).removeAttr('disabled');
          }else{
             $('input.form-check-input2').removeAttr('disabled');
          }
       })
    });

    // sabor 3
    $(function(){
       $('input.form-check-input3').click(function(){
          if($(this).is(":checked")){
             $('input.form-check-input3').attr('disabled',true);
             $(this).removeAttr('disabled');
          }else{
             $('input.form-check-input3').removeAttr('disabled');
          }
       })
    });

    //bebidas (se der certo)
    $("input[name=sabores]:checkbox").click(function(e) {
        // e.preventDefault();
        var sabores = $(this).val();
        $('#bebidas').show();
        console.log(sabores);
        switch (sabores) {
            case 'Re':
                $("#lblbRe").addClass('btn-danger');
                $("#lblbRe").removeClass('btn-outline-danger');

                $("#lblbSu").removeClass('btn-danger');
                $("#lblbSu").addClass('btn-outline-danger');

                $("#lblbSb").removeClass('btn-danger');
                $("#lblbSb").addClass('btn-outline-danger');
                break;
            case 'Su':
                $("#lblbSu").addClass('btn-danger');
                $("#lblbSu").removeClass('btn-outline-danger');

                $("#lblbRe").removeClass('btn-danger');
                $("#lblbRe").addClass('btn-outline-danger');

                $("#lblbSb").removeClass('btn-danger');
                $("#lblbSb").addClass('btn-outline-danger');
                break;
            case 'Sb':
                $("#lblbSb").addClass('btn-danger');
                $("#lblbSb").removeClass('btn-outline-danger');

                $("#lblbRe").removeClass('btn-danger');
                $("#lblbRe").addClass('btn-outline-danger');

                $("#lblbSu").removeClass('btn-danger');
                $("#lblbSu").addClass('btn-outline-danger');
                break;            
        }

    }); 
    
    //refri e compania 
    $("input[name=bebida]:radio").click(function(e) {
        // e.preventDefault();
        var bebida = $(this).val();
        console.log(bebida);
        switch (bebida) {
            case 'Re':
                $('#refris').show();
                $('#sucos').hide();
                $('#sembebidas').hide();

                $("#idrefri").addClass('btn-danger');
                $("#idrefri").removeClass('btn-outline-danger');

                $("#idsucos").removeClass('btn-danger');
                $("#idsucos").addClass('btn-outline-danger');

                $("#lblfipe").removeClass('btn-danger');
                $("#lblfipe").addClass('btn-outline-danger');
                break;
            case 'Su':
                $('#refris').hide();
                $('#sucos').show();
                $('#sembebidas').hide();

                $("#idsucos").addClass('btn-success');
                $("#idsucos").removeClass('btn-outline-success');

                $("#idrefri").removeClass('btn-success');
                $("#idrefri").addClass('btn-outline-success');

                $("#lblfipe").removeClass('btn-success');
                $("#lblfipe").addClass('btn-outline-success');
                break;
            case 'Sb':
                $('#refris').hide();
                $('#sucos').hide();
                $('#sembebidas').show();

                $("#lblfipe").addClass('btn-success');
                $("#lblfipe").removeClass('btn-outline-success');

                $("#idrefri").removeClass('btn-success');
                $("#idrefri").addClass('btn-outline-success');

                $("#idsucos").removeClass('btn-success');
                $("#idsucos").addClass('btn-outline-success');
                break;            
        }

    });


    $(function () { 
        $("#lbladdr").createRepeater();
        $("#lbladds").createRepeater();
     })
    
 



</script>

</html>