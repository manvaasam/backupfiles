<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./image/fav_icon.png" type="image/png">
    <title>Manvasam Courses</title>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MNFWDS3');</script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" type="text/css" href="./assets/css/course_style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3/dist/js/bootstrap.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157973494-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157973494-1');
</script>
</head>

<body>
    <?php
    include './backend/header.php';
    ?>
    <div class="container" style="margin-bottom:5%;margin-top:8%">
        <center>
            <h1 class="wow animate__fadeInUp">Welcome to Manvaasam Community </h1>
            <br>
        </center>
        <div class="container"
            style="border:1px solid #a5d17e;border-radius: 5px;margin-bottom: 1%;padding-bottom: 1%;box-shadow: 0 4px 8px 0 #a5d17e, 0 6px 20px 0 #a5d17e;">
            <center>
                <br>
                
                <h2 class="wow animate__fadeInDown">
                    <b>What is Community?</b><h2>
                  <h3 class=" wow animate__fadeInLeft" style="text-align:left;">  Vision :<br>
                    To Reduce the gap between
                    students & Industry professionals
                    via Community Guidance</h3>
                  <h3 class=" wow animate__fadeInLeft" style="text-align:right;">  Mission : <br>
                    Every student needs to get right
                    skill for their career<br>
               <!--button for join community whatsapp and telegram -->
                <center>
                <div class=" wow animate__fadeInUp">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJgS-KRkk6DsR5NjVyQQva9UREGebJw6qReGbViTneZxztYw/viewform"
                        target="_blank"><button type="button" class="btn btn-success" style="button-align:left;">Reach Out</button></a>
                </div>
                </center>
                <center>
        </div><br><br>
        <section class="container">
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom border-dark"></h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 d-flex justify-content-center">
          <div class="feature col ">
            <div class="feature-icon d-flex align-items-center justify-content-center w-100" >
              <img src="./image/courses/help.png" width="100" alt="">
            </div>
            <p class="lead display-4 text-center" id="count1"></p>
            <p class="lead display-6 text-center text-shadow-1">Mentors</p>
          </div>
          <div class="feature col">
            <div class="feature-icon  d-flex align-items-center justify-content-center w-100">
              <img src="./image/courses/people.png" class="center-block" width="100" alt="">
            </div>
            <p class="lead display-4 text-center" id="count2"> </p>
            <p class="lead display-6 text-center text-shadow-1">Community members</p>
          </div>
          <div class="feature col ">
            <div class="feature-icon d-flex align-items-center justify-content-center w-100">
                 <img src="./image/courses/group-chat.png" width="100" alt=""> 
            </div>
            <p class="lead display-4 text-center" id="count3"></p>
            <p class="lead display-6 text-center text-shadow-1">Session <br> conducted</p>
          </div>
        </div>
        <h2 class="pb-2 border-bottom border-dark"></h2>
      </div>
    
    </section>
    <!--for number countincrement-->
<script>
document.addEventListener("DOMContentLoaded", () => {
   function counter(id, start, end, duration) {
    let obj = document.getElementById(id),
     current = start,
     range = end - start,
     increment = end > start ? 1 : -1,
     step = Math.abs(Math.floor(duration / range)),
     timer = setInterval(() => {
      current += increment;
      obj.textContent = current;
      if (current == end) {
       clearInterval(timer);
      }
     }, step);
   }
   counter("count1", 0, 30, 3000);
   counter("count2", 100, 550, 2500);
   counter("count3", 0, 45, 3000);
  });

