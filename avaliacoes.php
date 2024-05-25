<?php

$query = "SELECT * FROM `site_avaliacao`;";
$stmt = $db->prepare($query);
$stmt->execute();

$row_cardapio = $stmt->fetchAll();

$cardapios = array();

foreach ($row_cardapio as $cardapio) {
    $cardapios[] = array(
        "avaliacao" => $cardapio["avaliacao"],
    );
}
?>




<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="nossas-avaliacoes">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-danger fw-normal">Avaliações</h5>
            <h1 class="mb-5">Veja o que dizem nossos clientes!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <?php
            foreach ($cardapios as $cardapio) {
            ?>
                <div class='testimonial-item bg-transparent border rounded p-4'>
                    <i class='fa fa-quote-left fa-2x text-danger mb-3'></i>
                    <p><?php echo $cardapio["avaliacao"]; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>