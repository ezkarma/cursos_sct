<?php 

App::uses('AppModel', 'Model');

class Asignacion extends AppModel {

    public $name = 'Asignacion';
	
	public $belongsTo = array(
        'Curso' => array(
            'className' => 'Curso',
            'foreignKey' => 'curso_id'
        ),
		 'Empleado' => array(
            'className' => 'Empleado',
            'foreignKey' => 'empleado_id'
        )
    );
	
	
}

?>