<?php
require_once './controllers/fail.php';
class App{
    function __construct()
    {
        $url = isset($_GET['url'])?$_GET['url']:'main';
        $url = rtrim($url,'/');
        $url = explode('/',$url);
        $fileController = './controllers/'.$url[0].'.php';
        if(file_exists($fileController))
        {
            require_once $fileController;
            $controller = new $url[0];
            //$url[1] refers to the method of my class.
            //if $url[1] is not empty and g exists in my class.
            if((isset($url[1]))and(method_exists($controller,$url[1])))
            {
                if(isset($url[2]))
                    $controller->{$url[1]}($url[2]);
                else
                    $controller->{$url[1]}("");
            }
            else
            {
                $controller->render();
            }
        }
        else
        {
            $controller = new Fail();
        }
        
    }
}
?>