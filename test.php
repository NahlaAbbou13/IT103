


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
    
    <form action="<?php $_PHP_SELF; ?>" method="post">
    
 
 
     
 
    <form action="test.php" method="post">
        
    <h1>SPORT'EIRB

</h1>
<p>SIGN-IN</p>

        
        <p>
        <input  type="text;"   name="nom" >
         </p>
         <p>
        <input  type="text;"  name="prenom">
    </p>
    <p>
        <input  type="email;" name="email">
    </p>
    <p>
        <input  type="password" name="password" >
    </p>
    <p>
        <input  type="submit"   name="submit">
        <a href="testone.html"></a>
        </p>

        
        

        </form>



    
 


    </form>

    <?php
        session_start();
        if(isset($_POST["submit"])){
            include "connexion.php"; // Inclure le fichier
            $conn = connect(); // On se connecte à la base de données
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $sql = "INSERT INTO `connexionn` (`NOM`,`PRENOM`,`EMAIL`,`PASSWORD`)
             VALUES ('$nom','$prenom','$email','$password')";
            $result = $conn->query($sql);// On lance la requête
            if ($result === TRUE) {
                $_SESSION["inscription"] = true;
                echo "New record created successfully";
                header('Location:home.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    ?>

    </body>
   </html> 