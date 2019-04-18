
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<section class=" container action_section">
    <div class=" action_alert_box">
        <div class="action_card">
            <?php
            /**
             * Created by PhpStorm.
             * User: qasim
             * Date: 2019-04-17
             * Time: 08:13
             */
            $user=$_POST["username"];
            $pass=$_POST["password"];
            if ($user=="qasim"&&$pass=="qasim"){
                echo "<h1>valid</h1> Welcome";
            }else{
                echo "<h1>invalid</h1>";

            }
            ?>
        </div>
    </div>
</section>
</body>
</html>
