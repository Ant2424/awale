<?php
/* Config */
require('./config/config.php');

/* Classes */
require('./controller/controller.php');

/* Objet controller */
$controller = new controller();

/* Page */
require('./view/template/header.php');
	
$controller->render();

require('./view/template/footer.php');
?>