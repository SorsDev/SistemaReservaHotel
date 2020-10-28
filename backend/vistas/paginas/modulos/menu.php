<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!--=====================================
    LOGO
    ======================================-->

    <a href="inicio" class="brand-link">
        <img src="vistas/img/plantilla/logoSorsHotel.png" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Hotel Sors</span>
    </a>


    <!--=====================================
    MENÚ
    ======================================-->

    <div class="sidebar">

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!--=================
                BOTÓN DE VER SITIO
                =====================-->

                <li class="nav-item">

                    <a href="<?php echo $ruta;?>" class="nav-link" target="_blank">

                        <i class="nav-icon fas fa-globe"></i>

                        <p>Ver sitio</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA INICIO
                =====================-->

                <li class="nav-item">

                    <a href="inicio" class="nav-link">

                        <i class="nav-icon fas fa-home"></i>

                        <p>Inicio</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA ADMIN
                =====================-->
                <?php if($admin["perfil"] == "Administrador"):?>
                <li class="nav-item">

                    <a href="administradores" class="nav-link">

                        <i class="nav-icon fas fa-users-cog"></i>

                        <p>Administradores</p>

                    </a>

                </li>

                <?php endif?>

                <!--=================
                BOTÓN PÁGINA BANNER
                =====================-->

                <li class="nav-item ">

                    <a href="banner" class="nav-link">

                        <i class="nav-icon fas fa-images"></i>

                        <p>Banner</p>

                    </a>

                </li>
                
                <!--=================
                BOTÓN PÁGINA PLANES
                =====================-->

                <li class="nav-item ">

                    <a href="planes" class="nav-link">

                        <i class="nav-icon fas fa-shopping-bag"></i>

                        <p>Planes</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA CATEGORIAS
                =====================-->

                <li class="nav-item ">

                    <a href="categorias" class="nav-link" >

                        <i class="nav-icon fas fa-list-ul"></i>

                        <p>Categorias</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA HABITACIONES
                =====================-->

                <li class="nav-item ">

                    <a href="habitaciones" class="nav-link">

                        <i class="nav-icon fas fa-bed"></i>

                        <p>Habitaciones</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA RESERVAS
                =====================-->
                <?php if($admin["perfil"] == "Administrador"):?>
                <li class="nav-item ">

                    <a href="reservas" class="nav-link" >

                        <i class="nav-icon fas fa-calendar-alt"></i>

                        <p>Reservas</p>

                    </a>

                </li>
                <?php endif?>

                <!--=================
                BOTÓN PÁGINA TESTIMONIOS
                =====================-->

                <li class="nav-item ">

                    <a href="testimonios" class="nav-link" >

                        <i class="nav-icon fas fa-user-check"></i>

                        <p>Testimonios</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA USUARIOS
                =====================-->
                <?php if($admin["perfil"] == "Administrador"):?>
                <li class="nav-item ">

                    <a href="usuarios" class="nav-link" >

                        <i class="nav-icon fas fa-users"></i>

                        <p>Usuarios</p>

                    </a>

                </li>
                <?php endif?>

                <!--=================
                BOTÓN PÁGINA RECORRIDO
                =====================-->

                <li class="nav-item ">

                    <a href="recorrido" class="nav-link" >

                        <i class="nav-icon fas fa-bus"></i>

                        <p>Recorrido</p>

                    </a>

                </li>

                <!--=================
                BOTÓN PÁGINA RESTAURANTE
                =====================-->

                <li class="nav-item">

                    <a href="restaurante" class="nav-link">

                        <i class="nav-icon fas fa-utensils"></i>

                        <p>Restaurante</p>

                    </a>

                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>