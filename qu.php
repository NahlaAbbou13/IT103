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
<?php
require('connexion.php');
if (isset($_REQUEST['question'])){
    $question = stripslashes($_REQUEST['question']);
    $conn = connect();
    $question = mysqli_real_escape_string($conn, $question); 
    $query = "INSERT into `questions` (question)
              VALUES ('$question')";

    if(mysqli_query($conn, $query)){
       echo "<div class='sucess'>
             <h3>Your question has been added successfully </h3>
             <p><a href='vqr.php'> Questions </a></p>
             <p><a href='ans.php'> Add answer </a></p>
			 </div>";
    }
}
else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">SPORT'EIRB</h1>
    <p class="box-title">Add question</p>
	<input type="text" class="box-input" name="question" placeholder="Add question" required />
    <input type="submit" name="submit" value="Share" class="box-button" />
</form>
<?php } ?>
</body>
</html>
