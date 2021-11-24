<?php
    include 'connecttodb.php';
    $limit = 5;
                    
    if (isset($_GET["page"] )) {
        $page  = $_GET["page"]; 
    } else {
        $page = 1;
    } 

                    $record_index= ($page-1) * $limit;

                    // If user added to search by
                    if (isset($_POST['searchBy'])) {
                        $searchBy =  $_POST['searchField'];
                        $searchBy = "%$searchBy%";
                    } else {
                        $searchBy = '%';
                    }

                    $sql = 'SELECT * FROM blogs WHERE blogTitle like ? LIMIT ?, ?'; // SQL with parameters
                    $stmt = $conn->prepare($sql); 
                    $stmt -> bind_param('sii', $searchBy, $record_index, $limit);
                    $stmt -> execute();
                    $blogsInArray = $stmt->get_result(); // get the mysqli result
                    $countForEdUp = 0;
                    
                    
                    $sql2 = 'SELECT COUNT(*) FROM blogs WHERE blogTitle like ?'; 
                    $retval1 = $conn -> prepare($sql2);
                    $retval1 -> bind_param('s', $searchBy);
                    $retval1 -> execute();
                    $row = mysqli_fetch_assoc($retval1 -> get_result());
                    $total_records = $row['COUNT(*)'];
                    $total_pages = ceil($total_records / $limit);  
                    
                    $before = $page-1 > 0 ? $page-1 : 1;
                
                    // creating page panel, where you can choose the page
                    // variable pageName is coming from the main page with its name
                    echo "
                    <ul class='pagination'>
                        <li><a href='",$pageName,"?page=", $before,"' class='button'>PREV</a></li>"; 
                        for ($i=1; $i<=$total_pages; $i++) {  
                            if ($i == $page) {
                                echo "<li><a href='",$pageName,"?page=",$i,"' style='text-decoration: underline'>",$i,"</a></li>";} 
                            else {
                                echo "<li><a href='",$pageName,"?page=",$i,"'>",$i,"</a></li>";
                            }
                
                        }
                        $after = $page+1 > $total_pages ? $page : $page+1;
                        echo "
                        <li><a href='",$pageName,"?page=", $after,"' class='button'>NEXT</a></li>
                    </ul>";                
?>