<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action=" <?php echo base_url()?>controller1/edit_data " method="post">

	<label for="">Id</label>
	<input type="text" name="id">

	<label for="">First Name</label>
	<input type="text" name="name1">
	<label for="">Last Name</label>
	<input type="text" name="name2">

	<input type="submit" name="sub4" value="Send">
</form>
	
</body>
</html>