<?php

class AsignacionesController extends AppController {

   
	function index(){

	}
	
	 function agregar($id){
	 
	 $this->set('curso_id', $id);
	$this->set('usuario_registrado', $this->Auth->user());
	
	if ($this->Asignacion->save($this->request->data)) {
						
				$this->Session->setFlash('Se ha inscrito al Curso Exitosamente');
				$this->redirect(array('controller'=>'Cursos','action'=>'visualizar'));
			}
		
	
	}
	
	 function visualizar(){
		$this->set('cursos', $this->Curso->find('all'));
 	}
	
	function inscrito(){
	
		$inscrito = $this->Asignacion->find('all', array('conditions' => array('Asignacion.user_id' => $this->Session->read('Auth.User.id'))));
		
		//$inscrito = $this->Asignacion->Curso->find('all', array('conditions' => array('Curso.id' =>1)));
		//$inscrito = $this->Asignacion->Curso->find('all', array('conditions' => array('Curso.id' =>1)));
		
		//$inscrito = $this->Asignacion->Curso->find('list');
		
		
		
		$this->set('cursos_inscritos', $inscrito);
	}
}

?>