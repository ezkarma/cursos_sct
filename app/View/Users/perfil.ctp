<h2>Bienvenido <?php echo $usuario_registrado['nombre']; ?></h2>

<br>

<h3>Usted tiene un total de <?php echo $usuario_registrado['horas_totales']; ?> horas.</h3>

<?php 
$horas_cursos = 400;
$horas_restantes = $horas_cursos-$usuario_registrado['horas_totales'];
?>

<br>
<h4>
<?php 
	if ($horas_restantes >0) { 
	echo 'Aun le restan '.$horas_restantes.' horas por cumplir';
	}
	
	else {
	echo 'Usted a cumplido con todas sus horas';
	} 
?>
</h4>