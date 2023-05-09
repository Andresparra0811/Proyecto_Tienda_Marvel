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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
   
   <div class="container-fluid text-white"></div>
      <?php
         require('../PHP\header.php');
      ?>

      <div class="container">
         <div class="row ">
            <div class="col-12">
               <h1 class="text-center tittle">COLECCIONABLES</h1>
            </div>
      </div>
      <!--Productos-->
         <div class="products-container">
      
            <div class="product"  data-name="p-1">
               <img src="../images/1.png" alt="">
               <h3>Venom Funko Pop Comic Covers 10</h3>
               <div class="price">$180.800</div>
            </div>
      
            <div class="product"  data-name="p-2">
               <img src="../images/2.png" alt="">
               <h3> Marvel Spider-Man - Unmasked Spider-Man</h3>
               <div class="price">$77.100</div>
            </div>
      
            <div class="product" data-name="p-3" >
               <img src="../images/3.png" alt="">
               <h3>Carnage- Let It Be Carnage</h3>
               <div class="price">$82.200</div>
            </div>
      
            <div class="product"  data-name="p-4">
               <img src="../images/4.png" alt="">
               <h3>COMIC COVER: MARVEL- Classic Thor</h3>
               <div class="price">$150.000</div>
            </div>
      
            <div class="product"  data-name="p-5">
               <img src="../images/5.png" alt="">
               <h3>MARVEL ENDGAME - CAPITAN AMERICA MARTILLO Y ESCUDO</h3>
               <div class="price">$90.000</div>
            </div>
      
            <div class="product"  data-name="p-6">
               <img src="../images/6.png" alt="">
               <h3>Año del Escudo - El Soldado de Invierno</h3>
               <div class="price">$110.000</div>
            </div>
      
            <div class="product"  data-name="p-7">
               <img src="../images/7.png" alt="">
               <h3>Doctor Strange Doctor Strange Multiverse of Madness</h3>
               <div class="price">$70.000</div>
            </div>
            <div class="product" data-name="p-8">
               <img src="../images/8.png" alt="">
               <h3>Loki - Kids</h3>
               <div class="price">$55.500</div>
            </div>
            <div class="product" data-name="p-9" >
               <img src="../images/9.png" alt="">
               <h3>80th-First Appearance Vulture</h3>
               <div class="price">$90.000</div>
            </div>
            <div class="product"  data-name="p-10">
               <img src="../images/10.png" alt="">
               <h3>Funko POP! Marvel: Red Hulk Edición especial</h3>
               <div class="price">$50.500</div>
            </div>
            <div class="product"  data-name="p-11">
               <img src="../images/11.png" alt="">
               <h3>Spider Man: No Way Home - Spiderman en traje mejorado</h3>
               <div class="price">$77.200</div>
            </div>
            <div class="product"  data-name="p-12">
               <img src="../images/12.png" alt="">
               <h3>vengers Endgame - Wanda Maximoff Glow</h3>
               <div class="price">$180.000</div>
            </div>
            <div class="product" data-name="p-13" >
               <img src="../images/13.png" alt="">
               <h3>Moment: Doctor Strange - Dead Strange vs Scarlet Witch</h3>
               <div class="price">$230.000</div>
            </div>
            <div class="product"  data-name="p-14">
               <img src="../images/14.png" alt="">
               <h3>Pop! Doctor Strange - Dead Strange (edición especial exclusiva)</h3>
               <div class="price">$98.000</div>
            </div>
            <div class="product" data-name="p-15">
               <img src="../images/15.png" alt="">
               <h3>Monster Hunters - Duende verde</h3>
               <div class="price">$75.000</div>
            </div>
            <div class="product"  data-name="p-16">
               <img src="../images/16.png" alt="">
               <h3>Thor: Love and Thunder - Thor</h3>
               <div class="price">$77.000</div>
            </div>
            <div class="product"  data-name="p-17">
               <img src="../images/17.png" alt="">
               <h3>Avengers Endgame - Araña de hierro con Nano Guantelete</h3>
               <div class="price">$78.000</div>
            </div>
            <div class="product"  data-name="p-18">
               <img src="../images/18.png" alt="">
               <h3>Ride Super Deluxe: Marvel's Thor: Love and Thunder - The Goat Boat</h3>
               <div class="price">$240.000</div>
            </div>
      </div>
      <!-- Preview -->
      <div class="products-preview">

         <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="../images/1.png" alt="">
            <h3>VENOM COMIC</h3>
            <p>FUNKO POP COVER ART MARVEL VENOM (V1, BOOTH) SPECIAL EDITION</p>
            <div class="price">$180.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="../images/2.png" alt="">
            <h3>Marvel Spider-Man - Unmasked Spider-Man</h3>
            <p>Funko POP de la pelicula Spider-Man de Tom Holland.</p>
            <div class="price">$77.100</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="../images/3.png" alt="">
            <h3>Carnage- Let It Be Carnage</h3>

            <p>Funko Pop del famoso villano Carnage de la pelicula Venom 2.</p>
            <div class="price">$82.200</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="../images/4.png" alt="">
            <h3>COMIC COVER - Classic Thor</h3>
            <p>Funko Pop con portada de comic del icónico personaje de los vengadores Thor</p>
            <div class="price">$150.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="../images/5.png" alt="">
            <h3>MARVEL ENDGAME - CAPITAN AMERICA MARTILLO Y ESCUDO</h3>
            <p>Funko POP de la icónica escena del capitan américa con el martillo de Thor.</p>
            <div class="price">$90.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="../images/6.png" alt="">
            <h3>Año del Escudo - Soldado del Invierno</h3>
         
            <p>Funko Pop del soldado del invierno.</p>
            <div class="price">$110.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-7">
            <i class="fas fa-times"></i>
            <img src="../images/7.png" alt="">
            <h3>Doctor Strange Multiverse of Madness</h3>
         
            <p>Funko POP Doctor Strange de la pelicula Multiversee of Madness.</p>
            <div class="price">$70.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-8">
            <i class="fas fa-times"></i>
            <img src="../images/8.png" alt="">
            <h3>Loki-Kids</h3>
         
            <p>Funko POP de Loki en su infancia </p>
            <div class="price"></div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
         <div class="preview" data-target="p-9">
            <i class="fas fa-times"></i>
            <img src="../images/9.png" alt="">
            <h3>80th- First Appereance Vulture</h3>
         
            <p>Funko POP de la primera aparición de Vulture en los comics de Spider-Man</p>
            <div class="price">$90.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
         <div class="preview" data-target="p-10">
            <i class="fas fa-times"></i>
            <img src="../images/10.png" alt="">
            <h3>Funko POP! Marvel: Red Hulk Edición Especial</h3>
            
            <p>Funko POP de Red Hulk edición especial de la Comicon de San Diego.</p>
            <div class="price">$50.500</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-11">
            <i class="fas fa-times"></i>
            <img src="../images/11.png" alt="">
            <h3>Spider-Man: No Way Home - Spider-Man en traje mejorado</h3>
            <p>Funko POP de Spider-Man con traje para viajes entre universos.</p>
            <div class="price">$77.200</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-12">
            <i class="fas fa-times"></i>
            <img src="../images/12.png" alt="">
            <h3>Avengers Endgame - Wanda Maximoff Glow</h3>
            <p>Funko POP Wanda de la pelicula Endgame (Alumbra en la oscuridad)</p>
            <div class="price">$180.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-13">
            <i class="fas fa-times"></i>
            <img src="../images/13.png" alt="">
            <h3>Moment: Doctor Strange - Dead Strange VS Scarlet Witch</h3>
            <p>Funko Pop de la Escena icónica de la pelicula Doctor Strange Multiverse of Madness.</p>
            <div class="price">$230.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-14">
            <i class="fas fa-times"></i>
            <img src="../images/14.png" alt="">
            <h3>POP! Doctor Strange - Dead Strange (Edición Especial)</h3>  
            <p>Funko Pop de Doctor Strange muerto - Edición especial</p>
            <div class="price">$98.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-15">
            <i class="fas fa-times"></i>
            <img src="../images/15.png" alt="">
            <h3>Monster Hunters - Duende Verde</h3>
            <p>Funko Pop del icónico villano de Spider-Man, el Duende Verde</p>
            <div class="price">$75.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-16">
            <i class="fas fa-times"></i>
            <img src="../images/16.png" alt="">
            <h3>Thor Love and Thunder - Thor</h3>
         
            <p>Thor, el protagonista de la película Thor Love and Thunder.</p>
            <div class="price">$77.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
      
         <div class="preview" data-target="p-17">
            <i class="fas fa-times"></i>
            <img src="../images/17.png" alt="">
            <h3>Avengers Endgame - Araña de hierro con Nano Guantelete</h3>
            <p>Revive la iconica escena de Spider-Man con el guantelete del infinito con este Funko POP</p>
            <div class="price">$78.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
         <div class="preview" data-target="p-18">
            <i class="fas fa-times"></i>
            <img src="../images/18.png" alt="">
            <h3>Ride Super Deluxe: Marvel's Thor: Love and Thunder - The Goat Boat</h3>
            <p>Funko Pop de la pelicula Thor: Love and Thunder junto con sus cabras</p>
            <div class="price">$240.000</div>
            <div class="buttons">
               <a href="#" class="buy">Comprar Ahora</a>
               <a href="#" class="cart">Añadir al Carrito</a>
            </div>
         </div>
   </div>

   <!-- JavaScript -->
   <script src="../js\bootstrap.min.js"></script>
   <script src="../js\bootstrap.min.js"></script>
   <script src="../MyScript\myscript.js" defer></script>
   <script src="../js\jquery-3.6.4.min.js"></script>
   <?php
   require('../PHP\footer.php');
   ?>


</body>
</html>