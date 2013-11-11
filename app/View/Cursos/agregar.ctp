<h3>Agregar Curso</h3>
<div style='width:30%;margin-left: auto;margin-right: auto'>
<?php

echo $this->Form->create('Curso', array(
    'inputDefaults' => array(
      //  'label' => false
    )
));

echo $this->Form->input('id',array('label' => 'Clave del Curso','type' => 'textbox'));
//echo $this->Form->input('nombre', array('label' => 'Nombre de la Generacion'));

echo $this->Form->input('nombre');
echo $this->Form->input('duracion');
echo $this->Form->input('ponente');
echo $this->Form->input('cupo');
echo $this->Form->input('fecha');
echo $this->Form->input('horario');

echo $this->Form->end(__('Guardar')); 

echo $this->Html->link('Regresar',array('controller' => 'Cursos', 'action' => 'index'));
?>
<div>




