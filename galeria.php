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
<html lang="pt-br">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Junior Leite Decorações - Galeria</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>

<body>
    <?php include('nav.php') ?>




    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php print_descr($row_texto, "site-galeria"); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <?php print_descr($row_texto, "texto-galeria"); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Todas</button>
                            <button data-filter=".bulbs">Decorações</button>
                            <button data-filter=".fruits">Flores</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">

                <?php foreach ($cardapios as $cardapio) {
                    echo "<div class='col-lg-3 col-md-6 special-grid bulbs'>";
                    echo "<div class='products-single fix'>";
                    echo "<div class='box-img-hover'>";
                    echo "<img src='../uploads/procedimento/" . $cardapio['img'] . "' class='img-fluid' alt='Image'>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                foreach ($cardapios2 as $cardapio2) {

                    echo "<div class='col-lg-3 col-md-6 special-grid fruits'>";
                    echo "<div class='products-single fix'>";
                    echo "<div class='box-img-hover'>";
                    echo "<img src='../uploads/procedimento/" . $cardapio2['img'] . "' class='img-fluid' alt='Image'>";
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
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom-2.js"></script>
</body>

</html>