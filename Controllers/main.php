<?php

Class Main extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');

    }

    function Saludo()
    {
        echo  "<p> Hola buenas noches </p>";
    }
}

?>