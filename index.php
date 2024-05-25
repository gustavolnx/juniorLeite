<?php require_once('app/config/conn.php');



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

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Junior Leite - Decorações de Eventos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fav icon -->
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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

    <style>
        .text-danger {
            color: #cd1a1e !important;
        }
    </style>
</head>

<body>
    <?php include 'nav.php'; ?>
    <?php include 'banner.php'; ?>
    <?php include 'produtos.php'; ?>
    <?php include 'banner2.php'; ?>
    <?php include 'avaliacoes.php'; ?>
    <?php include 'banner-3.php'; ?>
    <?php include 'footer.php'; ?>
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