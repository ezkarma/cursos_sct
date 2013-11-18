<?php

class EmpleadosController extends AppController {
    
	function index(){
	
	}
	
	 function agregar(){
	 
	//$this->set('carreras', $this->Generacion->Carrera->find('list'));
 	
		
		if($this->request->is('post')){
			
		if ($this->Empleado->save($this->request->data)) {
						
				$this->Session->setFlash('Se ha Guardado el Empleado Exitosamente');
				$this->redirect(array('action'=>'agregar'));
			}
		
		}
	}
	
	 function visualizar(){
		$this->set('empleados', $this->Empleado->find('all'));
 	}
}

?>