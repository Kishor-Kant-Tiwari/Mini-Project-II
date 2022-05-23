<<!DOCTYPE html>
<html>
<head>
  
<title>ADMIN</title>
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
  margin: 9px -2px;

}
.head{
    text-align: center;
    background-color: seashell;
    border: 2px solid red;
    border-radius: 50px;
    margin: 1px -2px;
    padding: 20px 40px;
    color: green;
}
.head img
{
  float: left;
  width: 97px;
  margin: -5px -20px;
    
}



</style>
</head>
<body bgcolor="lightblue">
    <header class="head">
    <img src="./Images/logo.png" alt="logo">
    
  <h1> Welcome to MyOnlineMeal </h1>
  
  
  </header>
    

<div class="bg">
<?php
$email=$_POST['userName'];
$psw=$_POST['password'];
$flag=0;
$s=array();
$file = fopen("admin.txt", 'r');
while(!feof($file))
{
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),1,null);
  if ($str_arr[0]==$email and $str_arr[1]==$psw)
  {
    echo "<h1><center>Hello Kishor Kant Tiwari</center></h1>";
    echo "Please Click here to View Order Details <a href=Validate2.php>Order Details</a><br>";
    echo "Please Click here to View Contact us Details <a href=Validate3.php>Contact us Details</a><br>";
    $flag=1;
    break;
  }

  
  

  
}


    
?>



<?php

    

    
    
    

if ($flag==0){
  echo " Invalid Login ID and Password<br>";

  echo "Please Click Here to Login Again <a href=Admin.html>Admin Login</a>";
    
  fclose($file);
}  
?>
</div>
</body>
</html>