<?php
    error_reporting(0);

    date_default_timezone_set('America/Lima');

    define('ROOT_PADRE', realpath(dirname(__FILE__)));
    define('ROOT_CONTROLADOR', ROOT_PADRE.DIRECTORY_SEPARATOR .'controller');
    define('ROOT_MODELO', ROOT_PADRE.DIRECTORY_SEPARATOR .'model');
    define('ROOT_CLASS', ROOT_PADRE.DIRECTORY_SEPARATOR .'core'.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR);
    define('ROOT_IMG', ROOT_PADRE.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR);
    define('ROOT_EXCEL', ROOT_PADRE.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'PHPExcel'.DIRECTORY_SEPARATOR);
    define('ROOT_REPORTE', ROOT_PADRE.DIRECTORY_SEPARATOR.'report'.DIRECTORY_SEPARATOR);
    define('ROOT_DOC', ROOT_PADRE.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR);

    session_start();

    //Incluir todos los modelos
    foreach(glob(ROOT_MODELO."\*.php") as $file){
        require_once $file;
    }

    foreach(glob(ROOT_CONTROLADOR."\*.php") as $file){
        require_once $file;
    }

    foreach(glob(ROOT_CLASS."\*.php") as $file){
        require_once $file;
    }

    ini_set('max_execution_time', 7200);
?>