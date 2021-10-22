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
        }
            
        if(empty($_POST["password"])){
            $errors["password"]="password is required !!!";
        }else{
            $pass=htmlspecialchars($_POST["password"]);
            $passsh=md5($pass);
        }

        if(!array_filter($errors)){ /// empty array return false else the array is not empty then return false . 
            include("PageSQL.php");
            $query="select * from users where Email='$user' and Password='$passsh' limit 1";
            $resultat=mysqli_query($conn,$query);
            if(mysqli_num_rows($resultat)==1)
            {
                header("Location:home.php");
                $_SESSION["userName"]=$user;
            }                
            else
                echo '<h2 class="er">User Name Or Password incorrect !!!</h2>';
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

</body>
</html>