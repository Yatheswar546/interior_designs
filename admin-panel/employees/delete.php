<?php
session_start();
if($_SESSION['id'] == true){

    if(isset($_GET["id"])){
        $id = $_GET["id"];

        // Database Connection
        require_once('../config.php');

        if(!$db){
            die("Failure".mysqli_connect_erro());
        }
        else{
            // echo "Hurayy";
        }
        
        $sql = "DELETE FROM `employees` WHERE id=$id";
        $result = $db->query($sql);
    }
    header("location: index.php");
    exit;

}
else{
    header("Location: ../../index.php");
}
?>