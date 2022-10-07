<?php
     include "functions.php";

     header('Content-Type: application/json');
     if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['dataRole'];
        $role=$_POST['nameRole'];
        $msg="";
        $code=200;
        
        $updateRole=updateRole($id, $role);
        if($updateRole){
           $msg="You have successfully updated this users role!";
           $code=200;
        }
    http_response_code($code);
    echo json_encode($msg);
    }
    else{
        header("location: 404Page.php");
        $code=404;
        $msg="Page not found.";
    }
    
?>