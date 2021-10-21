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
        <form action="connexion.php" method="post">
            <h1>Regsiter</h1>
                <label for="userName">User Name :</label>
                <input type="text" id="username" name="username" placeholder="Enter Your User Name :" />
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email :" />
                 <label for="password">password :</label>
                <input type="password" id="password" name="password" placeholder="Enter Your Password :" />
                <label for="confirme">confirm password :</label>
                <input type="password" id="confirmepas" name="confirmepas" placeholder="Confirm Your Password :" />
              <a href="connexion.php" id="connexion" class="connexion" >already have an acounte ?</a>
            <input type="submit" name="submite" id="btnsubr" value="Register" />
        </form>
    </div>
    <div class="error">
        <span>error</span>
    </div>

    <?php



    ?>


</body>
</html>