<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=CSS_PATH?>reimbursement.css">
	<title>Delete Confirmation</title>
	
</head>
<body class="delete-body">
	<!-- <h1>delete</h1> -->

			 	<div class="confirmation">
			 	<h3>Are you sure you want to delete this Employee's Performance?</h3>
			 	              <h4 class="erro" style="color: red;"><?php
                if(boolval($errors)){
                    print_r($errors);
                }
                ?></h4>
 				<form method="post">
			 	<!--<input disabled autofocus class="form-control" value="<?=get_var('claim',$vai[0]->claim_amount)?>" type="text" name="claim" placeholder="claim"><br><br>-->
			 	<input type="hidden" name="id">
			 	<button class="delete-confirmation" type="submit" value="Delete">Delete</button>

			 	<a href="<?=PATH?>Supervisor/Performance">
			 		<input class="cancle-confirmation" type="button" value="Cancel">
			 	</a>
			 </form>
				 </div>		     
</body>
</html>
