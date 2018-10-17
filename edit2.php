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
         
       
       if (isset($_POST['submit'])) 

        {   



             $N = $_POST['N'];
             $date1 = $_POST['date1'];
             $date2 = $_POST['date2'];
             $adultes = $_POST['adultes'];
             $enfants = $_POST['enfants'];
             $room = $_POST['room'];
             $fname = $_POST['fname'];
             $lname = $_POST['lname'];
             $email = $_POST['email'];
             $tele = $_POST['tele'];
            $mysqli = new MYSQLI ("localhost", "root","","gites touristiques");
            $resultSet = NULL;
            $resultSet = $mysqli->query("SELECT * FROM reservation WHERE  N = $N ");

          if($resultSet->num_rows > 0)
              {
                      while ($rows = $resultSet->fetch_assoc()) 
                       {      $Ne = $rows['N'];
                              $tt = "Your reservation has been edited successfully ";
                              $t= "UPDATE reservation SET checkin='$date1', checkout='$date2' ,  rroom='$room',  adult='$adultes' , child='$enfants', fname='$fname', lname='$lname' , email='$email' , tele='$tele'  WHERE  N =$Ne ";
            
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
 