<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog.php</title>
</head>
<?php
session_start(); 
if ( isset($_POST["Item"]) ) 
{
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"]; 
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "10吋變形平板";
         $_SESSION["Price"] = 12000;
         break;
      case "S002":
         $_SESSION["Name"] = "15.6吋筆記型電腦";
         $_SESSION["Price"] = 27000;
         break;
      case "S003":
         $_SESSION["Name"] = "iPhone手機";
         $_SESSION["Price"] = 21000;
         break;   
   }  
   header("Location: savecart.php");  
}
?>
</head>
<body bgcolor="#F0BBFF" text="#003377" >
<center>
<div style="background-color:#B088FF;padding:10px;margin-bottom:5px;width:1000px">
<form action="catalog.php" method="post">
<span style="font-size:larger;">選擇您的商品: </span>
<select name="Item">
  <option value="S001">10吋變形平板 - $12000</option>
  <option value="S002">15.6吋筆記型電腦 - $27000</option>
  <option value="S003">iPhone手機 - $21000</option> 
</select>
<input type="text"  placeholder='請輸入欲購買數量' name="Quantity" />
<input type="submit" value="訂購"/>
</form>
</div>
<br><a href="catalog.php">商品目錄</a>
<a href="shoppingcart.php">檢視購物車</a>
<a href="logout.php">登出系統</a>
</center>
</body>
</html>