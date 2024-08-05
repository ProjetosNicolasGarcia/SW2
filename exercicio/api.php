<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];
    echo json_encode($metodo);

    // $url = $_SERVER['REQUEST_URI'];

    // //echo json_encode($url);

    // $path = parse_url($url, PHP_URL_PATH);
    // $path = trim($path,'/');

    // //echo json_encode($path);

    // $pathparts = explode('/',$path);

    // echo json_encode($pathparts[1]);

?>