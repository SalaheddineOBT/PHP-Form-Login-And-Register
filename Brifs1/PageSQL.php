<?php

    //connect to the database db1
    $conn=mysqli_connect('localhost','Salaheddine','Salah2001','db1');
    session_start();

    //check connection

    if(!$conn){
        echo 'connection error !! '.mysqli_connect_error();
    }

    //querys select : 
    $sql='SELECT * FROM users ORDER BY Created';

    //result :
    $result=mysqli_query($conn,$sql);

    //fetch the result rows
    $users=mysqli_fetch_all($result,MYSQLI_ASSOC);

    //free result from memory :
    mysqli_free_result($result);

    // print_r($users);

    // //close connection :
    // mysqli_close($conn);

?>