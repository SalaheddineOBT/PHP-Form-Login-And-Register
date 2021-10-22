<?php
    $errors=array(
        'email'=>'',
        'username'=>'',
        'password'=>'',
        'confirm'=>'',
    );

    $user=$email=$pass=$conf="";

    if(isset($_POST["submite"])){
        if(empty($_POST["username"])){
            $errors["username"]='User Name Is required !!';
        }else{
            $user=htmlspecialchars($_POST["username"]);
        }
    
        if(empty($_POST["email"])){
            $errors["email"]='email Is required !!';
        }else{
            $email=htmlspecialchars($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors["email"]="Invalide Email Adresse !!!";
            }
        }
    
        if(empty($_POST["password"])){
            $errors["password"]='Password Is required !!';
        }else{
            $pass=htmlspecialchars($_POST["password"]);
        }
    
        if(empty($_POST["confirmepas"])){
            $errors["confirm"]='User Name Is required !!';
        }else{
            $conf=htmlspecialchars($_POST["confirmepas"]);
            $passhash=md5($conf);
        }



        if($pass==$conf && !array_filter($errors)){
            include('PageSQL.php');

            $sql="insert into users(UserName,Email,Password) values('$user','$email','$passhash')";

            $res=mysqli_query($conn,$sql);

            header("Location:connexion.php");


        }else{
            echo '<h2 class="er">The confirm Password is incorrect !!!</h2>';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="container1">
        <form action="inscreption.php" method="post">
            <h1>Regsiter</h1>
                <label for="userName">User Name :</label>
                <input type="text" id="username" name="username" placeholder="Enter Your User Name :" value="<?php echo $user; ?>" />
                <h4 class="error"><?php echo $errors["username"];  ?></h4>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email :" value="<?php echo $email; ?>" />
                <h4 class="error"><?php echo $errors["email"];  ?></h4>
                <label for="password">password :</label>
                <input type="password" id="password" name="password" placeholder="Enter Your Password :" value="<?php echo $pass; ?>" />
                <h4 class="error"><?php echo $errors["password"];  ?></h4>
                <label for="confirme">confirm password :</label>
                <input type="password" id="confirmepas" name="confirmepas" placeholder="Confirm Your Password :" value="<?php echo $conf; ?>" />
                <h4 class="error"><?php echo $errors["confirm"];  ?></h4>
                <a href="connexion.php" id="connexion" class="connexion" >already have an acounte ?</a>
                <input type="submit" name="submite" id="btnsubr" value="Register" />
        </form>
    </div>
    




</body>
</html>