<?php

// Saber si estamos trabajando de forma local o remota
if(!defined('IS_LOCAL')) define('IS_LOCAL'   , in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));


// Ruta base de nuestro proyecto
if(!defined('BACKPATH')) define('BACKPATH'   , IS_LOCAL ? '../' : '../');
if(!defined('BASEPATH')) define('BASEPATH'   , IS_LOCAL ? '../pruebas/' : '../pruebas/');
if(!defined('APPPATH')) define('APPPATH'   , IS_LOCAL ? '../pruebas/app/' : '../pruebas/app/');	
