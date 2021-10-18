<?php
class Fail extends Controller
{
    function __construct()
    {
        parent::__construct();  
        $this->view->message = "Ah ocurrido un error fatal";
        $this->view->render('fail/index'); 
    }
}
?>