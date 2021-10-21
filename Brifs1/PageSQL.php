<?php

    //connect to the database
    $conn=mysqli_connect('localhost','Salaheddine','Salah2001','db1');

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

    //close connection :
    mysqli_close($conn);

    // print_r($users);

    // query Insert
    // function Inscreption($usernam,$email,$pass){
    //     $sql='INSERT INTO users VALUES()';

    // }

    function Connecting($UsNm,$Pass){
        $query='SELECT * FROM users WHERE UserName="'.$UsNm.'" AND Password="'.$Pass.'"';
        $res=mysqli_query($conn,$query);

        if()
    }

?>