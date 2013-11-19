<?php

class UsersController extends AppController {
    
	function index(){
	
	}
	
	public function beforeFilter()
	{	
		parent::beforeFilter();
	$this->Auth->allow(array('login'));
	}  
	
	public function perfil(){
	
		$this->User->recursive = 0;
        $this->set('users', $this->paginate());
			
		$this->set('usuarios', $this->User->find('all'));
		
		$this->set('usuario_registrado', $this->Auth->user());
		
		$usuario= $this->Auth->user();
		
		/*
		if ($usuario['role']=='jefe') {
			return $this->redirect(array('controller' => 'jefes', 'action' => 'index'));
		}
		
		else if ($usuario['role']=='admin') {
		$this->set('admin', $this->Auth->user());
			return $this->redirect(array('controller' => 'admins', 'action' => 'index'));
		}
		
		else if ($usuario['role']=='alumno') {
		$this->set('admin', $this->Auth->user());
			return $this->redirect(array('controller' => 'alumnos', 'action' => 'index'));
		}
		*/
	
	}
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect(array('controller' => 'users', 'action' => 'perfil'));
			}
		$this->Session->setFlash(__('El numero de Empleado y RFC no coinciden, favor de intentar nuevamente'));
		}
	}

	public function logout() {
    return $this->redirect($this->Auth->logout());
	}
	
	 function agregar(){

 	$this->set('areas', $this->User->Area->find('list'));
	$this->set('puestos', $this->User->Puesto->find('list'));
		
		if($this->request->is('post')){
			
		if ($this->User->save($this->request->data)) {
						
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