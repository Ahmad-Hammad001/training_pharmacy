<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>


<div class="header">
	
  <div class="container">
  <div class="navbar">
	     <div class="logo">
		     <img src="images\MicrosoftTeams-image (2).png" width="140px" >
		 </div>
		 <nav>
		     <ul id="menuitems">
			   <li><a href="Index.php" >Home</a></li>
			 <li><a href="login.php">Login</a></li> 

             <a href="qustion.php">
<button>qustion</button></a>

<a href="delete.php">
<button>delete</button></a>

<a href="insert.php">
<button>insert</button></a>
			  
			 
			  </ul>
		 </nav>
        </div>
        <br><br><br><br><br><br>

<?php
if (!empty($_GET))
{
if ($_GET['message'])
 {echo $_GET['message'];}
}
   ?>

   
<form action="process/get_insert.php" method="POST" style="margin-left: 45%; padding-top: 15%;">
 
        <input type="text" name="name" placeholder="name" style="width: 50%; border-radius: 4px ;"><br><br>
        <input type="text" name="price" placeholder="price" style=" border-radius: 4px ;"><br><br>
            <select name="mnue" style="width: 20%;">   
            <option value="1">Amman</option>
            <option value="2">Irbid</option>
            <option value="6">Ma'an</option>
            <option value="4">Zarqa</option>
            <option value="5">Al Karak</option>
            <option value="3">Aqaba</option>
          </select>
         
          <button type="submit"  style="width: 20%;"><i>submit </i></button>
    </form>
  </div>


</body>
</html>