<?php
include("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <title>Title</title>
</head>
<body>
<?php include("../includes/header.php")?>

<main>
    <section class="slider">
        <div class="slider_container">
            <figure>
                <div id="slide1" class="sliderimg">
                </div>
                <div id="slide2" class="sliderimg">
                </div>
                <div id="slide3" class="sliderimg">
                </div>
                <div id="slide4" class="sliderimg">
                </div>
            </figure>
        </div>
        <div class="slider_text">
            <h1>PingDev</h1>
            <h2>PING The DEVELOPERS For The Best Solution Of Your Problems</h2>
        </div>
    </section>
    <section class="solution_section">
        <div class="container">
            <div class="solution_card_containers">
                <a href="frontend.php">
                    <div class="solution_card">
                        <figure class="solution_image" id="frontend_solution">
                            <figcaption>Frontend Solutions</figcaption>
                        </figure>
                    </div>
                </a>
                <a href="backend.php">
                    <div class="solution_card">
                        <figure class="solution_image" id="backend_solutions">
                            <figcaption>Backend Solutions</figcaption>
                        </figure>
                    </div>
                </a>
                <a href="dbmanagement.php">
                    <div class="solution_card">
                        <figure class="solution_image" id="db_solution">
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

</main>
</body>
</html>
