<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0049)http://epayments.jntuh.ac.in/results/resultAction -->
<html><style type="text/css" id="night-mode-pro-style"></style><link type="text/css" rel="stylesheet" id="night-mode-pro-link"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">


<style>
td {
	font-family: Arial;
	font-size: 8pt;
}

table {
  border-collapse: expression("separate", cellSpacing = "3px");
  
}
table,td,th {
	border: 1px solid black;
}

p{
font-size: 90%;
color: GREEN;
font-stretch: wider;
}
h6 {
    display: block;
    font-size: 1.17em;
    margin-top: 1em;
    margin-bottom: 1em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    color: GREEN;
}
table{
		
		border-collapse:collapse; 
		
	}
	table td{ 
		padding:7px; border:  #d6eaf8 1px solid;
	}
	/* provide some minimal visual accomodation for IE8 and below */
	tr{
		background:  #aed6f1;
	}
	/*  Define the background color for all the ODD background rows  */
	tr:nth-child(odd){ 
		background:  #aed6f1;
	}
	/*  Define the background color for all the EVEN background rows  */
	tr:nth-child(even){
		background:   #d6eaf8 ;
	}
</style>

<title>Results</title>
 <script type="text/javascript" src="./fkeys.js.download">
    </script>


</head>


<body oncontextmenu="return false">
<form method="post" action="http://epayments.jntuh.ac.in/results/SearchResult.jsp">
	
	
		
		
	 
	 
 
 
 
 
 
  
 
 


	<!-- RCRV -->
 
 
  
 
 <!--1st year r16 -->
  	
 
	<!--  exam name -->
 
 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
  <?php
  INCLUDE ('config.php');

$text=mysqli_real_escape_string($con, $_POST['search']);
$result=mysqli_query($con, "SELECT *FROM students  WHERE hallticket='$text' "); 
while($row=mysqli_fetch_array($result)) 

{  
   $h=$row['hallticket'] ;
   $f=$row['firstname'] ;
   $l= $row['lastname'] ;
   $fn=  $row['fathername'] ;
   $c=$row['contact'] ;
   $e= $row['email'] ;
   $m4=$row['m4'];
  $dsc=$row['dsc'];  
  $mfcs=$row['mfcs'];  
  $dld=$row['dld'];  
  $java=$row['java'];
 $dsclab=$row['dsclab'];
  $it=$row['it'];
  $javalab=$row['javalab'];  
  $grade=$row['grade'];
   
}
  
if(!mysqli_query($con,$result))
{echo "";}
else{ echo "ERROR:".mysqli_error($con);
} 
mysqli_close($con);
?>
		

		
		
		
		
		
		
		
		
		
		<h6 align="center">Result of 
		 II Year B.Tech. I Semester (R16) Regular Nov-2017 Exams </h6>
		
	

	<table width="80%" align="center">


			<tbody><tr>
				<td><b>HTNO:</b></td>
				<td><b><?php echo $h ?></b></td>
				<td><b>NAME:</b></td>
				<td><b><?php echo $f ?></b></td>
			</tr>


			<tr>
				<td><b>FATHER NAME:</b></td>
				<td><b><?php echo $fn ; ?></b></td>
				<td><b>COLLEGE CODE:</b></td>
				<td><b> BH</b></td>
			</tr>

	</tbody></table>

	
	
					<p></p>
						<div align="center">
							<table width="80%" cellpadding="3" cellspacing="1" border="2">
								
							

								<tbody><tr>
									<td><h4><b>SUBJECT CODE</b></h4></td>
									<td><h4><b>SUBJECT NAME</b></h4></td>
									<td><h4><b>GRADE</b></h4></td>
									<!-- <td><h4><B>GRADE POINTS</B></h4></td> -->
									<!-- <td><h4><B>TOTAL</B></h4></td> -->
									<td><h4><b>CREDITS</b></h4></td>
									<!-- <td><h4><B>RESULT</B></h4></td> -->
								</tr>

								

								
 
									<tr>
										<td><b>MA301BS</b></td>
										<td><b>Mathematics IV </b></td>
										<td><b> <?php echo $m4 ; ?> </b></td>
