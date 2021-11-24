<?php
    include 'connecttodb.php';
    // select all content for the page
    $sql = "SELECT * FROM contenttiteltxt"; // SQL with parameters
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    // collect info from db for content
    $contentInArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $contentInArray[]= $row; // $row['idcontent']
    }
    $keys = array_keys($contentInArray);

    // collect info from DB for section courses
    $sql = "SELECT * FROM courses"; // SQL with parameters
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    $coursesInArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $coursesInArray[]= $row; // $row['idcontent']
    }
    $keysCourses = array_keys($coursesInArray);
    // // close connection to db
    // mysqli_close($conn);
    include 'closedb.php';
?>