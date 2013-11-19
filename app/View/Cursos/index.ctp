<h3>Cursos</h3>
<div style='width:30%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Html->link('Visualizar Cursos',array('controller' => 'Cursos', 'action' => 'visualizar'));
echo '<br>';
echo $this->Html->link('Agregar Curso',array('controller' => 'Cursos', 'action' => 'agregar'));
echo '<br>';

echo $this->Html->link('Asignar Empleados a un Curso',array('controller' => 'Asignaciones', 'action' => 'agregar'));


?>
<div>




