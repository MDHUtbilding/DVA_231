<?php
    session_start(); // Initialize the session
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
        <link rel="stylesheet" type="text/css" href="../CSS/signin.css">
    </head>
<body>

<form method="POST" action="admin.php">
    <pre>
        Name: <input type="text" name="user_name">
    </pre>
      
    <pre>
        Email Address: <input type="text" name="user_email_address">
    </pre>
           
    <input type="submit" value="Next">
</form>

</body>
</html>