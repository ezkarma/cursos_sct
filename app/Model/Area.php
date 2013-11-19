<?php 

App::uses('AppModel', 'Model');

class Area extends AppModel {

    public $name = 'Area';
	
	var $displayField = 'nombre';
	
	public $hasMany = array(
        'Empleado' => array(
            'className'    => 'Empleado',
            'foreignKey'    => 'area_id'
         )
	);
	
	
	
}

?>