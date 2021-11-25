<?php

Class miError extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->render('error/index');
        // echo  "<p> No exite este objeto </p>";
    }
}

?>