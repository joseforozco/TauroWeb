<?php
      
class App
{
    function __construct() {
   
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/',$url);
   
    $archivoControler = 'Controllers/'.$url[0].'.php';

    if(file_exists($archivoControler))
    {
        require_once $archivoControler;
        $controller = new $url[0];

        if(isset($url[1])){
            $controller->{$url[1]}();
        }

    }else {
        require_once 'Controllers/error.php';
        $controller = new miError();
    }
}
}

?>