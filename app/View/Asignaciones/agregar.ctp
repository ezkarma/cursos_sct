<h3>Asignar Empleado a un Curso</h3>
<div style='width:80%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Form->create('Asignacion', array(
    'inputDefaults' => array(
      //  'label' => false
    )
));

echo $this->Form->input('id',array('label' => 'id asignacion','type' => 'textbox'));
//echo $this->Form->input('nombre', array('label' => 'Nombre de la Generacion'));

echo $this->Form->input('curso_id');
echo $this->Form->input('empleado_id');

//Empleados Import

echo '<table>';
echo '<th>Inscribir</th>';
echo '<th>Nombre</th>';
echo '<th>Apellidos</th>';
echo '<th>Puesto</th>';
echo '<th>Telefono</th>';
echo '<th>Email</th>';

foreach($emps as $empleado){
echo '<tr>';
echo '<td>'.$this->Form->input('test', array('type'=>'checkbox','value'=>1,'label'=>'', 'checked'=>'true')).'</td>';
echo '<td>'.$empleado['Empleado']['nombre'].'</td>';
echo  '<td>'.$empleado['Empleado']['apellidop'].' '.$empleado['Empleado']['apellidom'].'</td>';
echo  '<td>'.$empleado['Empleado']['puesto'].'</td>';
echo  '<td>'.$empleado['Empleado']['telefono'].'</td>';
echo  '<td>'.$empleado['Empleado']['email'].'</td>';
echo '</tr>';
}

echo '</table>';

//////////////

echo $this->Form->end(__('Guardar')); 

echo $this->Html->link('Regresar',array('controller' => 'Cursos', 'action' => 'index'));
?>
<div>




