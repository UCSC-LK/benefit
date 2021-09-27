<?php ?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
</head>
<body>
 		<div class="container">
 			<div class="p" style="margin-top:50px;width:100%;max-width:340px;">
 				<h3>Add user</h3>
 				<input class="form" type="firstname" name="firstname" placeholder="firstname" ><br>
 				<input class="form" type="lastname" name="lastname" placeholder="lastname" ><br>
 				<input class="form" type="email" name="email" placeholder="Email" ><br>

 				<label for="gender">Choose a gender:</label>
				<select id="gender">
 				 <option value="male">Male</option>
 				 <option value="female">female</option>
				</select><br>

				<label for="rank">Choose a rank:</label>
				<select id="rank">
  				<option value="hr_manager">HR Manager</option>
  				<option value="hr_officer">hr_officer</option>
 				<option value="employee">Employee</option>
  				<option value="supervisor">Supervisor</option>
				</select>

 				<input class="form" type="password" name="password" placeholder="password"><br>
 				<input class="form" type="password" name="password" placeholder="retype password">
 				<br>
 				<button class="bt">cancel</button><button class="bt">Signup</button>
 				
 			</div>
 			
 		</div>
</body>
</html>