<?php
    session_start(); // Initialize the session
	
    // Store the submitted data sent via POST method, stored
    // Temporarily in $_POST structure.
    $_SESSION['name'] = $_POST['user_name'];
    $_SESSION['email_address'] = $_POST['user_email_address'];
?>

<!DOCTYPE html>
<html>
<body>

<?php
    echo "Name is " . $_SESSION["name"] . ".<br>";
    echo "Email is " . $_SESSION["email_address"] . ".";
?>
<!-- Form for other details-->
<form method="POST" action="form3.php">
<input type="submit" value="Destroy session.">

</form>
</body>
</html> 