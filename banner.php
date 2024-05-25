<?php

$query = "SELECT * FROM `site_texto` WHERE `id_texto` = 2";
$stmt = $db->prepare($query);
$stmt->execute();

$row_cardapio = $stmt->fetchAll();

$cardapios = array();

foreach ($row_cardapio as $cardapio) {
    $cardapios[] = array(
        "nome_produto" => $cardapio["titulo"],
        "desc_produto" => $cardapio["descr"],
        "img" => $cardapio["img"],
        "id_produto" => $cardapio["id_procedimento"]

    );
}

?>
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="images/img-1.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <?php print_descr($row_texto, "titulo"); ?>

                        <p><a id="btn-banner" class="btn hvr-hover" href="#nossos-produtos" style="background-color: rgb(255, 255, 255, 0.2); border:2px solid rgb(255, 255, 255)">Ver produtos</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/img-2.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php print_descr($row_texto, "titulo-subtitulo"); ?>
                        <p><a class="btn hvr-hover" href="#nossos-produtos" style="background-color: rgb(255, 255, 255, 0.2); border:2px solid rgb(255, 255, 255)">Ver produtos</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/banner-maes.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php print_descr($row_texto, "quemsomos-descr"); ?>
                        <p><a class="btn hvr-hover" href="#nossos-produtos" style="background-color: rgb(255, 255, 255, 0.2); border:2px solid rgb(255, 255, 255)">Ver produtos</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>

</div>

</div>