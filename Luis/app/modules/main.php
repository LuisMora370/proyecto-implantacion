<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Página principal</title>

    <!--styles-->
    <link rel="stylesheet" href="../components/styles/general.css">
    <link rel="stylesheet" href="../components/styles/mainPage/main.css">
    <link rel="stylesheet" href="../components/styles/mainPage/dashboard.css">

</head>
<body>
    <aside>
        <div class="logo-container">
            <img src="../resources/img/todo p color.png" alt="" srcset="">
        </div>
        <nav class="nav-bar">
            <ul class="list-element">
            <ul class="list-element">
                <li class="list-item"><a href="./production/dashboard.php" class="link">Dashboard</a></li>
                <li class="list-item">Inventario
                    <ul class="sublist">
                        <li class="sublist-item"><a href="./production/inventory/stock.php" class="link">Stock</a></li>
                        <li class="sublist-item"><a href="./production/inventory/movements.php" class="link">Movimientos</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="content">
        <header>
            <div class="control-center">
                <div class="user">
                    <img src="../resources/ico/User.png" alt="" srcset="">
                    <div class="userInfo">
                        <label for="" class="tag Username">Nombre de usuario</label>
                        <div class="userFunctions">
                            <p>ID: </p><label for="" class="id">12345678900</label>
                        </div>
                        <button type="submit" class="exit">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-container">
            <iframe src="" frameborder="0" id="content"></iframe>
        </div>
    </div>

    <script src="../components/js/interactions/dynamicLoad.js"></script>
</body>
</html>
