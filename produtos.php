<?php

$query = "SELECT * FROM `site_procedimento` WHERE `pontos` = 2 LIMIT 4;";
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

$query2 = "SELECT * FROM `site_procedimento` WHERE `pontos` = 1 LIMIT 4;";
$stmt2 = $db->prepare($query2);
$stmt2->execute();

$row_cardapio2 = $stmt2->fetchAll();

$cardapios2 = array();

foreach ($row_cardapio2 as $cardapio2) {
    $cardapios2[] = array(
        "nome_produto" => $cardapio2["titulo"],
        "desc_produto" => $cardapio2["descr"],
        "img" => $cardapio2["img"],
        "id_produto" => $cardapio2["id_procedimento"]

    );
}

?>

<!-- Produtos -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <?php print_descr($row_texto, "feedback-titulo"); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button data-filter=".top-featured">Floricultura</button>
                        <button data-filter=".best-seller">Decorações</button>
                        <button onclick="location.href='./todosProdutos.php'">Todos produtos</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floricultura -->
        <div class="row special-list">

            <?php foreach ($cardapios as $cardapio) {


                echo "<div class='col-lg-3 col-md-6 col-sm-6 col-6 special-grid top-featured'>";
                echo "<div class='products-single fix'>";
                echo "<div class='box-img-hover'>";
                echo "<img src='../uploads/procedimento/" . $cardapio["img"] . "' class='img-fluid' alt='Image'>";
                echo "</div>";
                echo "<div class='why-text'>";
                echo "<h4>" . $cardapio["nome_produto"] . "</h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            foreach ($cardapios2 as $cardapio2) {
                echo "<div class='col-lg-3 col-md-6 col-sm-6 col-6 special-grid best-seller'>";
                echo "<div class='products-single fix'>";
                echo "<div class='box-img-hover'>";
                echo "<img src='../uploads/procedimento/" . $cardapio2['img'] . "' class='img-fluid' alt='Image'>";
                echo "</div>";
                echo "<div class='why-text'>";
                echo "<h4>" . $cardapio2['nome_produto'] . "</h4>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            ?>


            <!-- Decorações -->


        </div>
    </div>
</div>