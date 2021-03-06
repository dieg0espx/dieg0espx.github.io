<?php
    if(isset($_REQUEST['submission'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $txt = $_REQUEST['message'];

        $msg = " Name: " .$name. "\n Email: " . $email. "\n Message: " . $txt;

        mail("espinosa9mx@gmail.com","New Message from portfolio ",$msg);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Diego Espinosa | Porfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link href="styles.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <script>
        function showConfirmation() {
            alert("Message submitted successfully !");
        }
    </script>
    <!-- MOBILE BUTTON -->
    <div class="mobile-button">
        <a class="mobile-button" href="mailto:espinosa9mx@gmail.com"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
          </svg> 
        </a>
    </div>
    <!-- TOP NAV -->
    <div class="top-nav">
        <nav id="top-nav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <H1> Diego Espinosa </H1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#codingSkills"> Coding Skills </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education"> Education </a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#workExperience"> Work Experience </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contactMe"> Contact Me </a>
                    </li>  
                    <li class="nav-item">
                      <a class="nav-link" href="files/Resume-DiegoEspinosa.pdf"> Resume </a>
                    </li>  
                  </ul>
                </div>
              </div>
        </nav>
    </div>
    <!-- COVER -->
    <div class="cover">
        <div class="container-md">
            <div class="row">
                <div class="col-md-7" id="txt-area">
                   <h1><span> Hey, </span><span style="color:rgb(0,122,255); font-weight: 300;"> It's me.</span></h1>
                   <h1> a Software Developer.</h1>
                   <br>
                   <span><a href="#contactMe"> Contact Me</a><a id="resume" href="files/Resume-DiegoEspinosa.pdf"> Download Resume</a></span>
                </div>
                <div class="col-md-5">
                   <img id="coverImg" src="images/cover.png">
                </div>
            </div>
       </div>
    </div>
    <div class="contactme-button">
        <a href="#contactMe"> Contact Me</a>
    </div>

    <!-- ABOUT ME -->
    <div class="profile">
        <div class="container-sm">
            <h1> About Me </h1>
            <p> Innovative, task-driven professional with 2+ years of experience in web design and development across diverse industries. Equipped with a record of success in consistently identifying and providing the technological needs of companies through ingenious innovation. Proficient in developing databases, creating user interfaces, writing and testing codes, troubleshooting simple/complex issues, and implementing new features.</p>
        </div>
    </div>

    <hr id="codingSkills">
    <!-- CODING SKILLS -->
    <div class="title" > <h1> Coding Skills </h1></div>
    <div class="codingSkills">
        <div class="two-columns">
            <div class="row">
                <div class="col">
                    <div class="languages">
                        <div class="row">
                            <div class="col">
                                HTML
                            </div>
                            <div class="col">
                                CSS
                            </div>
                            <div class="col">
                                PHP
                            </div>
                            <div class="col">
                                MYSQL
                            </div>
                            <div class="col">
                                JAVASCRIPT
                            </div>
                            <div class="col">
                                BOOTSTRAP
                            </div>
                            <div class="col">
                                SWIFT
                            </div>
                            <div class="col">
                                JAVA
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <img src="images/codingSkills.png">
                </div>
            </div>
        </div>
    </div>

    <hr id="education">
    <!-- EDUCATION -->
    <div class="title"> <h1> Education </h1></div>
    <div class="education">
        <div class="two-columns">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <h1> Universidad Modelo </h1>
                        <p> Mechatronics Enegineering </p>
                        <p> Yucatan, Mexico </p>
                        <p> August 2017 - Feb 2019 </p>
                        <p> HTML | CSS | PHP | MYSQL | C++ | Robotics Team </p>
                    </div>
                    <div class="wrapper">
                        <h1> CICCC </h1>
                        <p> Web and Mobile App Development </p>
                        <p> Vancouver, Canada </p>
                        <p> September 2019 - September 2021 </p>
                        <p> HTML | CSS | SWIFT | JAVA | KOTLIN </p>
                    </div>
                </div>
                <div class="col">
                    <img src="images/education3.png">
                </div>
            </div>
        </div>
    </div>

    <hr id="workExperience">
    <!-- WORK EXPERIENCE -->
    <div class="title"> <h1> Work Experience </h1></div>
    <div class="workExperience">
        <div class="two-columns">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <h1> Web Development (Front-End) </h1>
                        <p> eRobotix </p>
                        <p> Yucatan, Mexico </p>
                        <p> March 2018 - April 2019 </p>
                        <p> HTML | CSS</p>
                    </div>
                    <div class="wrapper">
                        <h1> Web & App Development </h1>
                        <p> TTF SCAFFOLDING </p>
                        <p> Vancouver, Canada </p>
                        <p> July 2020 - Present </p>
                        <p> HTML | CSS | PHP | MYSQL | JAVASCRIPT | SWIFT | WORDPRESS </p>
                    </div>
                </div>
                <div class="col">
                    <img src="images/workExperience.png">
                </div>
            </div>
        </div>
    </div>

    <hr id="contactMe">
    <!-- CONTACT ME -->
    <div class="title"> <h1> Contact Me </h1></div>
    <div class="contactMe">
       <div class="two-columns">
           <div class="row">
               <div class="col">
                    <div class="wrapper">
                       <h1> Email </h1>
                       <a href="mailto:espinosa9mx@gmail.com">espinosa9mx@gmail.com</a>
                   </div>
                   <div class="wrapper">
                        <h1> Phone </h1>
                        <a href="tel:+16047808639"> +1 (604) 780 8639 </a>
                    </div>
                    <div class="wrapper">
                        <h1> Phone </h1>
                        <a href="tel:+529999088639"> +52 (999) 908 8639</a>
                    </div>
                    <div class="wrapper">
                        <h1> LinkedIn </h1>
                        <a href="https://www.linkedin.com/in/diego-espinosa-a3879022a"> Diego Espinosa</a>
                    </div>
                    <div class="wrapper">
                        <h1> Instagram </h1>
                        <a href="https://www.instagram.com/dieg0espx/">@dieg0espx</a>
                    </div>  
               </div>
               <div class="col">
                <form class="contact-form" id="form" onsubmit="showConfirmation()">
                    <p> New Message </p>
                    <input type="hidden" name="submission">
                    <input type="text" name="name" placeholder="Name / Company Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="tel" name="phone" placeholder="Phone Number">
                    <textarea name="message" rows="3" cols="50" placeholder="Message"></textarea>
                    <input id="btn-submit" type="submit" value="Submit">
                </form>
               </div>
           </div>
       </div>
    </div>
    

    <!-- Bootstrap Tags -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>