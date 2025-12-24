<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Ingresar</title>

    <!--Styles-->
    <link rel="stylesheet" href="./components/styles/general.css">
    <link rel="stylesheet" href="./components/styles/formularies/login.css">
</head>
<body>
    <div class="hero">
        <div class="base"></div>
        <video src="./resources/vid/7677185-hd_1920_1080_25fps.mp4" autoplay loop muted class="banner-vid">This video can’t be played by your navigator</video>
    </div>

    <div class="content-form">
<form action="components/app/controllers/AuthController.php" method="post" class="logForm">





            <h1>Iniciar sesión</h1>
            <input required placeholder="Usuario" type="text" class="infPlace" name="username" id="name">
            <input required placeholder="Contraseña" type="password" class="infPlace" name="password" id="pass">
            <button type="submit">Entrar</button>
        </form>
    </div>
    <div class="cover"></div>
</body>
</html>
