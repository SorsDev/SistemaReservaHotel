<?php

require_once "../controladores/testimonios.controlador.php";
require_once "../modelos/testimonios.modelo.php";

class TablaTestimonios{

	/*=============================================
	Tabla Testimonios
	=============================================*/ 

	public function mostrarTabla(){

		$testimonios = ControladorTestimonios::ctrMostrarTestimonios(null, null);

		if(count($testimonios)== 0){

 			$datosJson = '{"data": []}';

			echo $datosJson;

			return;

 		}

 		$datosJson = '{

	 	"data": [ ';

	 	foreach ($testimonios as $key => $value) {

	 		$reservaUsuario = ControladorTestimonios::ctrMostrarTestimoniosInnerJoin("id_testimonio", $value["id_testimonio"]);

			/*=============================================
			ESTADO
			=============================================*/	

			if($value["aprobado"] == 0){

				$estado = "<button class='btn btn-dark btn-sm btnAprobar' estadoTestimonio='1' idTestimonio='".$value["id_testimonio"]."'>Aprobar</button>";

			}else{

				$estado = "<button class='btn btn-info btn-sm btnAprobar' estadoTestimonio='0' idTestimonio='".$value["id_testimonio"]."'>Aprobado</button>";
			}
			
			$datosJson.= '[
							
						"'.($key+1).'",
						"'.$reservaUsuario["codigo_reserva"].'",
						"'.$reservaUsuario["nombre"].'",
						"'.$reservaUsuario["descripcion_reserva"].'",
						"'.$value["testimonio"].'",
						"'.$estado.'",
						"'.$value["fecha"].'"
					
				],';

		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson.=  ']

		}';

		echo $datosJson;

	}

}

/*=============================================
Tabla Testimonios
=============================================*/ 

$tabla = new TablaTestimonios();
$tabla -> mostrarTabla();

