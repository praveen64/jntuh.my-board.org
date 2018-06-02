<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Upload marks to SMEC IT R16 portal</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
    
        <link rel="stylesheet" href="css/style.css">
  
    
  </head>
<body>


<h1>::: Upload SMEC IT Students marks to Server :::</h1><center>


    <?php
    INCLUDE ('config.php');

// define variables and set to empty values
$hallticket = $m4 = $dsc = $mfcs = $dld = $java =$dsclab =$it=$javalab = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $hallticket=mysqli_real_escape_string($con, $_POST['hallticket']);
    $m4=mysqli_real_escape_string($con, $_POST['m4']);
    $dsc=mysqli_real_escape_string($con, $_POST['dsc']);
    $mfcs=mysqli_real_escape_string($con, $_POST['mfcs']);
    $dld=mysqli_real_escape_string($con, $_POST['dld']);
    $java=mysqli_real_escape_string($con, $_POST['java']);
    $dsclab=mysqli_real_escape_string($con, $_POST['dsclab']);
    $it=mysqli_real_escape_string($con, $_POST['it']);
    $javalab=mysqli_real_escape_string($con, $_POST['javalab']);
    

    $sql = "UPDATE students SET m4='$m4' ,dsc='$dsc', mfcs='$mfcs' , dld = '$dld', java='$java', dsclab ='$dsclab', it= '$it', javalab= '$javalab' WHERE hallticket= '$hallticket' ";
    if (mysqli_query($con,$sql))
    {$message="$hallticket Marks Uploaded Succesfull";
    }
    else { echo "I'm Sorry Praveen I cant RUN >:".mysqli_error($con);
    } 
    mysqli_close($con);
} 

?>

    <form class="form-style-4"  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">

    <h2><?php echo "$message";?></h2>
        <label for="field1">
        <span>Hallticket No</span><input type="text" name="hallticket" value="16BH1A12" required="true" />
        </label>
        
        <label for="field1">
        <span>M4 </span><input type="text" name="m4" required="true" />
        </label>
        
        <label for="field1">
        <span>DSC++</span><input type="text" name="dsc" required="true" />
        </label>
        
        <label for="field1">
        <span>MFCS</span><input type="text" name="mfcs" required="true" />
        </label>
        
        <label for="field1">
        <span>DLD</span><input type="text" name="dld" required="true" />
        </label>
        
        <label for="field1">
        <span>JAVA </span><input type="text" name="java" required="true" />
        </label>

        <label for="field1">
        <span>DSC LAB </span><input type="text" name="dsclab" required="true" />
        </label>

        <label for="field1">
        <span>IT LAB</span><input type="text" name="it" required="true" />
        </label>

        <label for="field1">
        <span>JAVA LAB </span><input type="text" name="javalab" required="true" />
        </label>

        <!--<label for="field3">
        <span>Short Subject</span><input type="text" name="field3" required="true" />
        </label>
        <label for="field4">
        <span>Message to Us</span><textarea name="field4" onkeyup="adjust_textarea(this)" required="true"></textarea>
        </label>-->
        <label>
        <span>&nbsp;</span><input type="submit" name="submit" value="Upload Marks"  />
        </label>
        <label>
        <span>&nbsp;</span><a href="view.php"><input type="button" name="view" value="View Records"/></a>
        </label>
        </form>




<p>If you click the "Add Student" button, the form-data will be sent to a ST.Marys DATABASE</p>

</body>
</html>
