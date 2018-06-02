<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SMEC IT DATA BY PRAVEEN</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    
        <link rel="stylesheet" href="css/style.css">
  
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  </head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://praveen64.cuccfree.com/">Search</a>
  <a href="uploadmarks.php">Upload Marks</a>
  <a href="view.php">View Records</a>
  <a href="Result21.html">Results 2-1</a>
  <a href="https://in.linkedin.com/in/praveen64">Contact</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<h1>::::::: SMEC IT STUDENTS DATABASE::::::::</h1><center>


    <?php
    INCLUDE ('config.php');

// define variables and set to empty values
$hallticket = $firstname = $lastname = $fathername = $contact = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $hallticket=mysqli_real_escape_string($con, $_POST['hallticket']);
    $firstname=mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname=mysqli_real_escape_string($con, $_POST['lastname']);
    $fathername=mysqli_real_escape_string($con, $_POST['fathername']);
    $contact=mysqli_real_escape_string($con, $_POST['contact']);
    $email=mysqli_real_escape_string($con, $_POST['email']);
    

    $sql="INSERT INTO students (hallticket,firstname,lastname,fathername,contact,email) VALUES ('$hallticket','$firstname','$lastname','$fathername','$contact','$email')";
    if (mysqli_query($con,$sql))
    {$message="$hallticket Uploaded Succesfull";
    }
    else { echo "I'm Sorry Praveen I cant RUN >:".mysqli_error($con);
    } 
    mysqli_close($con);
} 

?>

    <form class="form-style-4"  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">

    <h2><?php echo "$message";?></h2>
        <label for="field1">
        <span>Hallticket No</span><input type="text" name="hallticket" required="true" />
        </label>
        
        <label for="field1">
        <span>First Name</span><input type="text" name="firstname" required="true" />
        </label>
        
        <label for="field1">
        <span>Last Name</span><input type="text" name="lastname" required="true" />
        </label>
        
        <label for="field1">
        <span>Father Name</span><input type="text" name="fathername" required="true" />
        </label>
        
        <label for="field1">
        <span>Contact</span><input type="text" name="contact" required="true" />
        </label>
        
        <label for="field2">
        <span>Email Address</span><input type="email" name="email" required="true" />
        </label>
        <!--<label for="field3">
        <span>Short Subject</span><input type="text" name="field3" required="true" />
        </label>
        <label for="field4">
        <span>Message to Us</span><textarea name="field4" onkeyup="adjust_textarea(this)" required="true"></textarea>
        </label>-->
        <label>
        <span>&nbsp;</span><input type="submit" name="submit" value="Add Student"  />
        </label>
        <label>
        <span>&nbsp;</span><a href="view.php"><input type="button" name="view" value="View Records"/></a>
        </label>
        </form>




<p>If you click the "Add Student" button, the form-data will be sent to a ST.Marys DATABASE</p>

</body>
</html>
