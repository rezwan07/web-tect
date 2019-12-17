<?php
include "include/db_connect.inc.php";
?>
<!DOCTYPE html>
<html>
<head> 
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

	<div class="header">
		<a href="#default" class="logo"><img src="https://www.designevo.com/res/templates/thumb_small/red-fashion-clothes-hanger.png" style="height: 23px;"> All Garments in One Place</a>
		<div class="header-right">
			<a class="active" href="./">Home</a>
			<a href="./login1.php">Log In</a>
			<a href="./reg.php">Sign Up</a>
		</div>
	</div>

	<div style="padding-left:20px">
		<?php 
			for($x=0; $x<10;$x++){
				echo '
				<div class="product-box">
                   
					<a href="./productinfo.php">product</a>
				</div>';
			}
		?> 
	</div>
</body>
</html>