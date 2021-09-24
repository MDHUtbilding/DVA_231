<?php
    session_start(); // Initialize the session
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST" action="form2.php">
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