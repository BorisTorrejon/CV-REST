<?php
class Cv
{
    const dirCvsData ="./models/cvs.json";
    function __construct()
    {
        
    }
    function render()
    {
        echo "CV controller";
    }
    function get($id)
    {
        $cvsData = file_get_contents(Cv::dirCvsData);
        if ($id<>"")
            {
                $cvs = json_decode($cvsData,true);
                foreach ($cvs as $cv){
                    if ($cv['id']==$id)
                      echo json_encode($cv);
                }
            }
        else
        {
            echo $cvsData;
        }           
    }
    function post()
    {
        echo "esto es un post";
    }
    function put($id)
    {
        $_PUT=json_decode(file_get_contents('php://input'),true);
        
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