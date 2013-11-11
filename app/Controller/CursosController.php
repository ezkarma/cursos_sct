<?php

class CursosController extends AppController {
    
	function index(){
	
	}
	
	 function agregar(){
	 
	//$this->set('carreras', $this->Generacion->Carrera->find('list'));
 	
		
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