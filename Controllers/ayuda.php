<?php

Class Ayuda extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->render('ayuda/index');
        // echo  "<p> No exite este objeto </p>";
    }
}

?>