<?php
switch ($m4) {
    case "O":  $cm4=10; break;
    case "A+": $cm4=9;  break;
    case "A":  $cm4=8;  break;
    case "B+": $cm4=7;  break;
    case "B":  $cm4=6;  break;
    case "C":  $cm4=5;  break;
    default:   $cm4=0;
}
?>
										
										
										 <td><b><?php if($m4=="F"){ echo 0;} else{echo 4; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS302ES</b></td>
										<td><b>Data Structures through C++</b></td>
                                        <td><b><?php echo $dsc ; ?> </b></td>
                                        <?php
switch ($dsc) {
    case "O":  $cdsc=10; break;
    case "A+": $cdsc=9;  break;
    case "A":  $cdsc=8;  break;
    case "B+": $cdsc=7;  break;
    case "B":  $cdsc=6;  break;
    case "C":  $cdsc=5;  break;
    default:   $cdsc=0;
}
?>
										
										
										
										 <td><b><?php if($dsc=="F"){ echo 0;} else{echo 4; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS303ES</b></td>
										<td><b>Mathematical Foundations of Computer
											Science</b></td>
                                        <td><b><?php echo $mfcs; ?> </b></td>
                                        <?php
switch ($mfcs) {
    case "O":  $cmfcs=10; break;
    case "A+": $cmfcs=9;  break;
    case "A":  $cmfcs=8;  break;
    case "B+": $cmfcs=7;  break;
    case "B":  $cmfcs=6;  break;
    case "C":  $cmfcs=5;  break;
    default:   $cmfcs=0;
}
?>
										
										
										
										 <td><b><?php if($mfcs=="F"){ echo 0;} else{echo 4; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS304ES</b></td>
										<td><b>Digital Logic Design </b></td>
                                        <td><b> <?php echo $dld ; ?> </b></td>
                                        <?php
switch ($dld) {
    case "O":  $cdld=10; break;
    case "A+": $cdld=9;  break;
    case "A":  $cdld=8;  break;
    case "B+": $cdld=7;  break;
    case "B":  $cdld=6;  break;
    case "C":  $cdld=5;  break;
    default:   $cdld=0;
}
?>
										
										
										
										 <td><b><?php if($dld=="F"){ echo 0;} else{echo 3; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS305ES</b></td>
										<td><b>Object Oriented Programming through Java</b></td>
                                        <td><b> <?php echo $java ; ?> </b></td>
                                        <?php
switch ($java) {
    case "O":  $cjava=10; break;
    case "A+": $cjava=9;  break;
    case "A":  $cjava=8;  break;
    case "B+": $cjava=7;  break;
    case "B":  $cjava=6;  break;
    case "C":  $cjava=5;  break;
    default:   $cjava=0;
}
?>
										
										
										
										 <td><b><?php if($java=="F"){ echo 0;} else{echo 3; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS306ES </b></td>
										<td><b>Data Structures through C++ Lab </b></td>
                                        <td><b> <?php echo $dsclab ; ?> </b></td>
                                        <?php
switch ($dsclab) {
    case "O":  $clab=10; break;
    case "A+": $clab=9;  break;
    case "A":  $clab=8;  break;
    case "B+": $clab=7;  break;
    case "B":  $clab=6;  break;
    case "C":  $clab=5;  break;
    default:   $clab=0;
}
?>
										
										
										
										 <td><b><?php if($dsclab=="F"){ echo 0;} else{echo 2; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS307ES </b></td>
										<td><b>IT Workshop</b></td>
                                        <td><b><?php echo $it ; ?> </b></td>
                                        <?php
switch ($it) {
    case "O":  $cit=10; break;
    case "A+": $cit=9;  break;
    case "A":  $cit=8;  break;
    case "B+": $cit=7;  break;
    case "B":  $cit=6;  break;
    case "C":  $cit=5;  break;
    default:   $cit=0;
}
?>
										
										
										
										 <td><b><?php if($it=="F"){ echo 0;} else{echo 2; } ?></b></td>
									</tr>
 
									<tr>
										<td><b>CS308ES </b></td>
										<td><b>Object Oriented Programming through Java
											Lab</b></td>
                                        <td><b><?php echo $javalab; ?> </b></td>
                                        <?php
switch ($javalab) {
    case "O":  $cjl=10; break;
    case "A+": $cjl=9;  break;
    case "A":  $cjl=8;  break;
    case "B+": $cjl=7;  break;
    case "B":  $cjl=6;  break;
    case "C":  $cjl=5;  break;
    default:   $cjl=0;
}
?>
										
										
										
										 <td><b><?php if($javalab=="F"){ echo 0;} else{echo 2; } ?></b></td>
									</tr>
							</tbody></table>
						</div>
        <br>
        

         <?php  $tc=24;
                $tgp=($cm4*4)+($cdsc*4)+($cmfcs*4)+($cdld*3)+($cjava*3)+($clab*2)+($cit*2)+($cjl*2);
                $sgpa=$tgp/$tc;
           ?> 







<center><h2> <img src="./sgpaSSSS.jpg" style="width: 250px; height: 42px;"><?php echo $sgpa ; ?></h2></center>
				
<table width="45%" align="center">
			<tbody><tr>			
				<td style="max-width:70px;"><b>% of Marks Secured in a Subject / Course (Class Intervals)</b></td>
				<td style="max-width:50px;"><b>Letter Grade (UGC Guide Lines)</b></td>
				<td style="max-width:25px;"><b>Grade Points</b></td>
			</tr>

           <tr>
				<td><b>Greater than or equal to 90 %</b></td>
				<td><b>O  (Outstanding)</b></td>
				<td><b>10</b></td>
			</tr>
           <tr>
				<td><b>80 and Less than 90 %</b></td>
				<td><b>A+  (Excellent)</b></td>
				<td><b>9</b></td>
			</tr>
           <tr>
				<td><b>70 and Less than 80 %</b></td>
				<td><b>A  (Very Good)</b></td>
				<td><b>8</b></td>
			</tr>
			 <tr>
				<td><b>60 and Less than 70 %</b></td>
				<td><b>B+  (Good)</b></td>
				<td><b>7</b></td>
			</tr>
			 <tr>
				<td><b>50 and Less than 60 %</b></td>
				<td><b>B   (Average)</b></td>
				<td><b>6</b></td>
			</tr>
			 <tr>
				<td><b>40 and Less than 50 %</b></td>
				<td><b>C   (Pass)</b></td>
				<td><b>5</b></td>
			</tr>
			 <tr>
				<td><b>Below 40 %</b></td>
				<td><b>F  (Fail)</b></td>
				<td><b>0</b></td>
			</tr>
			 <tr>
				<td><b>Absent</b></td>
				<td><b>Ab</b></td>
				<td><b>0</b></td>
			</tr>
	</tbody></table>
	
	<p></p>
	 <div align="center">
		<input type="button" onclick="window.print()" value="Print">
	<p></p>
  	<p><b> This information is provided to the candidate on his/her online request  and is only a prototype list</b></p></div>
  
  
  
</form>
<?php 
echo "<p>this is test fro</p>";
// Get the PHP helper library from twilio.com/docs/php/install 
require_once 'sms\main\Twilio\autoload.php'; // Loads the library 
 
use sms\main\Twilio\Rest\Client;
 
$account_sid = 'AC2d77588a77441461335854c80e8ffcee'; 
$auth_token = 'f23a9146242564fcb6d5c5f068570708'; 
$client = new Client($account_sid, $auth_token); 

$messages = $client->accounts("AC2d77588a77441461335854c80e8ffcee") 
  ->messages->create("+919866963755", array( 
        'From' => "+15202147032",  
        'Body' => "traill",      
  ));

?>


</body></html>
