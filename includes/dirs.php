<?php 
$directorio = '/PWD2023/MI_GRUPO/EntregaPD/'; // Escribir el directorio donde se encuentra el proyecto dentro del servidor
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].$directorio);
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].$directorio );
define('INCLUDES_PATH', ROOT_PATH.'includes/');
?>