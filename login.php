<?php
require_once "../include/connection.php" ;
if(!empty($_GET['username'] && !empty($_GET['password'])))
{
    $username = strip_tags( $_GET['username']);
    $password = strip_tags($_GET['password']);
    $table = 'adminlogi';
    $query = "SELECT * FROM ".$table; 
    $result = mysql_query($conn,$query);
    $resultp = mysql_fetch_array($result);

    
    if($username == $resultp['username'] && $password == $resultp['password'])
    {
        alert("login successfull");
        header("Location: dashboard.php?".$username);
    }
    else{
        header("Location: index.php?error=Username and Password is wrong");
    }
}
else{
    header("Location: index.php");
}

#NER200SHI
?>