</script> 
            <div class="container">
                <div class="row wow animate__fadeIn animate__slower"
                    style="margin-top:1%;background-color:#90d156;margin-bottom:8%;border-radius: 60px 5px;box-shadow: 0 4px 8px 0 rgba(68, 67, 67, 0.2), 0 6px 20px 0 rgba(80, 79, 79, 0.19);">
                    <div class="container">
                        <div class="row container">

                            <center>
                                <div class="container wow animate__pulse">
                                    <h1><b>MANVAASAM COMMUNITY</b></h1><br>
                                </div>
                            </center>
                            <div class="col-sm-5 wow animate__fadeInLeft">
                                <center>
                                    <img src="./image/courses/poster .png" class="img-fluid" alt="Responsive image"
                                        style="width:85%;height:95%;">
                                </center>
                            </div>
                            <div class="col-sm-7 wow animate__fadeInRight">
                                <br>
                                <br>


                                <div classname="community">
                                    <br>
                                    <h4>Name:<b> Manvaasam community(PAID/FREE)</b></h4><b><br>
                                        
                                            <h4>Things included :<b>(Daily aptitude,Demo interview,weekly GD,Monthly resume building & linkedin session,weekly professional connect, 1:1 mentorship) </b></h4><b><br>
                                                <h4>Portal access :<b> Yes</b> <b></b></h4><br>
                                                <h4>Forum :<b> Ask your Questions(4 hrs reply)</b> <b></b></h4><br>
                                                <h4>Group discussion session :<b>Tuesday & Thursday- 7PM<b></b></b></h4><b><b><br>
                                                <h4>Community connect/Resume/linkedin session :<b> Saturday-7PM<b></b></b></h4><b><b><br>
                                                
                                                        
                                                            <a target="_blank" href="payment/pricing.html"><button
                                                                    type="button" class="btn btn-success" style="margin: 5px;">Join Our Community</button></a>
                                                                     <a target="_blank" href="https://play.google.com/store/apps/details?id=com.manvaasam.student"><button
                                                                    type="button" class="btn btn-success" style="margin: 5px;">Download Our App</button></a>
                                                                    <a target="_blank" href="community.pdf"><button
                                                                    type="button" class="btn btn-success" style="margin: 5px;">Download Broucher</button></a>
                                                            
                                                        </b>
                                                    </b></b>
                                            </b>
                                        </b>
                                    </b>
                                </div>
                            </div>
                            <div class="col-sm-5 wow animate__fadeInRight">
                                <br>
                            </div>
                        </div><br>
                        <h3 class="wow animate__flipInX"><b></b></h3>
                        <div class="row">
                            <div class="col-xs-3 wow animate__fadeInLeft" style="margin-top: 2%;">
                            </div>
                            <div class="col-xs-8 wow animate__fadeInRight">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
             
    </div>
    <div class="container">
                <div class="row wow animate__fadeIn animate__slower"
                    style="margin-top:1%;background-color:#90d156;margin-bottom:8%;border-radius: 60px 5px;box-shadow: 0 4px 8px 0 rgba(68, 67, 67, 0.2), 0 6px 20px 0 rgba(80, 79, 79, 0.19);">
                    <div class="container">
                        <div class="row container">

                            <center>
                                <div class="container wow animate__pulse">
                                    <h1><b>MANVAASAM RESUME EVALUATION</b></h1><br>
                                </div>
                            </center>
                            <div class="col-sm-5 wow animate__fadeInLeft">
                                <center>
                                    <img src="./image/resume1.jpg" class="img-fluid" alt="Responsive image"
                                        style="width:85%;height:95%;">
                                </center>
                            </div>
                            <div class="col-sm-7 wow animate__fadeInRight">
                                <br>
                                <br>


                                <div classname="community">
                                    <br>
                                    <h4><b>Know your resume score within 24 hrs<b> </b></h4><br>
                                      <b>Mode:</b> Online<br><b></b></h4><br>
                                      <b>Free/Paid:</b> Paid<br><b></b></h4><br>
                                      <b>Reviewed by:</b> Manvaasam Team<br><b></b></h4><br>
                                      <b>We evaluate your resume and Send your  resume score to your email within 24 hrs<br><b></b></h4><br>
                                      
                                      
 <!--For share button starts-->
<a target="_blank" href="whatsapp://send?text= Checkout our manvaasam course at https://manvaasam.com/course.php

data-action="share/whatsapp/share"><button
                                                                    type="button" class="btn btn-success" style="margin: 5px;">Share</button></a>
