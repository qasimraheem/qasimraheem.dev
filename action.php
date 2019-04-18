
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
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $number=$_POST["number"];
            $message=$_POST["message"];

            echo "<h1 class='main_title'>hi $fname </h1>";
            echo "<p class='title'> Hi $fname $lname, Thanks for your Feedback, we will send you email on $email</p>"
            ?>
        </div>
    </div>
</section>
</body>
</html>
