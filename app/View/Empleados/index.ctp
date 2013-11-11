<h3>Empleados</h3>
<div style='width:30%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Html->link('Ver Lista de Empledos',array('controller' => 'Empleados', 'action' => 'visualizar'));
echo '<br>';
echo $this->Html->link('Agregar Empleado',array('controller' => 'Empleados', 'action' => 'agregar'));


?>
<div>




