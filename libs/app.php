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
        }
        else
        {
            $controller = new Fail();
        };
        var_dump ($fileController);
        
    }
}
?>