<?php
class Cv
{
    function __construct()
    {
        
    }
    function render()
    {
        echo "CV controller";
    }
    function get($id)
    {
        if ($id<>"")
            echo "mensaje".$id;
        else
            echo "mensajes";            
    }
    function post()
    {
        echo "esto es un post";
    }
    function put($id)
    {
        if ($id<>"")
            echo "esto es un put id= ".$id;
    }
    function delete($id)
    {
        if ($id<>"")
            echo "esto es un delete id= ".$id;
    }
}
?>