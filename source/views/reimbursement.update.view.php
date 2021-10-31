<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=CSS_PATH?>reimbursement.css">
	<title>Update Reimbursment Details</title>
	
</head>
<body class="update-body">
	<!-- <h1>delete</h1> -->
	<div class="reimbursement_details">
            <fieldset class="feildset-1">
                <legend>UPDATE REIMBURSEMENT</legend>

			<?php 
                // if(boolval($rows)){
                //     if(count($rows)>0)
                //     foreach($rows as $entry){?>

	<div class="update_reimbursement">
	<form name="myform" action="#" method="post"  onsubmit=" return validation()" enctype="multipart/form-data">

		<div class="row">
			<div class="column_1">
			<label for="c_date">Claim Date</label>
			</div>
		<div class="column_2">
			<input type="date" id="claim_date" name="claim_date" min="2021-10-14" max="2021-10-21" required>
		</div>
		</div>

		<div class="row">
			<div class="column_1">
			<label for="c_amount">Claim Amount</label>
			</div>
		<div class="column_2">
			<input type="text" id="claim_amount" name="claim_amount" required>
		</div>
		</div>
		
		<div class="row">
			<div class="column_1">
			<label for="subject">Pay For</label>
			</div>
		<div class="column_2">
			<textarea id="subject" name="subject" style="height:200px;" required></textarea>
		</div>
		</div>

		<div class="row">
            <div class="column_1">
                <label for="submission">Invoice Submission</label>
                </div>
                <div class="invoice_submission1">
                    <input type="file" id="invoice_submission" name="invoice_submission" accept=".pdf, .png" required>
                </div>
                    </div>
		<!-- </form>	 -->
		
		<a href="<?=PATH?>Reimbursement/update_reimbursement">
        <button  type="submit" value="submit" name="update" class="update-confirmation"><i class="fa fa-edit"></i> Update</button></a>

		<a href="<?=PATH?>/Reimbursement">
		<input class="cancle-confirmation" type="button" value="Cancel"></a>

	
	</form>
	</fieldset>

	</div>
	</div>     
    		
	<script src="public/js/reimbursement.js"></script>
     
</body>
</html>