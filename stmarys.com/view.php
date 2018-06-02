<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ST.MARYS Student Database</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <section>
  <!--for demo wrap-->
  <h1>SMEC IT Students Database</h1>
  <div class="tbl-header">
  <table cellpadding="0" cellspacing="0" border="0">
  <thead>                                                               
<tr>
<th>Hallticket</th>
<th>Firstname</th>
<th>Lastname</th>
<th>fathername</th>
<th>Contact</th>
<th>Email</th>
</tr>
</thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>

  <?php
  INCLUDE ('config.php');
$result=mysqli_query($con, "SELECT *FROM students"); 
while($row=mysqli_fetch_array($result)) 

{  echo "<tr>";
   echo "<td>". $row['hallticket'] . "</td>";
   echo "<td>". $row['firstname'] . "</td>";
   echo "<td>" .  $row['lastname'] . "</td>";
   echo "<td>" .  $row['fathername'] . "</td>";
   echo "<td>" . $row['contact'] . "</td>";
   echo "<td>" .  $row['email'] . "</td>";
   echo "</tr>";
}
  
if(!mysqli_query($con,$result))
{echo "";}
else{ echo "ERROR:".mysqli_error($con);
} 
mysqli_close($con);
?> </tbody>
</table>
</div>
</section>

<div class="made-with-love">
Made with
<i>♥</i> by
<a target="_blank" href="#">Praveen Gadikoppula</a>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
