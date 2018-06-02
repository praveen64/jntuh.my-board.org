<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SMEC IT DATA BY PRAVEEN</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    
        <link rel="stylesheet" href="css/style.css">
  
    
  </head>
<body>


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
