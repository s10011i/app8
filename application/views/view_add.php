<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action=" <?php echo base_url()?>controller1/add_data " method="post">
	
	<label for="">First Name</label>
	<input type="text" name="fname">
	<label for="">Last Name</label>
	<input type="text" name="lname">
	<input type="submit" name="sub" value="Send">
</form>
	
</body>
</html>