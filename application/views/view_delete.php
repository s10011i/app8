
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>

 <form action="<?php echo base_url()?>controller1/delete_data" method="post">
 	<label for="">Insert Id to delete</label>

 	<input type="number" min="1" name="num">
 	<input type="submit" value="Confirm" name="sub2">
 </form>
 	
 </body>
 </html>