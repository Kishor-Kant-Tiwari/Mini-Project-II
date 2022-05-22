<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery services | myonlinemeal.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media ="screen and (max-width:1020px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        #services .box{
            border: 2px solid brown;
    padding: 50px;
    margin: -10px 50px;
    border-radius: 28px;
    background-color: rgb(244, 254, 254);
    margin-bottom: 54px;
	
        }
		#home::before{
    content: "";
    background: url('./Images/bg3.jpg') no-repeat center center/cover;
    position: absolute;
    height: 488px;
    width: 100%;
    z-index: -1;
    opacity: 1;
    top: 0px;
    left: 0px;
	
}
    </style>
</head>

<body>
    
    <section id="home" >
        <h1 class="h-primary">Welcome to MyOnlineMeal</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et harum cupiditate odit labore vitae.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum enim magnam delectus excepturi reiciendis.</p>
        
    </section>
    <?php

$name=$_POST['name1'];
$email=$_POST['email1'];
$phone=$_POST['phone1'];

$message=$_POST['Message'];





$file = fopen("Contactus.txt", 'a+');

$f=fopen("jobappnum1.txt","r");
$j_a_n=fread($f, filesize("jobappnum1.txt"));
fclose($f);
$f=fopen("jobappnum1.txt","w");
$text = $name."::".$email."::". $phone."::".$message."::\r\n";

	echo "<h2><center>Thank you! you are Successfully Registered Our Support Team Will Contact you Shortly<center></h2><br>";
	echo "<h2><center>Your Token Number is $j_a_n</center></h2><br>";

	$j_a_n=$j_a_n+1;
	fwrite($f,$j_a_n);
	fwrite($file, $text);

	fclose($file);
	fclose($f);
	echo "<h2><center><a href= index.html>Go to Home Page</a><center></h2>";
?>
    
</body>
</html>