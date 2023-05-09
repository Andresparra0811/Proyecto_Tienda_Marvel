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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Bebas+Neue&family=Lobster&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid text-white"></div>
    <?php
        require('../PHP\header.php');
    ?>


        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h1 class="text-center tittle">SALE</h1>
                </div>
            </div>

        <div class="products-container">   
            
            <div class="product" >
                <img src="../images/9.png" alt="">
                <h3>80th-First Appearance Vulture</h3>
                <div class="precio-antes">$90.000</div>
                <div class="descuento">$80.000</div>
            </div>
            <div class="product" >
                <img src="../images/10.png" alt="">
                <h3>Funko POP! Marvel: Red Hulk Edición especial</h3>
                <div class="precio-antes">$50.500</div>
                <div class="descuento">$40.000</div>
            </div>
            <div class="product" >
                <img src="../images/11.png" alt="">
                <h3>Spider Man: No Way Home - Spiderman en traje mejorado</h3>
                <div class="precio-antes">$77.200</div>
                <div class="descuento">$70.000</div>
            </div>
            <div class="product" >
                <img src="../images/12.png" alt="">
                <h3>vengers Endgame - Wanda Maximoff Glow</h3>
                <div class="precio-antes">$180.000</div>
                <div class="descuento">$170.000</div>
            </div>
            <div class="product" >
                <img src="../images/13.png" alt="">
                <h3>Moment: Doctor Strange - Dead Strange vs Scarlet Witch</h3>
                <div class="precio-antes">$230.000</div>
                <div class="descuento">$220.000</div>
            </div>
            <div class="product" >
                <img src="../images/14.png" alt="">
                <h3>Pop! Doctor Strange - Dead Strange (edición especial exclusiva)</h3>
                <div class="precio-antes">$98.000</div>
                <div class="descuento">$90.000</div>
            </div>
            <div class="product">
                <img src="../images/15.png" alt="">
                <h3>Monster Hunters - Duende verde</h3>
                <div class="precio-antes">$75.000</div>
                <div class="descuento">$70.000</div>
            </div>
            <div class="product" >
                <img src="../images/16.png" alt="">
                <h3>Thor: Love and Thunder - Thor</h3>
                <div class="precio-antes">$77.000</div>
                <div class="descuento">$70.000</div>
            </div>
            <div class="product" >
                <img src="../images/17.png" alt="">
                <h3>Avengers Endgame - Araña de hierro con Nano Guantelete</h3>
                <div class="precio-antes">$78.000</div>
                <div class="descuento">$70.000</div>
            </div>
            <div class="product" >
                <img src="../images/18.png" alt="">
                <h3>Ride Super Deluxe: Marvel's Thor: Love and Thunder - The Goat Boat</h3>
                <div class="precio-antes">$240.000</div>
                <div class="descuento">$230.000</div>
                
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