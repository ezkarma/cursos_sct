<div class="users form" style="width:30%;margin-right:30%;" >
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Por favor introduzca su numero de Empleado y RFC'); ?></legend>
        <?php echo $this->Form->input('username',array('label'=>'Numero de Empleado'));
        echo $this->Form->input('password',array('label'=>'RFC'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Ingresar')); ?>
</div>