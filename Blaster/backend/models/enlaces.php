<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "caja" ||
			$enlaces == "footer" ||
			$enlaces == "single" ||
			$enlaces == "login" ||
			$enlaces == "signup" ||
			$enlaces == "cerrarSesion" ||
			$enlaces == "administracion" ||
			$enlaces == "home"){

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "index"){
			$module = "views/modules/home.php";
		}else if ($enlaces == "accesoNoPermitido") {
			$module = "views/modules/accesoNoPermitido.html";
		}else{
			$module = "views/modules/404.html";
		}

		return $module;

	}


}