<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repostería Gourmet - Panel de Control</title>
    <link rel="" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="repostreriay.css">
   <link rel="icon" type="image/png" href="esponjatuvieja.png">
</head>
<body>

<div class="contenedor">

    <header>
        <h1>Repostería Dulce Tentación</h1>
        <p>El arte de lo dulce en un solo lugar</p>
    </header>

    <nav class="menu-principal">
        <a href="#historia">HISTORIA</a>
        <a href="#productos">PRODUCTOS</a>
        <a href="#ofertas">OFERTAS</a>
        <a href="#pedido">PEDIDOS</a>
    </nav>

    <?php
    $_prod1 = "Pastel de Esponja"; 
    $_prod2 = "Galletas Especiales"; 
    $_prod3 = "pastel de queso";
    $_prod4 = "gelatina de fresa";
    $_prod5 = "pastel de chocolate";
    $_prod6 = "gelatina de limon";
    $_precio1 = 380; 
    $_precio2 = 170;
    $_precio3 = 200;
    $_precio4 = 150;
    $_precio5 = 230;
    $_precio6 = 120;
    $_stock1 = 2; 
    $_stock2 = 10;
    $_stock3 = 12;
    $_stock4 = 8;
    $_stock5 = 9;
    $_stock6 = 10;
    ?>

    <nav id="historia" class="seccion-grande">
        <h2>Nuestra Historia</h2>
        <div class="contenido-historia">
            <p>
                Fundada en 2020, nuestra pastelería comenzó como un sueño familiar. 
                Cada receta ha sido perfeccionada para ofrecerte una experiencia única. 
                Desde nuestro famoso <strong><?php echo $_prod1; ?></strong> hasta las galletas artesanales, 
                ponemos amor en cada ingrediente  somos un negocio el cual nos tomamos muy enserio la creacion de pasteles 
                repetamos a cada uno de nuestros clientes y les damos un trato unico como si fueran de nuestra propia familia
                queremos que disfrutes de cada uno de nuestro produtos ya que los preparamos con amor y mucho esfuerzo para 
                darle la mejor experiencia a nuestros clientes ocupamos productos desde traidos desde el mismisimo amazonas
                productos naturalez y 100% organicos.
            </p>
              <center><img src="logotipo.jpg" width="400" alt="Logotipo de la empresa">  <center>
           
        </div>
    </nav>

    <nav id="productos" class="seccion-grande">
        <h2>Catálogo de Inventario</h2>
        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="esponjatuvieja.png" alt="Pastel"></td>
                    <td><strong><?php echo $_prod1; ?></strong></td>
                    <td>$<?php echo $_precio1; ?></td>
                    <td><?php echo $_stock1; ?></td>
                </tr>
                <tr>
                    <td><img src="galletas chocolate.jpg" alt="Galletas"></td>
                    <td><strong><?php echo $_prod2; ?></strong></td>
                    <td>$<?php echo $_precio2; ?></td>
                    <td><?php echo $_stock2; ?></td>
                </tr>
                <tr>
                    <td><img src="pasteldequeso.jpg" alt="Galletas"></td>
                    <td><strong><?php echo $_prod3; ?></strong></td>
                    <td>$<?php echo $_precio3; ?></td>
                    <td><?php echo $_stock3; ?></td>
                </tr>
                <tr>
                    <td><img src="gelatinadefresa.jpg" alt="Pastel"></td>
                    <td><strong><?php echo $_prod4; ?></strong></td>
                    <td>$<?php echo $_precio4; ?></td>
                    <td><?php echo $_stock4; ?></td>
                    <tr>
                        <tr>
                    <td><img src="pasteldechocolate.jpg" alt="Pastel"></td>
                    <td><strong><?php echo $_prod5; ?></strong></td>
                    <td>$<?php echo $_precio5; ?></td>
                    <td><?php echo $_stock5; ?></td>
                    <tr>
                        <tr>
                    <td><img src="gelatinadelimon.jpg" alt="Pastel"></td>
                    <td><strong><?php echo $_prod6; ?></strong></td>
                    <td>$<?php echo $_precio6; ?></td>
                    <td><?php echo $_stock6; ?></td>
                    <tr>
            </tbody>
        </table>
    </nav>

    <nav id="ofertas" class="seccion-grande">
        <h2>Descuentos Progresivos</h2>
        <p>Promociones exclusivas para el <strong><?php echo $_prod1; ?></strong> calculadas por día:</p>
        
        <div class="contenedor-ofertas">
            <?php
            $_porc = 0.05;
            for ($i = 2; $i < 10; $i++) { 
                $_desc = $_precio1 - ($_precio1 * $_porc);
                echo "<div class='promo-caja'>";
                echo "<strong>Día $i: </strong>";
                echo "<b>$" . number_format($_desc, 2) . "</b>";
                 echo "<span>" . ($_porc*100) . "%</span>";
                 echo "</div>";
                $_porc = $_porc + 0.01;
            }
            ?>
        </div>
    </nav>

    <nav id="ofertas" class="seccion-grande">
        <h2>Descuentos Progresivos</h2>
        <p>Promociones exclusivas para el <strong><?php echo $_prod2; ?></strong> calculadas por día:</p>
        
        <div class="contenedor-ofertas">
            <?php
            $_porc = 0.05;
            for ($i = 2; $i < 10; $i++) { 
                $_desc = $_precio2 - ($_precio2 * $_porc);
                echo "<div class='promo-caja'>";
                echo "<strong>Día $i: </strong>";
                echo "<b>$" . number_format($_desc, 2) . "</b>";
                 echo "<span>" . ($_porc*100) . "%</span>";
                 echo "</div>";
                $_porc = $_porc + 0.01;
            }
            ?>
        </div>
    </nav>
    <nav id="ofertas" class="seccion-grande">
        <h2>Descuentos Progresivos</h2>
        <p>Promociones exclusivas para el <strong><?php echo $_prod3; ?></strong> calculadas por día:</p>
        
        <div class="contenedor-ofertas">
            <?php
            $_porc = 0.05;
            for ($i = 2; $i < 10; $i++) { 
                $_desc = $_precio3 - ($_precio3 * $_porc);
                echo "<div class='promo-caja'>";
                echo "<strong>Día $i: </strong>";
                echo "<b>$" . number_format($_desc, 2) . "</b>";
                 echo "<span>" . ($_porc*100) . "%</span>";
                 echo "</div>";
                $_porc = $_porc + 0.01;
            }
            ?>
        </div>
    </nav>
    </nav>
    <nav id="ofertas" class="seccion-grande">
        <h2>Descuentos Progresivos</h2>
        <p>Promociones exclusivas para el <strong><?php echo $_prod4; ?></strong> calculadas por día:</p>
        
        <div class="contenedor-ofertas">
            <?php
            $_porc = 0.05;
            for ($i = 2; $i < 10; $i++) { 
                $_desc = $_precio4 - ($_precio4 * $_porc);
                echo "<div class='promo-caja'>";
                echo "<strong>Día $i: </strong>";
                echo "<b>$" . number_format($_desc, 2) . "</b>";
                 echo "<span>" . ($_porc*100) . "%</span>";
                 echo "</div>";
                $_porc = $_porc + 0.01;
            }
            ?>
        </div>
    </nav>
    </nav>
    <nav id="ofertas" class="seccion-grande">
        <h2>Descuentos Progresivos</h2>
        <p>Promociones exclusivas para el <strong><?php echo $_prod5; ?></strong> calculadas por día:</p>
        
        <div class="contenedor-ofertas">
            <?php
            $_porc = 0.05;
            for ($i = 2; $i < 10; $i++) { 
                $_desc = $_precio5 - ($_precio5 * $_porc);
                echo "<div class='promo-caja'>";
                echo "<strong>Día $i: </strong>";
                echo "<b>$" . number_format($_desc, 2) . "</b>";
                 echo "<span>" . ($_porc*100) . "%</span>";
                 echo "</div>";
                $_porc = $_porc + 0.01;
            }
            ?>
        </div>
    </nav>
    </nav>
    <nav id="ofertas" class="seccion-grande">
        <h2>Descuentos Progresivos</h2>
        <p>Promociones exclusivas para el <strong><?php echo $_prod6; ?></strong> calculadas por día:</p>
        
        <div class="contenedor-ofertas">
            <?php
            $_porc = 0.05;
            for ($i = 2; $i < 10; $i++) { 
                $_desc = $_precio6 - ($_precio6 * $_porc);
                echo "<div class='promo-caja'>";
                echo "<strong>Día $i: </strong>";
                echo "<b>$" . number_format($_desc, 2) . "</b>";
                 echo "<span>" . ($_porc*100) . "%</span>";
                 echo "</div>";
                $_porc = $_porc + 0.01;
            }
            ?>
        </div>
    </nav>

    <nav id="pedido" class="seccion-grande">
        <h2>Formulario de Pedido Especial</h2>
        <form action="conection.php" method="POST">
            <label>Nombre del Cliente:</label>
            <input type="text" name="cliente" placeholder="Tu nombre completo" required>
            
            <label>Selecciona tu Postre:</label>
             <input type="text" name="postre" placeholder="ingrese su postre" required>
            

            <label>ingrese su correo</label>
            <input type="text" name="correo" placeholder="ingrese su correo" required>

            <label>ingrese cantidad de producto</label>
            <input type="int" name="cantidad" placeholder="cantidad de producto solicitado" required>

            <label>ingrese mensaje que agregara</label>
            <input type="text" name="mensaje" placeholder="ingrese mensaje que quiere agregar " required>

             
            <input type="submit" value="Finalizar PEDIDO AHORA">
        </form>
    </nav>

    <footer>
        <p>&copy; @2026 Repostería Dulce Tentación - Todos los derechos reservados
        redes sociales ig:pasteleriadulcetentacion.</p>
    </footer>

</div>

</body>
</html>