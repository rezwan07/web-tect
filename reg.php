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
			<a href="./login.php">Log In</a>
			<a href="./reg.php">Sign Up</a>
		</div>
	</div>

	<div>
		 <div style="width: 40%;margin-left: 30%;margin-top: 50px;">
		 
		 	<select onchange="selectCategory(this.value)">
		 		<option value="0">Select Option</option>
		 		<option value="1">Garments</option>
		 		<option value="2">Client</option>
		 	</select>

		 	<div id="item1" style="display: none;">
                <label for="gname">Garments Name</label>
                <input type="text" name="gname">
                <br>
                <label for="address">Address</label>
                <input type="textarea" name="address">
                <br>
                <label for="email">Email</label>
                <input type="email" name="email">
                <br>


            </div>

		 	<div id="item2" style="display: none;">
		 		2
		 	</div>
		 </div>
	</div>

	<script type="text/javascript">
		
		function selectCategory(val) {
			if(val==1){
				document.getElementById("item1").style.display="block";
				document.getElementById("item2").style.display="none";
			}else if(val==2){
				document.getElementById("item2").style.display="block";
				document.getElementById("item1").style.display="none";
			}
		}
	</script>
</body>
</html>
