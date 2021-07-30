<?php
//include auth_session.php file on all user panel pages
include 'auth_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Userhome</title>
     
</head>
<style>
* {
  box-sizing: border-box;
}
 input[type=submit] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
 
  border-radius: 4px;
  resize: vertical;
  border: 2px solid blue;
}





.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 40px;
  
}
.color{
    color:blue;
    font-size:20px;
}
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

</style>
<body>

  <h1 style="text-align:center;color:red;font-size:50px">UN USED MEDITION DONATION</h1>
    <div>
        <p style="color:green;font-size: 50px;">Hey,Welcome <?php echo $_SESSION['username']; ?>!</p>
        <p style="font-size:30px;color:brown;text-align:center">Remember that the happiest people are not those getting more, but those giving more.</p>
        <?php
    require 'db4.php';
     if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        $email    = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
        $mobileno = stripslashes($_REQUEST['mobileno']);
        $mobileno = mysqli_real_escape_string($con, $mobileno);
        $location = stripslashes($_REQUEST['location']);
        $location = mysqli_real_escape_string($con, $location);
        $email = mysqli_real_escape_string($con, $email);
        $curDate    = stripslashes($_REQUEST['curDate']);
        $curDate    = mysqli_real_escape_string($con, $curDate);
        $medicineName = stripslashes($_REQUEST['medicineName']);
        $medicineName = mysqli_real_escape_string($con, $medicineName);
         $purpose = stripslashes($_REQUEST['purpose']);
        $purpose = mysqli_real_escape_string($con, $purpose);
         $medicineQuantity = stripslashes($_REQUEST['medicineQuantity']);
        $medicineQuantity = mysqli_real_escape_string($con, $medicineQuantity);
          $medicineExpiry = stripslashes($_REQUEST['medicineExpiry']);
        $medicineExpiry = mysqli_real_escape_string($con, $medicineExpiry);
      
        
   
      


        $query = "INSERT into `users` (username,email,mobileno,location,curDate, medicineName,purpose,medicineQuantity,medicineExpiry)
                     VALUES ('$username','$email','$mobileno','$location','$curDate', '$medicineName', '$purpose','$medicineQuantity','$medicineExpiry')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3 style='font-size:50px;color:red'>You are Donated successfully.</h3><br/>
                  <p class='link'>Click here to <a href='UnUhomepage.php'>Go to Homepage</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='userregistration.php'>registration</a> again.</p>
                  </div>";
        }
      }else {
        ?>
        <form style=" margin: 50px auto; width: 500px; padding: 30px 25px; background: white;">
          <div class="container" >
                                 <label class="color" >UserName :</label><br><br>
                                <input type='text' name='username' placeholder="Username" required><br><br><br>
                                <label class="color" >E-mail :</label><br><br>
                                <input type='text' name='email' placeholder="Email Adress" required><br><br><br>
                                 <label class="color">Enter a phone number:</label><br><br>
                                <input type="tel" name="mobileno" placeholder="Phone Number" required><br><br><br>
                                 <label class="color" >Location :</label><br><br>
                                <input type='text' name='location' placeholder="Your Location" required><br><br><br>

                                <lable  class="color">Today date :</lable>
                                <input type='date'paceholder="Today date" name='curDate' ><br><br><br>
                                <label  class="color" >Medicine Name :</label><br><br>
                                <input type="text" id="medicineName" placeholder="Medicine Name" name="medicineName" required><br><br><br>
                                <lable  class="color" >Purpose :</lable><br><br>
                                <input type="text"  placeholder="Medicine purpose" name="purpose" required><br><br><br>
                                <label  class="color" >Quantity :</label>
                                <input type="number"  placeholder="Quantity" name="medicineQuantity" required><br><br><br>
                                <label  class="color">Expiry Date :</label>
                                <input  type="date" placeholder="Expiry Date" name="medicineExpiry" required><br><br><br><br>
                                 <input class="button button4" type="submit" value="Donate" name="submit">
                            </div>
                        
                      
                        </div></form>
        <p style="text-align:right;"><button class=" button4"><a href="logout.php">Logout</a></button></p>
    </div>
    <?php
    }
?>
</body>
</html>