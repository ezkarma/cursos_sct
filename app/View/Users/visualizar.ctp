<h2>Lista de Empleados</h2>
<div style='width:70%;margin-left: auto;margin-right: auto'>
<?php

echo '<table>';
echo '<th>Nombre</th>';
echo '<th>Apellidos</th>';
echo '<th>Puesto</th>';
echo '<th>Telefono</th>';
echo '<th>Email</th>';

foreach($empleados as $empleado){
echo '<tr>';
echo '<td>'.$empleado['Empleado']['nombre'].'</td>';
echo  '<td>'.$empleado['Empleado']['apellidop'].' '.$empleado['Empleado']['apellidom'].'</td>';
echo  '<td>'.$empleado['Empleado']['puesto'].'</td>';
echo  '<td>'.$empleado['Empleado']['telefono'].'</td>';
echo  '<td>'.$empleado['Empleado']['email'].'</td>';
echo '</tr>';
}

echo '</table>';
?>
<div>
<div>
<?php
echo $this->Html->link('Regresar',array('controller' => 'Empleados', 'action' => 'index'));
?>
</div>




