

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
        
         <style type="text/css">
           .form{
            margin-top: -60px;
           }
         </style>
  </head>     
         
<body>   

  

  <div>
          <a  href="home.php" style="text-decoration:none">
                    <p class="logo">Gites Touristiques</p>

          </a>
          <p class="login" style="margin-top: 10px;">Edite a reservation</p>
 </div>










<form method="post" action="edit2.php" >
                            
      <div class="form" >
                 

                 <div> 
                   <label for="N" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 90px;">Number of reservation</label>
                  <input class="date" type="number" name="N" placeholder="Number ..." required>
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
                                               margin-top: 25px;">Adults</label>
                  <input class="date" type="number" name="adultes" placeholder="Nomber of adultes ..." required>
               </div>
               <div> 
                   <label for="enfants" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Child</label>
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

               <div > 
                   <label for="fname" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">First name</label>
                  <input class="date" type="text" name="fname" placeholder="Your first name ..." required>
               </div>
               <div> 
                   <label for="lname" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Last name</label>
                  <input class="date" type="text" name="lname" placeholder="Your last name ..." required>
               </div>
               <div> 
                   <label for="email" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">E-mail</label>
                  <input class="date" type="text" name="email" placeholder="Your e-mail ..." required>
               </div>
               <div> 
                   <label for="tele" style=" float: center; 
                                              display:block;
                                              margin:0 auto;
                                               width:30%;
                                               margin-top: 25px;">Tele</label>
                  <input class="date" type="text" name="tele" placeholder="Your phone number ..."required>
               </div>
             
               
               
             
   

              <button class="send" type="submit" style="margin-top: 30px; " name="submit">Edit</button>
              <dir style="margin-top: 20px;"></dir>

      </div>

      

 </form>


 
</body>
</html>
 