<!--For share button closed-->
                                                            <a target="_blank" href="https://Manvaasam.mojo.page/manvaasam-resume-evaluation"><button
                                                                    type="button" class="btn btn-success" style="margin: 5px;">REGISTER NOW</button></a>
                                </div>
                            </div>
                            
                            <div class="col-sm-5 wow animate__fadeInRight">
                                <br>
                            </div>
                        </div><br>
                        <h3 class="wow animate__flipInX"><b></b></h3>
                        <div class="row">
                            <div class="col-xs-3 wow animate__fadeInLeft" style="margin-top: 2%;">
                            </div>
                            <div class="col-xs-8 wow animate__fadeInRight">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
             


<!--students comment close-->
<br>
<center>

<!-- our yt comments -->
<div class="ccard">
        <div class="ccardbox">
            <div class="dcard">
                <div class="fpart">
                    
                    <iframe src="https://www.youtube.com/embed/wLXSRAjEDvA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <a href="#java">
                    <div class="spart"> Students feedback </div>
                </a>
            </div>
        </div>
    </div>
<!-- our yt comments close -->
<style>

</style>
</center>
<br>
<div class="container"
            style="border:1px solid #a5d17e;border-radius: 5px;margin-bottom: 1%;padding-bottom: 1%;box-shadow: 0 4px 8px 0 #a5d17e, 0 6px 20px 0 #a5d17e;">
                <br>
                
        <h3 class=" wow animate__fadeInLeft" style="text-align:center;">Are you a Industrial Expert..?</h3>
        <h3 class=" wow animate__fadeInLeft" style="text-align:justify";>Looking For a perfect place to share your Knowledge</h3>
        <h4 class=" wow animate__fadeInRight">Come, Let us work together...<br>join our community</h4>
        <!--button for join community whatsapp and telegram -->
                
                <div class=" wow animate__fadeInUp">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfJgS-KRkk6DsR5NjVyQQva9UREGebJw6qReGbViTneZxztYw/viewform"
                        target="_blank"><button type="button" class="btn btn-success" style="button-align:left;">Reach Out</button></a>
                </div>
</div>

    
    <!--  footer Tab   -->
    <div class="jumbotron wow animate__fadeIn animate__slower"
        style="margin-bottom:0;background: #90d156;padding-top: 5px;padding-bottom: 5px;border-radius: 50px 50px 10px 10px">
        <!--  Left panel of Footer  -->
        <div class="row">
            <div class="col-sm-6">
                <div style="margin-left:15%;padding:5%">
                    <a href="tel:6380091001"><img style="width:25px;margin-right:2%;margin-left:2%;"
                            src="./image/otherlogo/whatsapp.png" /></a> +91 6380091001</br>
                    <a href="mailto:training@manvaasam.com"><img style="width:25px;margin-left:2%;margin-right:2%;"
                            src="./image/otherlogo/gmail.png" /></a>training@manvaasam.com
                </div>
            </div>
            <!--   Right Panel of Footer  -->
            <div class="col-sm-6">
                <div style="margin-top:5%">
                    <center>
                        <a href="https://t.me/manvaasam"><img target="_blank" style="width: 35px; margin-right: 8%" src="./image/otherlogo/telegram.png" /></a>
                        <a href="https://manvaasamteam.wordpress.com/2021/02/24/a-gratitude-note/"><img
                                style="width:35px;margin-right:8%;" src="./image/otherlogo/blog.png" /></a>
                        <a href="https://www.linkedin.com/in/manvaasam-team-/"><img style="width:35px;margin-right:8%;"
                                src="./image/otherlogo/linkedin.png" /></a>
                        <a href="https://www.facebook.com/107974564140846/posts/133516268253342/?substory_index=0"><img
                                style="width:35px;margin-right:8%;" src="./image/otherlogo/fb.png" /></a>
                        <a href="https://www.instagram.com/manvaasam_/"><img style="width:35px;margin-right:8%;"
                                src="./image/otherlogo/insta.png" /></a>
                        <a href="https://www.youtube.com/channel/UCTybxerFOmv86ekeIO1hUQw"><img style="width:45px;"
                                src="./image/otherlogo/youtube.png" /></a></br>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!--  End of footer Tab  -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNFWDS3" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
