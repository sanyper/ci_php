<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Input Form</title>
</head>
<body>

<form action="<?=base_url('my_controller/update');?>/<?=$Id;?>" method="post">
	<label for="name">Name: </label>
	<input type="text" name="Name" id="name" value="<?=$Name;?>"><br>
	<label for="surname">Surname: </label>
	<input type="text" name="Surname" id="surname" value="<?=$Surname;?>"><br>
	<label for="email">Email: </label>
	<input type="text" name="Email" id="email" value="<?=$Email;?>"><br>
	<label for="phone">Phone: </label>
	<input type="text" name="Phone" id="phone" value="<?=$Phone;?>"><br>
	<label for="country">Country: </label>
	<input type="text" name="Country" id="country" value="<?=$Country;?>"><br>
	<input type="submit" name="submit">
	<input type="reset">
</form>

</body>
</html>
