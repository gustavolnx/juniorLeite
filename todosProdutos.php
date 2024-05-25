<?php
require_once('app/config/conn.php');



// Realizar uma consulta do feedback
$query = "SELECT * FROM `site_texto`;";
$stmt = $db->prepare($query);
$stmt->execute();



$row_texto = $stmt->fetchAll();



function print_descr($resultados, $parametro)
{
    foreach ($resultados as $linha) {
        if ($linha['secao'] === $parametro) {
            print_r($linha['descr']);
        }
    }
}


$query = "SELECT * FROM `site_procedimento` WHERE `pontos` = 2 ;";
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

$query2 = "SELECT * FROM `site_procedimento` WHERE `pontos` = 1 ;";
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
</head>

<body>

    <?php include('nav.php') ?>
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Veja todos nossos produtos</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 id="nossos-produtos">Confira todos nossos produtos abaixo</h1>
                        <p>Temos desde de Floricultura a decorações.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button data-filter=".top-featured">Floricultura</button>
                            <button data-filter=".best-seller">Decorações</button>
                        </div>
                    </div>
                </div>
            </div>


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





            </div>
        </div>
    </div>

    <?php include('footer.php') ?>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>