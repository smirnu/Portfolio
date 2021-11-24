<?php 
    session_start();
    // If session is not set then redirect to Login Page
    if(!isset($_SESSION['use'])) {
        header("Location:login.php");
    }

    include 'collectAllDataDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="fullBody">
        <h1><?php echo $_SESSION['use'];?> here you can change the txt and add posts to your blog</h1>
        <?php echo "<a href='logout.php'> Logout </a> ";?>
        <?php 
        foreach ($keys as $key) {
            echo '
            <div class="blocks">
               <form class="form" method="post">
                    <label for="title',$key,'">', $contentInArray[$key]['shortName'] ,'</label>
                    <input class="title" type="text" id="title',$key,'" name="title',$key,'" value="', $contentInArray[$key]['title'] ,'" readonly>
                    <label for="text',$key,'">Text</label>
                    <textarea id="text',$key,'" name="text',$key,'" class="text" rows="5" readonly>', $contentInArray[$key]['text'],'</textarea>
                    <div class="btnArea">
                        <input id="',$key,'" type="button" value="Edit" class="edit" onclick="editTextArea(0, this.id)">
                        <input id="',$key,'" type="submit" value="Submit" name="submitChanges" class="submit"> 
                        <input id="',$key,'" type="button" value="Cancel" class="cancel" onclick="cancelInput(0, this.id)">                   
                 </div>                
                </form>
            </div>';
        }
        // listen for button submit
        if (isset($_POST['submitChanges'])) {
            $keysPost = array_keys($_POST);
            $idInDB = $contentInArray[substr($keysPost[0], 5)]['idcontent'];
            
            // connect to DB and update the posted content
            include 'connecttodb.php';
            $sql = "UPDATE contenttiteltxt SET title = ?, text = ? WHERE idcontent = ?;";// SQL with parameters
            $stmt = $conn->prepare($sql); 
            $stmt->bind_param('ssi', $_POST[$keysPost[0]], $_POST[$keysPost[1]], $idInDB);
            $stmt->execute();
            include 'closedb.php';
        }
        
        ?>
        <div class="courses">
            <p> Courses </p>
            <ul>
            <?php 
                foreach ($keysCourses as $keyCourse) {
                    echo '
                        <li>
                            <div class="courseEdit">
                                <form action="" class="form" method="post">
                                    <label for="title', $keyCourse,'">Course</label>

                                    <input class="titleCourse" type="text" id="title',$keyCourse,'" name="title',$keyCourse,'" value="',$coursesInArray[$keyCourse]['title'],'" readonly>

                                    <label for="text',$keyCourse,'">Text</label>
                                    <textarea id="text',$keyCourse,'" name="text',$keyCourse,'" class="textCourse" rows="5" readonly>',$coursesInArray[$keyCourse]['text'],'</textarea>
                                    <div class="btnArea">
                                        <input id="',$keyCourse,'" type="button" value="Edit" class="editCourse" onclick="editTextArea(1, this.id)">
                                        <input id="',$keyCourse,'" type="submit" value="Submit" class="submitCourse" name="submitNewCourse">
                                        <input id="',$keyCourse,'" type="button" value="Cancel" class="cancelCourse" onclick="cancelInput(1, this.id)">                    
                                    </div>
                                    <label for="imagepath', $keyCourse,'">Name of the image</label>
                                    <input class="imagepathCourse" type="text" id="imagepath', $keyCourse,'" name="imagepath', $keyCourse,'" value="', $coursesInArray[$keyCourse]['imgpath'],'" readonly>
                                </form>
                            </div>
                        </li>';
                
                }
                // listen for button submit
                if (isset($_POST['submitNewCourse'])) {
                    $keysPost = array_keys($_POST);
                    $idInDB = $coursesInArray[substr($keysPost[0], 5)]['idcourse'];
                
                    // connect to DB and update the posted content
                    include 'connecttodb.php';
                    $sql = "UPDATE courses SET title = ?, text = ?, imgpath = ? WHERE idcourse = ?;";// SQL with parameters
                    $stmt = $conn->prepare($sql); 
                    $stmt->bind_param('sssi', $_POST[$keysPost[0]], $_POST[$keysPost[1]], $_POST[$keysPost[3]], $idInDB);
                    $stmt->execute();
                    include 'closedb.php';
                }
            ?>
            </ul>
        </div>
        <div class="blog">
        <p> The BLOG </p>
        <form class="historyBtns" method="post">
            <input type="button" value="Create New" class="create" id="createPost" name="createNew" onclick="newPlaceForBlog()">
            <input type="text" placeholder="Search for post by title" name="searchField" class="searchField">
            <input type="submit" class="search" name="searchBy">
        </form>
        <div id="placeForBlog"></div>
            
                <?php
                    if (isset($_POST['submitNewBlog'])) {
                        if (!empty($_POST['titleNewBlog']) && !empty($_POST['textNewBlog'])) {
                            $keysPost = array_keys($_POST);
                                
                                // connect to DB and update the posted content
                                    include 'connecttodb.php';
                                    $sql = "INSERT INTO blogs (blogTitle, blogText, blogimgPath) VALUES (?, ?, ?);";// SQL with parameters
                                    $stmt = $conn->prepare($sql); 
                                    $stmt->bind_param('sss', $_POST[$keysPost[0]], $_POST[$keysPost[1]], $_POST[$keysPost[3]]);
                                    $stmt->execute();
                                    include 'closedb.php';
                        }
                    }
                        
                    // bulding the list of existed posts
                    $pageName = 'personalPage.php';
                    include 'collectBlogDataDB.php';

                    echo "
                    <div class='blogs'>
                        <ul>";
                        while ($row = mysqli_fetch_assoc($blogsInArray)) {
                            echo '
                            <li>
                            <div class="BlogEdit">
                                <form action="" class="form" method="post">
                                    <label for="title', $countForEdUp,'"></label>

                                    <input class="titleBlog" type="text" id="title',$countForEdUp,'" name="title',$row['idblogs'],'" value="',$row['blogTitle'],'" readonly>

                                    <label for="text',$countForEdUp,'">Text</label>
                                    <textarea id="text',$countForEdUp,'" name="text',$row['idblogs'],'" class="textBlog" rows="5" readonly>',$row['blogText'],'</textarea>
                                    <div class="btnArea">
                                        <input id="',$countForEdUp,'" type="button" value="Edit" class="editBlog" onclick="editTextArea(2, this.id)">
                                        <input id="',$countForEdUp,'" type="submit" value="Submit" class="submitBlog" name="submitBlog">
                                        <input id="',$countForEdUp,'" type="button" value="Cancel" class="cancelBlog" onclick="cancelInput(2, this.id)">                    
                                    </div>
                                    <label for="imagepath', $countForEdUp,'">Name of the image</label>
                                    <input class="imagepathBlog" type="text" id="imagepath',$countForEdUp,'" name="imagepath',$row['idblogs'],'" value="', $row['blogimgPath'],'" readonly>
                                </form>
                            </div>
                            </li>';    
                            $countForEdUp++;
                        }
                    echo "
                        </ul>
                    </div>";
                    if (isset($_POST['submitBlog'])) {
                        $keysPost = array_keys($_POST);
                        $idInDB = (int)substr($keysPost[0], 5);

                        // connect to DB and update the posted content
                        include 'connecttodb.php';
                        $sql = "UPDATE blogs SET blogTitle = ?, blogText = ?, blogimgPath = ? WHERE idblogs = ?;";// SQL with parameters
                        $stmt = $conn->prepare($sql); 
                        $stmt->bind_param('sssi', $_POST[$keysPost[0]], $_POST[$keysPost[1]], $_POST[$keysPost[3]], $idInDB);
                        $stmt->execute();
                        include 'closedb.php';
                    }
                ?>
                
            
        </div>
    </div>
    
</body>
<script src="js/app.js" defer></script>
</html>