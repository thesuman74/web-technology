<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="display.php" method="post">
		<h1>Personal infromation</h1>
		First name : <input type="text" name="fname" required=""><br><br>
		Last name : <input type="text" name="lname" required=""><br><br>
		Date of birth: 
		<select name="Year" >
			<option value="">year</option>
			<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
		</select>

		<select name="Month" >
			<option value=""> month</option>
			<?php for ($i = 1; $i <= 12; $i++) : ?>
				<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
		</select>

		<select name="Days" >
			<option value="">day</option>
			<?php for ($i = 1; $i <= 31; $i++) : ?>
				<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
		</select><br><br>


		Gender: <select name = "gender" required="">
			<option value= "male" > Choose a gender</option>
			<option value= "male" > Male</option>
			<option value = "female">Female</option>
		</select>

		<h1>Account information </h1>

		Email: <input type="email" name="email" required=""><br><br>
		Re-type email : <input type="email" name="email"><br><br>
		Password : <input type="password" name="password"><br><br>
		Re- type password :<input type="password" name="password"><br><br>
		Security Questions : <select>
			<option value="name"> Choose a security Question</option> 
			<option value="name"> What is your father name?</option> 
			<option value="place"> What is your favourite place?</option> 
			<option value="hobby"> What is your hobby ?</option> 
		</select><br><br>
		Security answer : <input type="text" name="sanswer">

		<h1>Contact information</h1>
		Address: <input type="text" name="Address"><br><br>
		City : <input type="text" name="city"><br><br>

		State : <select name = "state" required="">
			<option value=""> Choose a state</option>
			<?php for ($i=1 ; $i<=7 ; $i++) :  ?>
				<option value="<?php echo ($i < 7) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>

		</select><br><br>

		Zip code : <input type = "number" name = "zip" required=""><br><br>
		Phone : <input type="number" name="phone" required="">(optional)<br><br>
		<button > Submit</button>


	</form>
</body>
</html>