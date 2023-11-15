<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
            $sql="delete from bookappointment where id=$id";

        $conn->query($sql);
    }
    header('location:http://localhost/bookappointment/index.php');
    exit;
?>