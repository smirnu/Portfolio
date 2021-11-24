<?php  session_start();
// session starts with the help of this function 

// Checking whether the session is already there or not if 
// true then header redirect it to the home page directly 
if(isset($_SESSION['use'])) {
    header("Location:personalPage.php");
}
// it checks whether the user clicked login button or not
if(isset($_POST['login'])) { 
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    include 'connecttodb.php';

    $sql = "SELECT * FROM users WHERE username=?"; // SQL with parameters
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("i", $user);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $userinfo = $result->fetch_assoc(); // fetch data 
    
    if ($user == $userinfo["username"] && password_verify($pass, $userinfo["password"]))   {    

        $_SESSION['use'] = $userinfo["name"];
        // On Successful Login redirects to 
        header("Location:personalPage.php");
    } else {
        echo "invalid UserName or Password";        
    }
    include 'closedb.php';
}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Page   </title>
</head>

<body>

    <form  action="" method="post">
	    <input type="email" placeholder="Username email *" name="user" id="email">
    	<input type="password" placeholder="Password *" name="pass" autocomplete="on" id="pwd1">
	    <input type="submit"  name="login" value="Login" class="btn">
        <p id="errorPlace"></p>
    </form>
    
</body>
</html>
