<div class="content-wrapper" style="min-height: 1364.81px;">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Habitaciones</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Habitaciones</a></li>

                    </ol>

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <!--=====================================
          LISTADO DE HABITACIONES
          ======================================-->

                <div class="col-xl-4">

                    <div class="card card-primary card-outline">

                        <div class="card-header pl-2 pl-sm-3">

                            <a href="habitaciones" class="btn btn-primary btn-sm">Crear Habitación</a>

                            <div class="card-tools">

                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">

                                    <i class="fas fa-minus"></i>

                                </button>

                            </div>

                        </div>

                        <div class="card-body">

                            <table class="table table-bordered table-striped dt-responsive tablaHabitaciones"
                                width="100%">

                                <thead>

                                    <tr>

                                        <th style="width:100px">#</th>
                                        <th>Categoría</th>
                                        <th>Habitación</th>
                                        <th style="width:100px">Acciones</th>

                                    </tr>

                                </thead>

                                <tbody>



                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <!--=====================================
                  LISTADO DE HABITACIONES
                  ======================================-->

                <?php

                  if(isset($_GET["id_h"])){

                    $habitacion = ControladorHabitaciones::ctrMostrarHabitaciones($_GET["id_h"]);
                    //echo print_r($habitacion);

                  }else{
                    $habitacion = null;
                  }

                ?>

                <div class="col-xl-8">

                    <div class="card card-primary card-outline">

                        <div class="card-header">

                        <?php if($habitacion != null){

                           echo '<h5 class="card-title">'.$habitacion["tipo"].' / '.$habitacion["estilo"].'</h5>';

                          }else{

                            echo '<h5 class="card-title"> / </h5>';
                          }

                        ?>


                            <div class="preload"></div>

                            <div class="card-tools">

                                <button type="button" class="btn btn-info  btn-sm guardarHabitacion">
                                    <i class="fas fa-save"></i>
                                </button>

                                <?php

                                    if($habitacion != null){

                                      echo '<button type="button" class="btn btn-danger btn-sm eliminarHabitacion">
                                          <i class="fas fa-trash"></i>
                                      </button>';

                                    }

                                ?>

                            </div>

                        </div>

                        <div class="card-body">

                        <input type="hidden" class="idHabitacion" value="<?php echo $habitacion["id_h"]?>">

                            <div class="d-flex flex-colum flex-md-row justify-content-start mb-3">

                                <div class="form-inline mx-3 px-3 border border-left-0 border-top-0 border-bottom-0">

                                    <p class="mr-sm-2">Elije la Categoría:</p>

                                    <?php 
                                    
                                      if($habitacion != null){

                                        echo '<select class="form-control seleccionarTipo" readonly>
                                        
                                          <option value="'.$habitacion["id"].','.$habitacion["tipo"].'">'.$habitacion["tipo"].'</option>
                                        
                                        </select>';

                                      }else{

                                        echo '<select class="form-control seleccionarTipo">

                                        <option value="">Seleccione</option>';

                                        $categorias = ControladorCategorias::ctrMostrarCategorias(null,null);

                                        foreach ($categorias as $key => $value) {
                                          
                                          echo '<option value="'.$value["id"].','.$value["tipo"].'">'.$value["tipo"].'</option>'; 
                                        }

                                        echo '</select>';    

                                      }
                                    
                                    
                                    ?>

                                </div>

                                <div class="form-inline">

                                    <p class="mr-sm-2">Escriba el nombre de la habitación:</p>


                                    <?php 
                                    
                                      if($habitacion != null){

                                        echo '<input type="text" class="form-control seleccionarEstilo" value="'.$habitacion["estilo"].'" readonly>';

                                      }else{

                                        echo '<input type="text" class="form-control seleccionarEstilo">';
                                      }
                                    
                                    ?>

                                </div>

                            </div>

                            <!-- Galeria-->

                            <div class="card rounded-lg card-secondary card-outline">

                                <div class="card-header pl-2 pl-sm-3">

                                    <h5>Galería:</h5>

                                </div>

                                <div class="card-body">

                                    <ul class="row p-0 vistaGaleria">

                                    <?php  
                                    
                                      if($habitacion != null){

                                        $galeria = json_decode($habitacion["galeria"], true);

                                        foreach ($galeria as $key => $value) {
                                          
                                          echo '<li class="col-12 col-md-6 col-lg-3 card px-3 rounded-0 shadow-none">

                                          <img class="card-img-top" src="'.$value.'">

                                          <div class="card-img-overlay p-0 pr-3">

                                              <button class="btn btn-danger btn-sm float-right shadow-sm quitarFotoAntigua" temporal="'.$value.'">

                                                  <i class="fas fa-times"></i>

                                              </button>

                                          </div>

                                      </li>';
                                        }

                                      }
                                    
                                    ?>
                                    </ul>

                                </div>

                                <input type="hidden" class="inputNuevaGaleria">

                                <input type="hidden" class="inputAntiguaGaleria" value="<?php echo implode(",", $galeria); ?>">

                                <div class="card-footer">

                                    <input type="file" multiple id="galeria" class="d-none">

                                    <label for="galeria"
                                        class="text-dark text-center py-5 border rounded bg-white w-100 subirGaleria">

                                        Haz clic aquí o arrastra las imágenes <br>
                                        <span class="help-block small">Dimensiones: 940px * 480px | Peso Max. 2MB |
                                            Formato: JPG o PNG</span>

                                    </label>

                                </div>

                            </div>

                            <!-- Video y 360°-->

                            <div class="row">

                                <div class="col-12 col-xl-6">

                                    <div class="card rounded-lg card-secondary card-outline">

                                        <div class="card-header pl-2 pl-sm-3">

                                            <h5>Video:</h5>

                                        </div>

                                        <div class="card-body vistaVideo">

                                        <?php if($habitacion != null): ?>
                                        
                                          <iframe width="100%" height="320" src="https://www.youtube.com/embed/<?php echo $habitacion["video"]; ?>" frameborder="0"
                                                allow="accelrometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        
                                        <?php endif ?>

                                        </div>

                                        <div class="card-footer">

                                            <div class="input-group">

                                                <div class="input-group-prepend">

                                                    <span class="p-2 bg-secondary rounded-left">https://www.youtube.com/embed/</span>

                                                </div>

                                                <?php if ($habitacion != null): ?>
                        
                                                  <input type="text" class="form-control agregarVideo" placeholder="Agregue el código del video" value="<?php echo $habitacion["video"]; ?>">

                                                <?php else: ?>

                                                  <input type="text" class="form-control agregarVideo" placeholder="Agregue el código del vi­deo">

                                                <?php endif ?>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-xl-6">

                                    <div class="card rounded-lg card-secondary card-outline">

                                        <div class="card-header pl-2 pl-sm-3">

                                            <h5>Recorrido Virtual:</h5>

                                        </div>

                                        <div class="card-body ver360">


                                            <?php if($habitacion != null): ?>

                                            <div class="pano 360Antiguo" back="<?php echo $habitacion["recorrido_virtual"];?>">

                                                <div class="controls">

                                                    <a href="#" class="left">&laquo;</a>
                                                    <a href="#" class="right">&raquo;</a>

                                                </div>

                                            </div>

                                            <?php endif ?>

                                        </div>

                                        <div class="card-footer">

                                        <input type="hidden" class="antiguoRecorrido" value="<?php echo $habitacion["recorrido_virtual"];?>">

                                            <div class="custom-file">

                                                <input type="file" class="custom-file-input" id="imagen360">
                                                <label class="custom-file-label" for="imagen360">Agregar imagen
                                                    360°</label>

                                            </div>

                                        </div>

                                    </div>


                                </div>

                            </div>

                            <!-- Descripción-->

                            <div class="card rounded-lg card-secondary card-outline">

                                <div class="card-header pl-2 pl-sm-3">

                                    <h5>Descripción:</h5>

                                </div>

                                <div class="card-body">

                                    <textarea name="" id="descripcionHabitacion" style="width:100%">
                                    
                                    <?php

                                      if($habitacion != null){

                                        echo $habitacion["descripcion_h"];
                                      }

                                    ?>
                                    
                                    
                                    </textarea>

                                </div>

                            </div>


                        </div>

                        <div class="card-footer">

                        <div class ="preload"></div>

                            <div class="card-tools float-right">

                                <button type="button" class="btn btn-info  btn-sm guardarHabitacion">
                                    <i class="fas fa-save"></i>
                                </button>

                                <?php

                                    if($habitacion != null){

                                      echo '<button type="button" class="btn btn-danger btn-sm eliminarHabitacion">
                                          <i class="fas fa-trash"></i>
                                      </button>';

                                    }

                                ?>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

</div>

</div>

</section>
<!-- /.content -->

</div>