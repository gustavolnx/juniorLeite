<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#slides-shop"><img src="images/logo.png" class="logo" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#nossos-produtos">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#banner-2">Avaliações</a></li>
                    <li class="nav-item"><a class="nav-link" href="./galeria.php">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" id="contato-btn" href="./contato.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#footer-1">Local</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener("click", function(e) {
        var navbarMenu = document.getElementById("navbar-menu");
        if (!navbarMenu.contains(e.target)) {
            navbarMenu.classList.remove("show");
        }
    });
    var navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach(function(link) {
        link.addEventListener("click", function() {
            var navbarMenu = document.getElementById("navbar-menu");
            navbarMenu.classList.remove("show");
        });
    });
</script>