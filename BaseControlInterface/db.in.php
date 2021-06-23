<?php

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "robot_arm_control";

$conn = mysqli_connect($dbservername , $dbUsername , $dbPassword , $dbName);

  
if(isset($_POST['forward'])){
    $sql = "INSERT INTO `base_panel _control` (`id_base_pos`, `direction`) VALUES (NULL, 'f');";
    
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        echo '<script type = text/javascript>alert("data has been added")</script>';
        header('Location: forward.php');
        exit;
     }
    else{
        echo '<script type = text/javascript>alert("data cannot be added")</script>';	
    }    
    
}
elseif(isset($_POST['left'])){
    $sql = "INSERT INTO `base_panel _control` (`id_base_pos`, `direction`) VALUES (NULL, 'l');";
    
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        echo '<script type = text/javascript>alert("data has been added")</script>';
        header('Location: left.php');
        exit;
     }
    else{
        echo '<script type = text/javascript>alert("data cannot be added")</script>';	
    } 
}
elseif(isset($_POST['stop'])){
    $sql = "INSERT INTO `base_panel _control` (`id_base_pos`, `direction`) VALUES (NULL, 's');";
    
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        echo '<script type = text/javascript>alert("data has been added")</script>';
        header('Location: stop.php');
        exit;
     }
    else{
        echo '<script type = text/javascript>alert("data cannot be added")</script>';	
    } 
}
elseif(isset($_POST['right'])){
    $sql = "INSERT INTO `base_panel _control` (`id_base_pos`, `direction`) VALUES (NULL, 'r');";
    
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        echo '<script type = text/javascript>alert("data has been added")</script>';
        header('Location: right.php');
        exit;
     }
    else{
        echo '<script type = text/javascript>alert("data cannot be added")</script>';	
    } 
}
elseif(isset($_POST['backward'])){
     $sql = "INSERT INTO `base_panel _control` (`id_base_pos`, `direction`) VALUES (NULL, 'b');";
    
    $query_run = mysqli_query($conn, $sql);
    if($query_run){
        echo '<script type = text/javascript>alert("data has been added")</script>';
        header('Location: backward.php');
        exit;
     }
    else{
        echo '<script type = text/javascript>alert("data cannot be added")</script>';	
    } 
}
else{
    echo '<script type = text/javascript>alert("data cannot be added")</script>';
    header('Location: index.php?msg=ERROR');
    exit;
}




 
      
     ?>