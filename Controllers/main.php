<?php

Class Main extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');
        // echo  "<p> Nuevo controlador Main </p>";
    }

    function Saludo()
    {
        echo  "<p> Hola buenas noches </p>";
    }
}

?>