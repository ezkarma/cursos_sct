<?php

class AsignacionesController extends AppController {
    
	function index(){

	}
	
	 function agregar(){
	 
	//$this->set('carreras', $this->Generacion->Carrera->find('list'));
 	$this->set('cursos', $this->Asignacion->Curso->find('list'));
	$this->set('empleados', $this->Asignacion->Empleado->find('list'));
 	
	$this->set('emps', $this->Asignacion->Empleado->find('all'));
		
		if($this->request->is('post')){
			
		if ($this->Curso->save($this->request->data)) {
						
				$this->Session->setFlash('Se ha Guardado el Curso Exitosamente');
				$this->redirect(array('action'=>'agregar'));
			}
		
		}
	}
	
	 function visualizar(){
	 
	$this->set('cursos', $this->Curso->find('all'));
 	
		
	}
}

?>