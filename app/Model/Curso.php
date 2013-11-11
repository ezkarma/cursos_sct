<?php 

App::uses('AppModel', 'Model');

class Curso extends AppModel {

    public $name = 'Curso';
	
	var $displayField = 'nombre';
	
	public $hasMany = array(
        'Asignacion' => array(
            'className'    => 'Asignacion',
            'foreignKey'    => 'curso_id'
         )
    );
}

?>