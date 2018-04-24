


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>

body{


background-image: url('hng.jpg');
background-attachment: fixed;
background-size: cover;


}

.h{
text-align: center;
font-size: 50px;
font-family: catamara;
color:black;
margin-top: 100px;

}

.time{
text-align: center;

color:black;
margin-top: 100px;
font-size: 20px;
}


.date{
text-align: center;
color: black;
margin-top: 100px;
font-size: 25px;
}




</style>
<body>
 <h1 class="h">
     HNG INTERNSHIP 4.0
 </h1>






<p class="date">
Date: <span>
<?php

echo date('y/m/d');

?>
</span>

</p>



<p class="time">
Time:
<span>
<?php
echo date("h:i:sa");
?> 
</span>
</p>




    
</body>
</html>