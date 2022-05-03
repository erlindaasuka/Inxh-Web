<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>DENTO</title>
</head>

<body>

    <div class="content">
        <?php include_once('include/navbar.php') ?>

        <div class="content-foto">
            <div class="foto">
                <img src="img/slide-03.jpg" alt="">
            </div>
            <div class="text">
                <h1 class="text-content">Years of Experience</h1>
                <h3 class="text-content2">Since our foundation, we've been delivering diagnostic solutions.</h3>
                <a class="button1" href="appointment.php">MAKE AN APPOINTMENT!</a>
            </div>
        </div>
    </div>

    <div class="cardss">
        <div class="card-template">
            <h2 class="open">OPENING HOURS</h2>
            <br>
            <p class="open-p">Mon–Fri
                8:00am–7:00pm<br>
                <br>
                Saturday
                9:00am–5:00pm<br>
                <br>
                Sunday
                9:00am–3:00pm
            </p>
        </div>
        <div class="card-template">
            <h2 class="open">DOCTORS’ TIMETABLE</h2>
            <br>
            <p class="open-p">The following is for guidance only to help you plan your appointment with a preferred doctor or nurse. It does not guarantee availability as the doctors or nurses may sometimes be attending to other duties.
            </p>
        </div>
        <div class="card-template">
            <h2 class="open">APPOINTMENTS</h2>
            <br>
            <p class="open-p">The first step towards a healthy life is to schedule an appointment. Please contact our office by phone or complete the appointment request form.
            </p>
        </div>
        <div class="card-template">
            <h2 class="open">EMERGENCY CASES</h2>
            <br>
            <p class="open-p">1-800-1234-567
                Call us!
            </p>
        </div>

    </div>
    <div class="content3">
        <div id="myDiv">
            <h1 class="hhh">Our Clinic</h1>

            <hr>
        </div>
        <div class="content-foto">
            <img class="img1" src="img/271441686_104784498758721_182637714774576721_n.jpg" alt="">
        </div>
        <div class="content-foto">
            <img class="img1" src="img/271317913_104784515425386_1910076342369477621_n.jpg" alt="">
        </div>

    </div>

    <h1 id="testimonials">Testimonials</h1>
    <hr id="testim-hr">
    <div class="container">
        <input type="radio" name="nav" id="first" checked />
        <input type="radio" name="nav" id="second" />
        <input type="radio" name="nav" id="third" />

        <label for="first" class="first"></label>
        <label for="second" class="second"></label>
        <label for="third" class="third"></label>

        <div class="one slide">
            <blockquote>
                <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I was pleased with his creative design and will definitely be hiring him again. <span class="rightq quotes">&bdquo; </span>
            </blockquote>
            <img src="img/thumb-71-personae-big1603154071.jpeg" width="170" height="130" alt="">
            <h2 class="h22">Steve Kruger</h2>
            <h6 class="h66">UI/UX Designer at Woof Design Studio</h6>
        </div>

        <div class="two slide">
            <blockquote>
                <span class="leftq quotes">&ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I recommend him to anyone who wants their work done professionally.
            </blockquote>
            <img src="img/2-414.jpg" width="170" height="130" />
            <h2 class="h22">John Doe</h2>
            <h6 class="h66">Developer Relations at Woof Studios</h6>
        </div>

        <div class="three slide">
            <blockquote>
                <span class="quotes leftq"> &ldquo;</span> He promptly completed the task at hand and communicates really well till the project reaches the finishing line. I was pleased with his creative design and will definitely be hiring him again. <span class="rightq quotes">&bdquo; </span>
            </blockquote>
            <img src="img/2-45.jpg" width="170" height="130" />
            <h2 class="h22">Steve Stevenson</h2>
            <h6 class="h66">CEO Woof Web Design Studios</h6>
        </div>


    </div>

    <div class="mapouter">
        <h1 id="testimonials1">Our Location</h1>
        <hr id="testim-hr1">
        <div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=prishtina&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 600px; height: 400px;"></iframe><a href="https://fnfmod.net/" style="display:none">fnf mods</a>
            <style>
                .mapouter {
                    position: relative;
                    text-align: center;


                }
            </style><a href="https://www.googlemapsiframegenerator.com" style="display:none">Google Maps Iframe Generator - Free Html Embed Code</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                }
            </style>
        </div>
    </div>
    <?php include_once('include/footer.php') ?>
</body>

</html>