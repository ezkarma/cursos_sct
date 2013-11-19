<?php 
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('AppModel', 'Model');

class User extends AppModel {

    public $name = 'User';
	
	var $displayField = 'nombre';
	
	public $hasMany = array(
        'Asignacion' => array(
            'className'    => 'Asignacion',
            'foreignKey'    => 'empleado_id'
         )
	);
	
	public $belongsTo = array(
        'Area' => array(
            'className' => 'Area',
            'foreignKey' => 'area_id'
        ),
		 'Puesto' => array(
            'className' => 'Puesto',
            'foreignKey' => 'puesto_id'
        )
    );
	
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
    }
    return true;
	}
	
}

?>