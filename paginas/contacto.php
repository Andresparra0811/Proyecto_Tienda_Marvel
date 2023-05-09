<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Store</title>
    <link rel="stylesheet" href="../styles/style.css">
    <!--importar boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Bebas+Neue&family=Lobster&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container-fluid text-white">
        <?php
        require('../PHP\header.php');
        ?>


        <div class="row justify-content-center align-items-center">
            <div class="col text-center align-items-center flex-column">
                <h1>¡Contactanos!</h1>
                <p>Realiza tus pedidos en la página web o contactate directamente con nosotros para mayor asesoria</p>
        <a class="btn btn-secondary btn-lg" href="Coleccionables.html" role="button">Comprar ahora</a>
            </div>
        </div>
        <div class="  row justify-content-center align-items-center  ">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images\facebook.png" class="rounded mx-auto d-block " alt="..." height="600" width="600">
                    </div>
                    <div class="carousel-item">
                        <img src="../images\instagram.png" class="rounded mx-auto d-block " alt="..." height="600" width="600">
                    </div>
                    <div class="carousel-item">
                        <img src="../images\WhatsApp.png" class="rounded mx-auto d-block " alt="..." height="600" width="600">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>




    <!-- JavaScript -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js\jquery-3.6.4.min.js"></script>

    <?php
        require('../PHP\footer.php');
    ?>
</body>
</html>