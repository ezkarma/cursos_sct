<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<style>

#header { 
	min-width: 800px; 
	height: 150px; 
} 
#nav {  
	width: 100%; 
	background-color: #333; 
	font-family:"Century Gothic", "HelveticaNeueLT Pro 45 Lt", sans-serif; 
	float: left; 
}
#nav li { 
	list-style: none; 
	float: left; 
	width: 120px; 
	height: 30px; 
	line-height: 30px; 
	text-align: center;
} 
#nav li a { 
	color: white; 
	text-decoration: none; 
	display: block; 
} 
#nav li a:hover { 
	background-color: #066; 
} 
#home .home a, #home .home a:hover,
#tutorials .tutorials a, #tutorials .tutorials a:hover,
#about .about a, #about .about a:hover,
#contact .contact a, #contact .contact a:hover,
#news .news a, #news .news a:hover {
 	background-color: #FFF; 
	color: #000;
	cursor: default;  
} 		
#nav li ul { 
	position: absolute;  
	display: none; 
} 
#nav li:hover ul { 
	display: block; 
} 
#nav li ul li { 
	float: none; 
	display: inline; 
}
#nav li ul li a { 
	width: 118px; 
	position: relative; 
	border-left: 1px solid black; 
	border-right: 1px solid black; 
	border-bottom: 1px solid black; 
	background: #333; 
	color: #fff; 
}
#nav li ul li a:hover { 
	background: #066; 
	color: #000; 
}
</style>
<head>

<h3><font color='white'>Sistema de Gestion de Cursos para la SCT</font></h3>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
 <ul id="nav">
      <li class="home"><a href="/">Home</a></li>
	  
	 <?php
	if ($this->Session->read('Auth.User')){
	echo '<li class="tutorials"><a href="/users/perfil">Mi perfil</a>  </li>
			<li class="tutorials"><a href="/cursos">Cursos</a>  </li>
			<li class="about"><a href="/users">Empleados</a></li>
			<li class="news"><a href="#">Capacitadores</a></li>
			<li class="about"><a href="/users/logout">Salir</a></li>';
	}
	else{
	echo '<li class="about"><a href="/users/login">Ingresar</a></li>';
	}
	?>
        
    </ul><!-- nav --> 

</head>
<body>
	<div id="container">
	

			<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	
	
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
