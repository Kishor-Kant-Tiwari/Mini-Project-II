<<!DOCTYPE html>
<html>
<head>
  
<title>Contact us Details</title>
<link rel="icon" href="./Images/logo.png" type="image/x-icon">
<script>
  function preventBack() {
    window.history.forward();
    
  }
  setTimeout("preventBack()", 0);
  window.onunload = function () { null };
</script>
<style>
.bg{
  background-image: url("b.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.head{
    text-align: center;
    background-color: seashell;
    border: 2px solid red;
    border-radius: 50px;
    margin: -9px -6px;
    padding: 20px 40px;
    color: green;
}
.head img
{
  float: left;
  width: 97px;
  margin: -5px -20px;
    
}
.logoutlbl{
  position: fixed;
  right: 10px;
  top: 161px;
  padding: 6px 4px;
  background-color: rgb(137, 252, 92);
  cursor: pointer;
  border-radius: 10px;
  text-decoration: none;


}
.logoutlbl1{
  position: fixed;
  right: 81px;
    top: 162px;
  padding: 6px 4px;
  background-color: rgb(137, 252, 92);
  cursor: pointer;
  border-radius: 10px;
  text-decoration: none;


}
a{
  text-decoration: none;
}

.logoutlbl:hover
{
  background-color: rgb(191, 240, 158);
  color: red;
}

</style>
</head>
<body bgcolor="lightblue">

  <header Class="head">
  <img src="./Images/logo.png" alt="logo">
    
    <h1> Welcome to MyOnlineMeal </h1>
  </header>
  
  <div class="bg">
    <form  method="post">
  
    <h1 style="text-align: right; color: pink;"><button type="Button" class="logoutlbl"><a href="Admin.html">Log Out</button></h1></a>
  <h1 style="text-align: right; color: pink;"><button type="Button" class="logoutlbl1"><a href="validate2.php">Order Details</button></h1></a>
</form>
<h1 style="text-align: center; color: black;">Contact us Details</h1>
<p style="border: 2px solid darkblue; border-radius: 20px; text-align: center;">
<?php

echo "<html><body><table>\n\n";
$f = fopen("Contactus.txt", "r");
while (($line = fgetcsv($f)) !== false) 
{
  echo "<tr>";
  foreach ($line as $cell) 
  {
    echo "<td>" . htmlspecialchars($cell) . "</td>";
        
  }
    echo "</tr>\n";
      
}
fclose($f);
echo "\n</table></body></html>";





  	
		
    
		
		

?>

</p>
</div>
