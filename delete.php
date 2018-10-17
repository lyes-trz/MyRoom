
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
          <p class="login" style="margin-top: 80px;">Delete a reservation</p>
 </div>










<form action="d.php" method="post">
                            
      <div class="form" >

                 <div> 
                   <label for="N" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 90px;">Number of reservation</label>
                  <input class="date" type="Number" name="N" placeholder="Number ..." required>
               </div>

               <div> 
                   <label for="name" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 45px;">Last name</label>
                  <input class="date" type="text" name="name" placeholder="Your last name..." required>
               </div>
               
             
   

              <button class="send" type="submit" style="margin-top: 80px;" name="delete" >Delete</button>

      </div>

      

 </form>



 
</body>
</html>
 