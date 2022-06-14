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
                    color: black;
                    text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px darkblue;
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
 
<body>

<h1>SPORT'EIRB

</h1>

<p>
  
<?php
  if(isset($_SESSION["islog"]) && isset($_SESSION["islog"])== true) {
    echo "<a href='#'> Bonjour ". $_SESSION["pseudo"] ."</a>";
  }
  ?>

</p>
<ul>
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="sujets.php">Sujets</a></li>
        <li><a href="testone.php">Connexion</a></li>
        <li><a href="test.php">S'inscrire</a></li>
        <li><a href="deconnexion.php">Deconnexion</a></li>

            


</ul>
</body>


</html>
