 <?php
session_start();
if (!isset($_SESSION['user_id'])) {
    $id = rand(1, 99999999999);
    $cookie_name = "user_id";
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
    $_SESSION[$cookie_name] = $cookie_value;
}
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="./image/fav_icon.png" type="image/png" />
    <title>Manvaasam</title>
    <meta name="Keywords" content="cocopeat for plants,egg incubator for sale,pot plant,vermicompost for plants,manvaasam bag,grow bags for plants,seed balls online,gardening setup."/>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.001.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3/dist/js/bootstrap.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157973494-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157973494-1');
</script>
</head>

<body style="overflow-x: hidden">
    <?php
    include_once './backend/header.php';
    ?>


        <!--slide image-->
       

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<br><br>
<br>
<br>

<div class="slideshow-container">
 <div class="mySlides fade">
  <!--<div class="numbertext">1 / 4</div>-->
  <img src="image/home/interview-tips.jpeg" style="width:100%">

</div>
<div class="mySlides fade">
  <!--<div class="numbertext">2 / 4</div>-->
  <img src="image/home/comm2.jpeg" style="width:100%">

</div>
<div class="mySlides fade">
  <!--<div class="numbertext">3 / 4</div>-->
  <img src="community.png" style="width:100%">
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">4 / 4</div>-->
  <img src="image/home/app.jpeg" style="width:100%">

