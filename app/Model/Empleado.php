<?php 

App::uses('AppModel', 'Model');

class Empleado extends AppModel {

    public $name = 'Empleado';
	
		var $displayField = 'nombre';
	
	public $hasMany = array(
        'Asignacion' => array(
            'className'    => 'Asignacion',
            'foreignKey'    => 'empleado_id'
         )
    );
	
}

?>