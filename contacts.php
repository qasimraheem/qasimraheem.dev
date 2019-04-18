<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Title</title>
</head>
<body>
<?php include("includes/header.php")?>

<main>
    <section class="contact_section container">
        <aside class="contact_left">
            <div class="contact_container">
                <div>
                    <figure class="icon location_icon">
                    </figure>
                    <div>
                        <h2>
                            Address
                        </h2>
                        <p>Street 1, Fazaltown Phase 1, Rawalpindi</p>
                    </div>
                </div>
                <div>
                    <figure class="icon mobile_icon">
                    </figure>
                    <div>
                        <h2>
                            Lets Talk
                        </h2>
                        <p>0092 3142603936</p>
                    </div>
                </div>
                <div>
                    <figure class="icon email_icon">
                    </figure>
                    <div>
                        <h2>
                            General Support
                        </h2>
                        <p>qasimmehmood13936@gmail.com</p>
                    </div>
                </div>
            </div>
        </aside>
        <aside class="contact_right">
            <div class="right_container">
                <h1>
                    Send Us A Message
                </h1>
                <form action="action.php" method="post">
                    <div class="form_row">
                        <lable>TELL US YOUR NAME *</lable>
                        <div class="user_name">
                            <input name="fname" type="text" placeholder="First Name">
                            <input name="lname" type="text" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form_row">
                        <lable>ENTER YOUR EMAIL *</lable>
                        <input name="email" type="email" placeholder="Eg. example@email.com">
                    </div>
                    <div class="form_row">
                        <lable>ENTER PHONE NUMBER</lable>
                        <input name="number" type="number" placeholder="+1 800 000000">
                    </div>
                    <div class="form_row">
                        <lable>MESSAGE *</lable>
                        <textarea name="message" type="text" placeholder="Write us a message"></textarea>
                    </div>
                    <button type="submit" formtarget="_blank" name="submit_btn" class="btn">Submit</button>
                </form>
            </div>
        </aside>
    </section>
</main>
<?php include("includes/footer.php")?>
</body>
</html>