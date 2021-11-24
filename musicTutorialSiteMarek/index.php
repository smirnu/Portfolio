<?php
    include 'collectAllDataDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Music Academy</title>
</head>
<body>
    <div class="fromTopToBottom">
        <div class="navbar sticky-top" id="navbar">
            <div class="logo">
                <img id="imgLogo" src="img/music-1368896_640.png" alt="Logo">
            </div>
            <div class="menuList" id="myMenu">
                <ul>
                    <li class="item"><a href="#about">ABOUT</a></li>
                    <li class="item"><a href="#peopleSpeaks">TESTIMONIALS</a></li>
                    <li class="item"><a href="#lessons">LESSONS</a></li>
                    <li class="item"><a href="#blog">BLOG</a></li>
                    <li class="item"><a href="#Contact">CONTACT</a></li>
                </ul>
            </div>
            <div class="hamburger" id="myHamburger">
                <a href="javascript:void(0);" class="icon" onclick="respMenu()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div><a href="personalPage.php" target="blank"><img src="img/icons8-user-32.png" id="iconSettings" alt="Settings"></a></div>
        </div>
        <div class="cntcts" id="cntcts"></div>
        <div class="restWithoutBar">
            <video autoplay muted loop id="videoBack">
               <source src="video/Guitarist - 139.mp4" type="video/mp4">
            </video>
            <div class="containerOnVideo">
                <?php
                    echo '
                    <h1>', $contentInArray[$keys[0]]['title'] ,'</h1>
                    <p>', $contentInArray[$keys[0]]['text'] ,'</p>
                    <button type="submit"><a href="#Contact">Enroll</a></button>';
                ?>
            </div>
            <div class="header">
                <div class="mainContent" id="about">
                    <?php 
                        echo '
                        <h1>', $contentInArray[$keys[1]]['title'] ,'</h1>';
                    ?>
                    
                    <div class="blockAbout">                        
                        <div class="photoFrame">
                            <img src="img/Dialogue.jpg" alt="Marek Bero">
                        </div>
                        <?php 
                            echo '<p>', $contentInArray[$keys[1]]['text'] ,'</p>';
                        ?>
                        <div class="photoFrame" id="photoAbout">
                            <img src="img/IMG_3313.JPG" alt="Marek Bero">
                        </div>
                    </div>
                    <div class="blockTestimonials" id="peopleSpeaks">
                        <h1>What People Are Saying About Us</h1>
                        <div class="scrolling-wrapper">
                            <div class="myCard"><h2>Card</h2></div>
                            <div class="myCard"><h2>Card</h2></div>
                            <div class="myCard"><h2>Card</h2></div>
                            <div class="myCard"><h2>Card</h2></div>
                          </div>
                    </div>
                    <div class="blockLessons" id="lessons">
                        <?php
                            echo '<h1 class="whtHOne">', $contentInArray[$keys[2]]['title'] ,'</h1>
                            <p>', $contentInArray[$keys[2]]['text'] ,'</p>';
                        ?>
                        <div class="coursesContainer">
                            <?php
                                foreach ($keysCourses as $keyCourse) {
                                    echo '
                                    <div class="course">
                                        <h3 class="courseTitle">',$coursesInArray[$keyCourse]['title'],'</h3>
                                        <p class="courseText">',$coursesInArray[$keyCourse]['text'],'</p>
                                        <img id="guiter10" src="', $coursesInArray[$keyCourse]['imgpath'],'" >
                                    </div>';
                                }  
                            ?>
                        </div>        
                    </div>
                    <div class="blockBlog" id="blog">
                        <?php
                            echo '<h1 class="whtHOne">', $contentInArray[$keys[3]]['title'] ,'</h1>';
                        ?>
                        <div class="topicArea">
                            <?php
                                echo '<p>', $contentInArray[$keys[3]]['text'] ,'</p>';
                            ?>
                        </div>
                        <div class="showAreaBlogs">
                            <?php 
                                echo "
                                <div class='blogs'>
                                    <ul>";
                                        $pageName = 'index.php';
                                        include 'collectBlogDataDB.php';
                                        while ($row = mysqli_fetch_assoc($blogsInArray)) {
                                            echo '
                                            <li>
                                                <div class="blogShow">
                                                    <h3 class="blogTitle">',$row['blogTitle'],'</h3>
                                                    <p class="blogText">',$row['blogText'],'</p>
                                                    <img id="guiter10" src="',$row['blogimgPath'],'" >
                                                    <p class="createDate">',$row['blogData'],'</p>
                                                </div>
                                            </li>';
                                        }
                                    echo "</ul>
                                </div>";
                                
                            ?>
                        </div>
                    </div class="blogContent">
                    <div class="contctDtls" id="Contact">
                        <h1 class="whtHOne">Contact Us</h1>
                        <form action="https://formspree.io/f/mnqlyqyz" method="POST" class="cntctMeForm" id="my-form">
                            <div class="row form-grid">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required="">
                                    </div>
                                    <div class="form-group">
                                         <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea name="txtMsg" class="form-control" rows="6" placeholder="Let us know If you would like to enroll and we will be in touch with you *" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="btnArea">
                                <input type="submit" class="btn btn-primary" id="btnSubmEmail">
                            </div> 
                            <p id="my-form-status"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p><a href="https://icons8.com/" target="_blank">CSS icon by Icons8</a></p>
            </div>
        </div>
        
    </div>    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/appIndex.js"></script>
</body>
</html>