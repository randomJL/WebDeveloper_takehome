
<!DOCTYPE html>
<html>
    <head>
        <title>
            Final Question
        </title>
    </head>

    <body>

    <div ><img src="src/img/sph_title.png"/></div>

    <div>
        <?php

            require("src/Controller.php");

            $controler = new Controller('sqlite','./db/sph_database.db');

        ?>
    </div>

    </body>
</html>
