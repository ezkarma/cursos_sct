<?php 

App::uses('AppModel', 'Model');

class Asignacion extends AppModel {

    public $name = 'Asignacion';
	
	public $belongsTo = array(
        'Curso' => array(
            'className' => 'Curso',
            'foreignKey' => 'curso_id'
        ),
		 'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );
	
	
}

?>