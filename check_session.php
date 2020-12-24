<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<p> SESSION</p>
<?php
echo $_SESSION["name"];
?>
</body>
<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
?>
</html>

