<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>
    <header class="header">

        <div class="menu container">
            <a href="#" class="CAE">CAE</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="imagen/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="Navbar">
                <ul>
                    <li><a href="file:///C:/Users/Alvarenga%20Avila/Desktop/Pagina%20Web/index.html">Inicio</a></li>
                    <li><a href="./pagina%20Web/Servicios.php">Servicios</a></li>
                    <li><a href="file:///C:/Users/Alvarenga%20Avila/Desktop/Pagina%20Web/Productos.html">Productos</a></li>
                    <li><a href="http://localhost/contacto/">Contáctanos</a></li>
                </ul>
            </nav>

        </div>
    </header>

    
    <div class="form-container" > <br><br><br><br><br>
    <h2>Contáctanos</h2>
    <p>
        Elevando la tecnologia, empoderando vidas Antony Electronics <br>
        donde la inavacion se encuentra con la excelencia.. <br>
    <form method="post" autocomplete "off" >

    <div class="form-group">

        <div class="form-content">
          <label for="name">Nombre</label>  
         <input type="text" id="name" name="name" placeholder="Nombre" >

        </div>
      
        <div class="form-content">
          <label for="email">Correo</label>  
         <input type="email" id="email" name="email" placeholder="Correo" >

        </div>

    </div>

    <div class="form-group">
        <div class="form-content">
          <label for="Direction">Direccion</label>  
         <input type="text" id="direction" name="direction" placeholder="Dirección" >
        </div>
        <div class="form-content">
          <label for="phone">Teléfono</label>  
         <input type="tel" id="phone" name="phone" placeholder="Teléfono" >
        </div>
    </div>

    <label for="message">Mensaje</label>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>

    <input class="btn" type="submit" name="contact" value="Enviar Mensaje">
    

    </form>
    </div>

    <?php
     include("contacto.php")
    ?>

</body>
</html>