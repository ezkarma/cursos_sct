<?php 

App::uses('AppModel', 'Model');

class Puesto extends AppModel {

    public $name = 'Puesto';
	
	var $displayField = 'cargo';
	
	public $hasMany = array(
        'Empleado' => array(
            'className'    => 'Empleado',
            'foreignKey'    => 'puesto_id'
         )
	);
	
	
	
}

?>