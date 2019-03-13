
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/assets/css/style.css"/>
    </head>
    <body>
        <header>
            <nav>
           
                <?php

                if ($_SESSION['loggedin'] = TRUE){
                    $loged = "Logga ut";
                    
                }
                else{
                    $loged = "Logga in";
                    
                    
                    
                }
                ?>
                <a href="logout.php"><?=$loged ?></a>
            </nav>

        </header>


