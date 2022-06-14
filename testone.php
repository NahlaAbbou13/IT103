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
 
    <form action="testone.php"  method="post">
            
    <p>
        <input type="text" name="nom" placeholder="nom" >
    </p>
    <p>
        <input type="password" name="password" placeholder="password" >
    </p>
    <p>
        <input type="submit" name="connexion">
    </p>
         
        </form>
        
        
        
        

    
 

 </body>
 

 <?php
    if(isset($_POST["connexion"])){

        $nom = $_POST["nom"];
        $password=$_POST["password"];
        
        include "connexion.php"; // Inclure le fichier
        $conn = connect(); // On se connecte à la base de données

        $sql = "SELECT * FROM `connexionn` WHERE `NOM` = '$nom' ";
        $result = $conn->query($sql);// On lance la requête
        if ($result->num_rows > 0) {
            // on affiche chaque ligne
            while($row = $result->fetch_assoc()) {
                if  ($password==$row["PASSWORD"] ) { 
                    $_SESSION["pseudo"] = $nom;
                    $_SESSION["islog"] = true;
                     
                     
                
                 header('Location: home.php');
                 break;
                 exit();
                 

            }
         else {
            echo "0 results";
        }
    }
}
    }
    ?>

</html> 





