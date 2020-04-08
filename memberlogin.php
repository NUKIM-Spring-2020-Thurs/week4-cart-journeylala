<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memberlogin.php</title>
</head>
<body bgcolor='	#AFEEEE'>
<h2 >Member Login</h2>

<?php
 if(isset($_COOKIE["ID"]))
 {
     $user=$_COOKIE["ID"];
     echo "歡迎再度光臨".$_COOKIE["ID"];

     setcookie("ID","",time()-3600);

 }
 else{
     echo "歡迎新朋友";
     $user="";
 }
?>

<form action="memberlogincheck.php" method="POST">

<br>Member ID : <input type="text" name="id"><br><br>
Member PASSWORD : <input type="password" name="pwd"><br><br>
<input type="submit"><br>
</form>

</body>
</html>
