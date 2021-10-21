<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <nav>
        <div class="logo">
            <img src="images/logo.png" alt="logo">
        </div>
        <a href="connexion.php">Diconnexion ?</a>
    </nav>
    <div class="homecontainer">
        <div class="text">
            <h2>Hello</h2><br>
            <h1>Welcom in this Home page<br><span>hermano</span></h1>
            <?php
        include("PageSQL.php");
    ?>
    
    <div>
        <table border="1">
          <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>DATE DE CREATION</th>
          </tr>
          <?php
            foreach($users as $key){

        ?>
        
        <tr>
            <td>
                <?php
                    echo htmlspecialchars($key['ID']);
                ?>
            </td>
            <td>
            <?php
                    echo htmlspecialchars($key['UserName']);
                ?>
            </td>
            <td>
            <?php
                    echo htmlspecialchars($key['Email']);
                ?>
            </td>
            <td>
            <?php
                    echo htmlspecialchars($key['Password']);
                ?>
            </td>
            <td>
            <?php
                    echo htmlspecialchars($key['Created']);
                ?>
            </td>
        </tr>

        <?php
                
            }
          ?>
        </table>
    </div>
        </div>
    </div>

    <div class="footr" style="text-align:center;position: absolute;bottom: 0;left: 0;background: rgba(138, 165, 240, 0.54);width: 100%;padding:.5rem;">
        <h2>&copy; 2020 - <?php echo date("Y"); ?> | salaheddine</h2>
    </div>



</body>
</html>