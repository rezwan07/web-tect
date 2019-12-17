
<?php

include "include/db_connect.inc.php";
//echo $con;
//echo "sfdfsd";
$pwerr=$unerr="";
  if(isset($_POST['Login']))
   {
     $username = $_POST['username'];
     $password = $_POST['password'];
     
	$sql="select * from login where username = '$username' and password = '$password'";
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
    $rowCount = mysqli_num_rows($result);   
	if(rowCount==0){
		echo "no data found";
	}
		else{
	if ($row['username']==$username && $row['password']==$password)
	{
		echo "Login Successfull!!!".$row['username'];
		echo '<script>alert("done ")</script>';
		header("location:index.php");
	}
	else{
		echo '<script>alert("invalid username or password ")</script>';
	}
   }}
   
?>
<html>
	<head>
		<title>ALL GARMENTS IN ONE PLACE</title>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">



            <br/>
			
		<!--	<img src="kko.jpg" width="100%" > -->
			
		
			
				<table   bgcolor="silver" align="center"   width="50%">
			
			   <tr>
			     
               	 <th align="center" ><font size="5" color="black"> <b> Admin Login  </b></font> </th>
				 <th align="right" ><font size="5" color="white"> <b>  </font> </th>
               </tr>
			   
			     <tr>
			     
               	 
				 <td align="left" > <fieldset><font size="5" color="black"> userName : <input ="text" name="username" >  </font></fieldset> 
				 <label><?= $unerr; ?></label></th>
               </tr>
			   
			   
			   
			   
			   <tr>
			      <td align="left" ><fieldset><font size="5" color="black"> Password : <input ="password" name="password" > </fieldset> </font> <label><?= $pwerr; ?></label></th>	
			    </tr>
			    
			   
			   <tr>
			   
			 <td align="center" ><font size="6" color="black"> <input type="Submit" value="Submit" name="Login"/>   </font></td>
			  
			  </tr>
            </table>
			
			
  
<!--	<img src="foot.png" width=100%">  -->
    		</form>

	</body>
</html>
