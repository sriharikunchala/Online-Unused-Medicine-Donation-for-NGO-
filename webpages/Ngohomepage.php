<?php
//include auth_session.php file on all user panel pages
include("authNGO_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NGO home page</title>
   
</head>
<style>
.button {
  background-color:black;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
}
.button4 {border-radius:12px;}
}

}
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  border: 3px solid green; 
}
</style>
<body>
    <div >
    <h1 style="text-align:center;color:red;font-size:50px">UN USED MEDITION DONATION</h1></h1><br><br><br>
     <img src="download.jpg" width="400" height="300" ALIGN="right">
        <p style="text-align:;color:green;font-size:40px">Hey, <?php echo $_SESSION['username']; ?>!</p><br><br><br>
        <p style="color:blue;font-size:30px">**please cheack expairy date of medicine before you donate</p><br><br>
    
       
       <button  class="button button4"> <a style="color:white;text-decoration: none;" href="infoMed.php">Click here to see Available Medicines</a></button><br><br><br><br>
       <div style="text-align:right"> <p><button ><a  href="logout1.php">Logout</a></button></p></div>
       
    </div>
</body>
</html>