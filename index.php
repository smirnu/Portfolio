<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="fullBody" id="fullBody">
        <div class="videoFrame">
            <video autoplay muted loop src="video/Fractal - 26169.mp4" id="fractalsBg">Your browser does not support HTML5 video</video>
        </div>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/5U7A4449.jpg" alt="" id="photoIcon">
                </a>
                <a class="navbar-brand" href="#smthbAout">Yulia Lyubarskaya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#fullBody">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#mySklls">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#prtfl">My Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.linkedin.com/in/yulia-lyubarskaya-63723598/" target="_blank">My Linkedin Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://github.com/smirnu?tab=repositories" target="_blank">My GitHub</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="source/Yulia Lyubarskaya CV.docx.pdf" target="_blank">Download CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#cntctD">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="smthAbout" id="smthbAout">
            <p>Hi there!<br> My name is Yulia and I am a Software Developer. I have a background of working as Quality Assurance Test Engineer for about 6 years. That means I have been in development for a while and I have seen how it works from inside. So as a result I decided to shift my career to my passion and become a professional Developer. <br>On the way to be a professional I have gone through a bunch of courses. I have learnt Java and passed Oracle's Java SE 8 Programmer I exam and I have just finished the Bootcamp from Just IT where I learnt a lot about web development.
            </p>
        </div>
        
        <div class="mySklls" id="mySklls">
            <span class="bg-dark" id="sprtLn">My skills so far</span>
            <ul class="listSkills">
                <li class="sklls"><img src="img/icons/icons8-java-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-javascript-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-python-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-html-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-css-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-php-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-sql-50.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-mongodb-48.png" alt=""></li>
                <li class="sklls"><img src="img/icons/icons8-git-50.png" alt=""></li>
            </ul>
            <p><a href="https://icons8.com/" target="_blank">CSS icon by Icons8</a></p>
        </div>
        <div class="portfolio" id="prtfl">
            <span class="bg-dark" id="sprtLn">My Projects</span>
            <div class="setPrjcts">
                <div class="Project" id="1">
                    <img class="imgForProj" src="img/movieReview.png" alt="movieReview" id="img1">
                    <p>It is <a href="filmReviews/index.html" target="_blank">The Movie Reviews</a> demo site, where you can find a review on the interested film for you.<br>Tech Side: HTML, CSS, JavaScript, NYTimes API, JSON.</p>
                </div>
                <div class="Project" id="2">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/bokingNewReservation.jpg" alt="bookingSys" id="img2">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/BokingListOfBookings.jpg" alt="bookingList">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/bokingDB.png" alt="bookingDB">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    
                    <p><a href="https://github.com/smirnu/bookingSystem2" target="_blank">The Booking System</a> for my friends.<br>Tech Side: Java, Spring Boot, MySQ, JavaScript, HTML, CSS, Bootstrap, Thymeleaf.</p>
                </div>
                <div class="Project" id="3">
                    <img class="imgForProj" src="img/quiz.png" alt="quiz" id="img3">
                    <p><a href="quizgame/quizgame.html" target="_blank">The QUIZ</a> I did it for fun and to show that I can work with JavaScript.<br>Tech Side: JavaScript, HTML, CSS.</p>
                </div>
                <div class="Project" id="4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="img/musicAcademy.png" alt="musicAcad" id="img4">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="img/musicAcademyEdit.png" alt="musicAcadEdit">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    
                    <p>The site for <a href="musicTutorialSiteMarek/index.php" target="_blank">The Music Academy</a> it is a dynamic website with functionality to change the content on the main page and to add new posts into the blog, using the admin page.<br>Tech Side: PHP, JavaScript, CSS, MariaDB (MySQL).</p>
                </div>
            </div>
        </div>
        <div class="contactDetails" id="cntctD">
            <span class="bg-dark" id="sprtLn">Contact Me</span>
            <form action="https://formspree.io/f/mnqlyqyz" method="POST" class="cntctMeForm" id="my-form">
               <div class="row form-grid">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" rows="6" placeholder="Your Message *" required=""></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" id="btnSubmEmail">
                </div> 
                <p id="my-form-status"></p>
            </form>
            <span class="bg-dark" id="sprtLn">Thank you for visiting</span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>