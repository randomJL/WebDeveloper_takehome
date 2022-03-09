<?php

require("src/Controller.php");

new Controller($configName,'.db_config');

$requestMethod = $_SERVER['REQUEST_METHOD'];
if ($requestMethod == "POST"){
    $Controller -> insertData();
    $Controller->getDB()->db_close();
} else {
    echo "No value entered!";
}

?>

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
            <form action="index.php" method="post">
                        <label>FirstName:</label>
                        <input type="text" name="first_name" value="<?php echo $entered_fname;?>" class="request_input"/><br><br>
                        
                        <label>LastName:</label>
                        <input type="text" name="last_name" value="<?php echo $entered_lname;?>" class="request_input"/><br><br>
                        <label>Email:</label>
                        <input type="email" name="email" value="<?php echo $entered_email;?>" class="request_input"/><br><br>
                        <input type="submit" value="Submit" class="request_submit"/>
            </form>  
        </div>

    </body>
</html>
