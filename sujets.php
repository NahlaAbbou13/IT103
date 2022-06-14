<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
        <style>
                input[type=text] {
                   width: 100%;
                   padding: 12px 20px;
                   margin: 8px 0;
                   box-sizing: border-box;
                   border: 2px solid red;
                   border-radius: 4px;
                }
                body {
                    background-image: url("sportt.jpg");
                }
                
                h1 {
                    olor: black;
                    text-shadow: 1px 1px 2px white, 0 0 25px red, 0 0 5px darkblue;
                    text-align: center;
                }
                
                p {
                    color: black;
                    text-shadow: 1px 1px 2px white, 0 0 25px green, 0 0 5px darkblue;
                    text-align: center;
                }
                ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
                </style>
 </head> 
 <?php
  if(isset($_SESSION["islog"])!= true) {
    header('Location: testone.php');
  }
  ?>
<body>

<h1>SPORT'EIRB</h1>
<h1>Let's try</h1>
<p>
  
  <?php
    if(isset($_SESSION["islog"]) && isset($_SESSION["islog"])== true) {
      echo "<a href='#'> Bonjour ". $_SESSION["pseudo"] ."</a>";
    }
    ?>
</p> 

<ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="qu.php">Add a question</a></li>
        <li><a href="ans.php">Add a response</a></li>
        <li><a href="vqr.php">View questions and responses</a></li>
        

</ul>



</body>
</html>