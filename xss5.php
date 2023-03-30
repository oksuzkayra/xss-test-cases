<html>
	<body>
		
		<form method="post">
		
			<p>
			Firstname: <input type="text" name="fname">
			<br>
			Lastname: <input type="text" name="lname">
			<br>
			<input type="submit" name="button" value="Send">
			</p>
			
			
		</form>

		<?php
		
			if(isset($_POST['fname'])){
				$query= htmlspecialchars($_POST['fname']);
				$query= str_replace("alert","",$query);
				echo "<a href='".$query."'/>hello";
			}


		?>
		
	</body>



</html>


