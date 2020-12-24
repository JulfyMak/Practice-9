<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<p> SESSION </p>
<?php
$_SESSION["name"] = "Vasia";
echo "Session variables are set.";
header('Refresh: 2; URL=http://localhost/check_session.php');
  exit;
?>

</body>
</html>
