 
 
  
 <!DOCTYPE html>
 <html lang="en">
 
 
 <head>
	<title>Health & Drugs Pharmacy</title>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="icon" type="image/x-icon" href="images\MicrosoftTeams-image (2).png">
	 <link rel="stylesheet" href="style.css">
	 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

#button-send {
  background-color: rgb(6, 61, 240);
  color: white;
  padding: 7px 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 77%;
}


</style>

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
            
            
            
             </ul>
        </nav>
      
		 <br>
		 <img src="images\ae6df02b-4569-4649-9979-c792ac9e9ffa.jpg" width="30px" height="30px" >
		 <img src="images/menu.png" class="menu-icon">
	 </div>
 

<br><br><br><br>



<main>

<div id="all-logi2n" style="width: 40%; margin-left: 30%;">

<img src="images\istockphoto-1317688245-640x640.jpg" alt="" style="border-radius: 200px; width: 400px; ">
<br><br>

<form action="process/get_login.php" method="POST">
<label for="fname" style="color: rgb(6, 61, 240);">Email</label><br>
<input name="Email" type="email" required id="fname" placeholder="Enter your email" style="width: 400px;">

<br><br>

<label for="fname" style="color: rgb(6, 61, 240);">Password</label><br>
<input name="password" type="password" required id="fname" placeholder="Enter your password" style="width: 400px;">
<br>
<!-- <button > Submit</button> -->
<input  type="submit" id="button-send">


</form>


</div>

    
</main>



</body>
</html>