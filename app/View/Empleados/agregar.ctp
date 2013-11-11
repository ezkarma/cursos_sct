<h2>Agregar Empleado</h2>
<div style='width:30%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Form->create('Empleado', array(
    'inputDefaults' => array(
    
    )
));

echo $this->Form->input('id',array('label' => 'Clave del Empleado','type' => 'textbox'));
//echo $this->Form->input('nombre', array('label' => 'Nombre de la Generacion'));

echo $this->Form->input('nombre');
echo $this->Form->input('apellidop');
echo $this->Form->input('apellidom');
echo $this->Form->input('direccion');
echo $this->Form->input('telefono');
echo $this->Form->input('email');
echo $this->Form->input('sexo');
echo $this->Form->input('puesto');

echo $this->Form->end(__('Guardar')); 

?>

<?php
echo $this->Html->link('Regresar',array('controller' => 'Empleados', 'action' => 'index'));
?>

<div>




