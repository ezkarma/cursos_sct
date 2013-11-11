<h2>Cursos</h2>
<div style='width:70%;margin-left: auto;margin-right: auto'>
<?php

echo '<table>';
echo '<th>Nombre</th>';
echo '<th>Duracion</th>';
echo '<th>Ponente</th>';
echo '<th>Cupo</th>';
echo '<th>Fecha</th>';
echo '<th>Horario</th>';
foreach($cursos as $curso){
echo '<tr>';
echo '<td>'.$curso['Curso']['nombre'].'</td>';
echo  '<td>'.$curso['Curso']['duracion'].'</td>';
echo  '<td>'.$curso['Curso']['ponente'].'</td>';
echo  '<td>'.$curso['Curso']['cupo'].'</td>';
echo  '<td>'.$curso['Curso']['fecha'].'</td>';
echo  '<td>'.$curso['Curso']['horario'].'</td>';
echo '</tr>';
}


?>
<div>
<div>
<?php
echo $this->Html->link('Regresar',array('controller' => 'Cursos', 'action' => 'index'));
?>
</div>




