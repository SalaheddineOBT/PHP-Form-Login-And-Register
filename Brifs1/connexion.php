<?php

    $errors=array("email"=>'',
                "password"=>''
    );

    $pass=$user="";
    if(isset($_POST["submite"])){
        if(empty($_POST["username"])){
            $errors["email"]="Email is required !!!";
        }else{
            $user=htmlspecialchars($_POST["username"]);
            if(!filter_var($user,FILTER_VALIDATE_EMAIL)){
                $errors["email"]="Invalide Email Adresse !!!";
            }
        }
            
        if(empty($_POST["password"])){
            $errors["password"]="password is required !!!";
        }else{
            $pass=htmlspecialchars($_POST["password"]);
        }

        if(!array_filter($errors)){ /// empty array return false else the array is not empty then return false . 
            header("Location:home.php");
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="container">
        <form action="connexion.php" method="post">
            <h1>LOGIN</h1>
            <label for="userName">User Name :</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user); ?>" placeholder="Enter Your User Name :" />
            <h3 class="error"><?php echo $errors["email"]; ?></h3>
            <label for="password">password :</label>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($pass); ?>" placeholder="Enter Your Password :" />
            <h3 class="error"><?php echo $errors["password"];  ?></h3>
            <a href="inscreption.php" id="register" >create account ?</a>
            <input type="submit" name="submite" id="btnsub" value="Connexion" />
        </form>
    </div>


    <?php
        include("PageSQL.php");
    ?>


</body>
</html>