
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
<body onload="character()">
    <div class="container-fluid text-white">
        <?php
        require('../PHP\header.php');
        ?>
        <hr style="color: #22262A; margin: 0; height: 2px;">
        <div class="jumbotron">
            <div class="container">
            
            <h1 class="header-main-title">¡Busca Tu superheroe favorito!</h1>
            <form id="connectionForm">

                <div class="form-group">
                <input type="text" name="name" id="name" class="form-control character-search-box"
                    placeholder="(Ex. Hulk, Iron Man, Spider-Man, etc...) " onkeyup="showCorrespondingHeros()">
                </div>
                <input type="submit" value="Search!" class="btn btn-danger mb-2 float-right search-character-button" id="submit">

            </form>
            <div id="cards-group"></div>
            </div>
        </div>

        
            <section id="characterSection"></section>



            <br>
            
            
        </div>




    <!-- JavaScript -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js\jquery-3.6.4.min.js"></script>
    <script src="../MyScript/API.js"></script>

   
</body>
 <?php
        require('../PHP\footer.php');
    ?>
</html>