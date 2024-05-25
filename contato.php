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
    <title>Junior Leite Decorações - Contato</title>
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


</head>

<body>


    <?php include('nav.php'); ?>

    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Fale conosco</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Entre em contato conosco</h2>
                        <p>Preenchendo o formulário abaixo você será redirecionado para nosso Whatsapp. Caso preferia outro meio de contato você pode utilizar nossas outras formas de contato.</p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" required data-error="Digite seu nome">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Assunto" required data-error="Digite o assunto">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Mensagem" rows="4" data-error="Digite sua mensagem" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit" onclick="enviarZap()" style="background-color: #cd1a1e;">Entrar em contato</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Outras formas de contato</h2>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Endereço: Av. Salvador Milego, 737 - Jardim Vera Cruz, Sorocaba - SP</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Telefone: <a href="">Telefone: (15) 98128-5114</a></p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php'); ?>

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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
    <script src="js/custom.js"></script>
    <script src="js/whatsapp.js"></script>
</body>

</html>