<?php 
require_once "db/con_redo.php";

if(!$_GET["id"]){
    include "includes/errormessage.php";
    header("Location: viewrecords.php");
} else{
    $id = $_GET["id"];
    $result= $crud->deleteAttendees($id);
    if($result){
        header("Location: viewrecords.php");
      } else{
        include "includes/errormessage.php";
      }
}
    
?>