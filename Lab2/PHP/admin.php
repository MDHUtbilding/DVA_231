<?php
    session_start(); // Initialize the session
	
    // Store the submitted data sent via POST method, stored
    // Temporarily in $_POST structure.
    $_SESSION['name'] = $_POST['user_name'];
    $_SESSION['email_address'] = $_POST['user_email_address'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/admin.css">
        <title>Admin</title>
    </head>
    <nav>
        <div class="homepage">
            <ul>
                <li><a href="../HTML/index.html">Home Page</a></li>
            </ul>
        </div>
    </nav>
    <body>
        <div class="container">
            <div class="item">
                <h1>Welcome Admin</h1>
<?php
    echo "Name is " . $_SESSION["name"] . ".<br>";
    echo "Email is " . $_SESSION["email_address"] . ".";
?>
            </div>

            <div class="content">
                <form>
                    <label for="txtfile">Enter your textfile here: </label><br><br><br>
                    <input type="file" id="newsfile" name="newsfile"><br><br>
                    <input type="submit" id="Apply" name="submitbtn">
                </form>
            </div>
        </div>
        
<!-- Form for other details-->
<form method="POST" action="../PHP/form3.php">
<input type="submit" value="Destroy session.">

</form>
       
    </body>
</html>