</div>
<div class="mySlides fade">
  <!--<div class="numbertext">4 / 4</div>-->
  <img src="image/home/connect-6.jpeg" style="width:100%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>






        <!--close slide image-->
       <!-- <video src="./assets/videos/bg_autoplay_4.mp4" loop muted autoplay></video>
        <div class="overlay"></div>
        <div class="content">
            <div class="heroWrap-content">
                <h2>CHANGEMAKERS</h2>
                <h1> MANVAASAM TEAM </h1>
                <p> Environment | Social | Training | Technology </p>
                <a href="aboutus.php">
                    <span class="btn btn-outline-white myPrimary">ABOUT US</span>
                </a>
            </div>
        </div>
    </div>-->
    <div class="container">
        <div class="flex-center my-5">
            <div class="box">
                <svg class="fa2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="1rem" height="1rem" viewBox="0 0 1664 1408">
                    <path d="M768 832v384q0 80-56 136t-136 56H192q-80 0-136-56T0 1216V512q0-104 40.5-198.5T150 150T313.5 40.5T512 0h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136zm896 0v384q0 80-56 136t-136 56h-384q-80 0-136-56t-56-136V512q0-104 40.5-198.5T1046 150t163.5-109.5T1408 0h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136z" fill="#fff" />
                </svg>
                <div class="text">
                    <svg class="fa1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" width="1rem" height="1rem" viewBox="0 0 1664 1408">
                        <path d="M768 192v704q0 104-40.5 198.5T618 1258t-163.5 109.5T256 1408h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28H192q-80 0-136-56T0 576V192q0-80 56-136T192 0h384q80 0 136 56t56 136zm896 0v704q0 104-40.5 198.5T1514 1258t-163.5 109.5T1152 1408h-64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h64q106 0 181-75t75-181v-32q0-40-28-68t-68-28h-224q-80 0-136-56t-56-136V192q0-80 56-136t136-56h384q80 0 136 56t56 136z" fill="#fff" />
                    </svg>
                    <div>
                        <h2 style="font-weight: bold;" class="pb-2">
                            <br>
                            திருக்குறள்
                        </h2>
                        <h4 style="text-align:left;font-size: large">
                            “உழுதுண்டு வாழ்வாரே வாழ்வார்மற் றெல்லாம்<br> தொழுதுண்டு பின்செல் பவர்.”<br><br>

                            <b>பொருள்:</b> உழவு செய்து அதனால் கிடைத்ததைக் கொண்டு வாழ்கின்றவரே உரிமையோடு வாழ்கின்றவர், மற்றவர் எல்லோரும் பிறரைத் தொழுது உண்டு பின் செல்கின்றவரே.
                        </h4>
                        <p style="text-align: right;">
                            - திருவள்ளுவர்
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-3" style="
            background: #90d156;
            border-radius: 100px 0px 100px 0px;
            box-shadow: 0 4px 8px 0 #3d3d3d;
          ">
            <div class="col-sm-6 flex-center">
                <img src="./image/home/demo_interview.jpeg" alt="demo_interview" class="img-fluid" style="width: 70%; height: 70%; padding: 4%" />
            </div>
            <div class="col-sm-6">
                <div class=" flex-center">
                    <div>

                        <div class="text-center">
                            <h2>DEMO INTERVIEW</h2>
                            <h3>"Overcome your fear about interviews"</h3>
                        </div>
                        <h3>Process Flow:-</h3>
                        <ol class="small">
                            <li>Click on Book your slot button</li>
                            <li>Fill the  basic details asked in form</li>
                            <li>Schedule your available Timing[10AM TO 7PM]</li>
                            <li>Complete your payment</li>
                            <li>Demo Interview Google meeting Link will be shared via mail/Phone</li>
                            <li>Feed backs will be shared at the end of the meet.</li>
                        </ol>
                        <br />
                        <div class="text-center">
                            <!--https://docs.google.com/forms/d/e/1FAIpQLSfyt21exsn0OtuFcaF4TtngpT6RuaYDWvFLk0o6EQ4yH8Vgqg/viewform-->
                            <a href="https://rzp.io/l/6utYwnqAj" ><button class="btn btn-success wow animate__heartBeat animate__slower">Book Your Slot</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row p-3" style="
        background: #90d156;
        border-radius: 100px 0px 100px 0px;
        box-shadow: 0 4px 8px 0 #3d3d3d;
      ">
            <div class="col-sm-6 flex-center">
                <img src="./image/home/birthdayform.jpg" alt="Birthdayplant" class="img-fluid" style="width: 65%; height: 65%; padding: 4%" />
            </div>
            <div class="col-sm-6">
                <div class=" flex-center">
                    <div>

                        <div class="text-center">
                            <h2> WE CELEBRATE YOUR BIRTHDAY BY PLANTING A SAPLING </h2>
                            <h3></h3>
                        </div>
                        <h4> We will plant a sapling on your birthday and maintain it for life long on behalf of you...</h4>
                        <!--https://docs.google.com/forms/d/1gW1NGolizN5DoeJ6cbmMNRNJXTNExdSIsSYM9BYl3Mc/viewform?edit_requested=true-->
                        <div class="text-center"><a href="https://rzp.io/l/LhTJvMgk" target="_blank" class="btn btn-success wow animate__heartBeat animate__slower">TO PLANT</a>
                        </div>
                        <br />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-6">
            <img src="./image/manvasam_logo1.png" style="width: 80%; height: 175px" />
        </div>
        <div class="col-sm-6 text-center">
            <div class="flex-center">
                <h2>Be a part of Manvaasam,for a change</h2>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="jumbotron" style="
        margin-bottom: 0;
        background: #90d156;
        padding-top: 5px;
        padding-bottom: 5px;
        border-radius: 50px 50px 10px 10px;
      ">
        <div class="row">
            <div class="col-sm-6">
                <div style="margin-left: 15%; padding: 5%">
                    <a href="tel:6380091001"><img style="width: 25px; margin-right: 2%; margin-left: 2%" src="./image/otherlogo/whatsapp.png" /></a>
                    +91 6380091001<br />
                    <a href="mailto:training@manvaasam.com"><img style="width: 25px; margin-left: 2%; margin-right: 2%" src="./image/otherlogo/gmail.png" /></a>training@manvaasam.com
                </div>
            </div>

            <div class="col-sm-6">
                <div style="margin-top: 5%">
                    <center>
                        <a href="https://t.me/manvaasam"><img target="_blank" style="width: 35px; margin-right: 8%" src="./image/otherlogo/telegram.png" /></a>
                        <a href="https://manvaasamteam.wordpress.com/2021/02/24/a-gratitude-note/"><img target="_blank" style="width: 35px; margin-right: 8%" src="./image/otherlogo/blog.png" /></a>
                        <a href="https://www.linkedin.com/in/manvaasam-team-/"><img style="width: 35px; margin-right: 8%" target="_blank" src="./image/otherlogo/linkedin.png" /></a>
                        <a href="https://www.facebook.com/107974564140846/posts/133516268253342/?substory_index=0"><img target="_blank" style="width: 35px; margin-right: 8%" src="./image/otherlogo/fb.png" /></a>
                        <a href="https://www.instagram.com/manvaasam_/"><img style="width: 35px; margin-right: 8%" target="_blank" src="./image/otherlogo/insta.png" /></a>
                        <a href="https://www.youtube.com/channel/UCTybxerFOmv86ekeIO1hUQw"><img style="width: 45px" target="_blank" src="./image/otherlogo/youtube.png" /></a><br />
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>