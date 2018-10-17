<!DOCTYPE html>
<html>
  <head>
         <title>MyStore</title>
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
          <p class="login">Search a B&B</p>
 </div>










<form method="POST" action="afficher.php">
                            
      <div class="form">

              <div> 
                   <label for="destination" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 40px;
                                               ">Destination</label>
                  <input class="date" type="text" name="destination" placeholder="Your Destination or Address..." required>
               </div>

               <div> 
                   <label for="date1" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Checkin</label>
                  <input class="date" type="date" name="date1" required>
               </div>
               <div> 
                   <label for="date2" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Checkout</label>
                  <input class="date" type="date" name="date2" required>
               </div>
               <div> 
                   <label for="adultes" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Adult</label>
                  <input class="date" type="number" name="adultes" placeholder="Nomber of adultes ..." required>
               </div>
               <div> 
                   <label for="enfants" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Childs</label>
                  <input class="date" type="number" name="enfants" placeholder="Nomber of kids ..."required>
               </div>
               <div> 
                   <label for="room" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Rooms</label>
                  <input class="date" type="number" name="room" placeholder="Nomber of room ..."required>
               </div>
             
   

              <button class="send" type="submit" name="submit" onclick="return submit_()">Search</button>

      </div>

      

 </form>



 
</body>
</html>
 