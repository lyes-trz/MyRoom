<?php
$tt = NULL;

      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "gites touristiques";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}       
         
       
       if (isset($_POST['delete'])) 

        {   



             $N = $_POST['N'];
             $name = $_POST['name'];
             
            $mysqli = new MYSQLI ("localhost", "root","","gites touristiques");
            $resultSet = NULL;
            $resultSet = $mysqli->query("SELECT * FROM reservation WHERE  N = $N and lname like '%$name%' ");

          if($resultSet->num_rows > 0)
              {
                      while ($rows = $resultSet->fetch_assoc()) 
                       {      $Ne = $rows['N'];
                              $tt = "Reservation is deleted";
                              $t= "DELETE FROM reservation WHERE  N =$Ne ";
            
                             if ($conn->query($t) === TRUE) {
   
                            } else {
                              echo "Error: " . $t . "<br>" . $conn->error;
                                   }

                     

                      }
               
             }
            
         else{
            $tt = "Number of reservation or Last name is incorrect";
          } 


           
       }
         
       
       $conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
         <title>Gîte Touristiques</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <meta charset="utf-8">
          <meta http-equiv="refresh" content="100">
         <link rel="stylesheet" type="text/css" href="css/css4.css">
         <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
         <link rel="stylesheet" type="text/css" href="web-fonts-with-css/css/fontawesome-all.min.css">
         <link rel="shortcut icon" href="assets/demo/demo9/media/img/logo/4.ico" />
         
  </head>     
         
<body>   

  

  <div>
          <a  href="home.php" style="text-decoration:none">
                    <p class="logo">Gites Touristiques</p>

          </a>
     <p style="text-align : center; font-size: 30px; margin-top: 200px;color: #734CEA"><?php echo $tt; ?></p>  
                    
                      
 </div>




 









 
</body>
</html>