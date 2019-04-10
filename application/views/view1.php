<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table,tr,th,td{
			border: 1px solid red;
			border-collapse: collapse;
		}
		table{
			margin-left: 27px;
			margin-top: 50px;
		}
		ul, li{
			list-style: none;
			display: inline;
			margin-right: 20px;
		}
		div{
			margin: -15px;
			margin-top: 30px;
		}
	</style>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>First name</th>
		<th>Last Name</th>
	</tr>
<?php foreach($records as $user){?>
	
	<tr>
		<td><?php echo $user->id;?></td>
		<td><?php echo $user->first_name;?></td>
		<td><?php echo $user->last_name;?></td>
	</tr>
<?php } ?>	

 </table>
 <div>

<ul>
	<li><a href="<?php echo base_url()?>controller1/href1"><button>Add</button></a></li>
	<li><a href="<?php echo base_url()?>controller1/href2"><button>Edit</button></a></li>
	<li><a href="<?php echo base_url()?>controller1/href3"><button>Delete</button></a></li>
</ul>

</div>
	
</body>
</html>