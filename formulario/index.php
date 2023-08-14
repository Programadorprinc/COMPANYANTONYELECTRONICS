<!DOCTYPE html>
<html lang="es  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilioos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <div class="Container">

    <div class="font-content">
        <h1 id="title">Registro</h1>
        <form>
            <div class="input-group">
                <div class="input-field" id="nameInput">
                    <i class="fa-solid fa-user" ></i>
                    <input type="text" placeholder="Nombre"></input>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-envelope" ></i>
                    <input type="Email" placeholder="Correo"></input>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock" ></i>
                    <input type="password" placeholder="Contraseña"></input>
                </div>
            <p>Regresar al Inicio<a href="file:///C:/Users/acosa/Desktop/pagi/index.html#">Clikc aqui</a></p>

            </div>
            <div class="btn-field">
                <button id="signUp" type="button">Registro</button>
                <button id="signIn" type="button" class="disable">Login</button>

            </div>

        </form>


    </div>



  </div>
    
    <script src="script.js"></script>
</body>
</html>