<?php 
class controllerCoches extends coches {


	public function do_single_pilotos(){

		$this->id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT );

		if (! $this->id) {
		
			return false;
		}

		if (! $this->piloto_by_id($this->id)) {

			return false;

		}else{

			return true;
		}



	}

	public function do_single_escuderias(){

		$this->id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT );

		if (! $this->id) {
		
			return false;
		}

		if (! $this->escuderia_by_id($this->id)) {

			return false;

		}else{

			return true;
		}



	}
	public function do_single_circuitos(){

		$this->id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT );

		if (! $this->id) {
		
			return false;
		}

		if (! $this->circuito_by_id($this->id)) {

			return false;

		}else{

			return true;
		}



	}

	public function do_single_noticias(){

		$this->id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT );

		if (! $this->id) {
		
			return false;
		}

		if (! $this->post_by_id($this->id)) {

			return false;

		}else{

			return true;
		}



	}		


}



 ?>