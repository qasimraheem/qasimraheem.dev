<?php
/**
 * Created by PhpStorm.
 * User: qasim
 * Date: 2019-04-16
 * Time: 16:09
 */
?>
<?php
include("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include("../includes/header.php")?>

<section class="solution_section">
    <div class="container">
        <div class="solution_card_containers">
            <a href="https://tokenlab.io/">
                <div class="solution_card">
                    <figure class="solution_image" id="tokenlab">
                        <figcaption>Frontend Solutions Tokenlabb</figcaption>
                    </figure>
                </div>
            </a>
            <a href="http://bcdapps.io/">
                <div class="solution_card">
                    <figure class="solution_image" id="bcdapps">
                        <figcaption>BCDApps WebPage</figcaption>
                    </figure>
                </div>
            </a>
            <a href="http://elum.io/#/">
                <div class="solution_card">
                    <figure class="solution_image" id="elum">
                        <figcaption>Database Designs and Management</figcaption>
                    </figure>
                </div>
            </a>
            <a class="disable">
                <div class="solution_card">
                    <figure class="solution_image" id="android_solutions">
                        <figcaption>Android Development</figcaption>
                    </figure>
                </div>
            </a>
            <a class="disable">
                <div class="solution_card">
                    <figure class="solution_image" id="desktop_solutions">
                        <figcaption>Desktop Applications</figcaption>
                    </figure>
                </div>
            </a>
            <a  href="webdesigns.php">
                <div class="solution_card">
                    <figure class="solution_image" id="webbdesigns_solutions">
                        <figcaption>Web Designs</figcaption>
                    </figure>
                </div>
            </a>
        </div>
    </div>
</section>
<?php include("../includes/footer.php")?>


</body>
</html>
