<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" 
content="width=device-width"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<style> .container {
     width: 500px; 
     border-color: #20B2AA; /* Цвет границы */ 
     border-style: solid; /* Стиль границы */ 
     background-color: white;
     padding: 30px; 
     margin-top: 10%;
     } 
     
</style> 
</head>
<body>
<body style="padding-top: 3em; background-color: #E0FFFF"> 
    <div align = "center" class="container">
<form name="feedback" method="POST" action="auth.php">
<div class="input-field"><input placeholder="Login" id="login" type="text" name="login" ></div>
<div class="input-field"><input placeholder="Password" id="pass" type="text" name="pass" ></div>
    <input  type="submit" class="btn" name="send" value="Send">
    <button type="reset" class="btn">Clear form</button>
</form>
</div>

<?php
if (isset($_GET["submit"])) {

header('Location: auth.php'); 
exit;
session_unset();
session_destroy();
}
?>
</body>
</html>
