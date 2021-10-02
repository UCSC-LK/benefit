<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<title>Page not found</title>
</head>
<body>
	<h1>delete</h1>


 

			 
			 	<h3>Are you sure you want to delete?!</h3>
 				<form method="post">
			 	<!--<input disabled autofocus class="form-control" value="<?=get_var('claim',$vai[0]->claim_amount)?>" type="text" name="claim" placeholder="claim"><br><br>-->
			 	<input type="hidden" name="id">
			 	<input class="btn btn-danger float-end" type="submit" value="Delete">

			 	<a href="<?=PATH?>/Reimbursement">
			 		<input class="btn btn-success" type="button" value="Cancel">
			 	</a>
			 </form>
			
		     
</body>
</html>
