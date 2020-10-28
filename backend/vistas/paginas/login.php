<?php

echo '<link rel="stylesheet" type="text/css" href="vistas/css/style.css">';   

?>

<body>

    <img class="wave" src="vistas/img/plantilla/wave.png">

    <div class="container">

        <div class="img">

                <img src="vistas/img/plantilla/logo4.svg">
        </div>

        <div class="login-content">

            <form method="post">
                <a href="<?php echo $ruta?>"">
                <img src="vistas/img/plantilla/logox2.png">
                </a>
                <h2 class="title">Bienvenido</h2>

                <div class="input-div one">

                    <div class="i">

                        <i class="fas fa-user"></i>

                    </div>

                    <div class="div">

                        <input type="text" placeholder="Usuario" class="input" name="ingresoUsuario">

                    </div>
                    
                </div>

                <div class="input-div pass">

                    <div class="i">

                        <i class="fas fa-lock"></i>

                    </div>

                    <div class="div">

                        <input type="password" placeholder="Contraseña" class="input" name="ingresoPassword">

                    </div>

                </div>

                <input type="submit" class="btn" value="Ingresar">

                <?php

                    $ingreso = new ControladorAdministradores();
                    $ingreso -> ctrIngresoAdministradores();

                ?>

            </form>

        </div>

        

    </div>

</body>

