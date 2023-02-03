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


    <style>
            table, th, td{
                        border: 1px solid blue;
                        
                        
                    }
                    td{
                        text-align: center;
                    }

                    
        </style>
<table style="margin-left: 17%;width: 70%; ">
            <tr>
            <th>Name</th>
            <th>price</th>
            <th>Delete?</th>
            </tr>

            
           <?php
           include("config/db_config.php");

            $id = "SELECT * FROM product";
            $rsult = mysqli_query($connection, $id);
           if(mysqli_query($connection, $id)){
               while($data = mysqli_fetch_assoc($rsult)) {
                   $select_id = $data['id'];
                   echo "<tr>";
                   echo "<td>$data[name]</td>";
                   echo "<td>$data[price]</td>";
                   echo "<td>"."<a href='process/get_delete.php?id=$select_id'>DELETE</a>"."</td>";
                   echo "</tr>";
               }
            }
          ?>

  </table>
  </div>
</body>
</html>