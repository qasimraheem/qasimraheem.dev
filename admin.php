<?php
/**
 * Created by PhpStorm.
 * User: qasim
 * Date: 2019-04-16
 * Time: 01:02
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include("includes/header.php")?>

<section class="about_section">
    <div class="container">
        <form class="card_info_container" method="post" action="adminaction.php">
            <div class="form_row">
                <label>Username</label>
                <input type="text" name="username" placeholder="UserName">
            </div>

            <div class="form_row">
                <label>Password</label>
                <input type="password" name="password" placeholder="UserName">
            </div>
            <button class="btn" name="btn">Login</button>
        </form>
    </div>
</section>
<?php include("includes/footer.php")?>
</body>
</html>


