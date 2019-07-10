<?php
    // $directorio = $_SERVER['DOCUMENT_ROOT'].'/eva/view/core/html/';
    $directorio = 'core/html/';

    $scanned_directory = array_diff(scandir($directorio), array('..', '.','*.php'));

    foreach ($scanned_directory as $key => $value) {
        $variable_global = 'ROOT_HTML_'.mb_strtoupper($value,'UTF-8');
        define($variable_global, $directorio.$value.'/' );
        // echo $variable_global;
    }
?>