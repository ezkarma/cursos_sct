<h3>Asignar Empleado a un Curso</h3>
<div style='width:80%;margin-left: auto;margin-right: auto'>
¿Esta realmente seguro que se desea inscribir en el curso?

<?php
echo $curso_id;
echo $this->Form->create('Asignacion', array(
    'inputDefaults' => array(
    )
));

echo $this->Form->input('id',array('label' => 'Clave del Curso','type' => 'textbox'));
//echo $this->Form->input('nombre', array('label' => 'Nombre de la Generacion'));

echo $this->Form->input('user_id',array('type'=>'textbox','value'=>$usuario_registrado['id']));
echo $this->Form->input('curso_id',array('type'=>'textbox','value'=>$curso_id));

echo $this->Form->end(__('Inscribirse')); 

echo $this->Html->link('Regresar',array('controller' => 'Cursos', 'action' => 'index'));
?>
<div>




