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
	<div class="heading">
                <h2>Update Claim Reimbursement</h2>
            </div>

	<div class="update_reimbursement">
	<form action="#" method="POST">

		<div class="row">
			<div class="column_1">
			<label for="c_date">Claim Date</label>
			</div>
		<div class="column_2">
			<input type="date" id="claim_date" name="claim_date" placeholder="mm/dd/yyyy">
		</div>
		</div>

		<div class="row">
			<div class="column_1">
			<label for="c_amount">Claim Amount</label>
			</div>
		<div class="column_2">
			<input type="text" id="claim_amount" name="claim_amount" placeholder="Rs.20, 000" >
		</div>
		</div>
		
		<div class="row">
			<div class="column_1">
			<label for="subject">Pay For</label>
			</div>
		<div class="column_2">
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px;"  ></textarea>
		</div>
		</div>

		<div class="row">
			<div class="column_1">
			<label for="submission">Invoice Submission</label>
		</div>
		</div>

		<div class="row">
			<div class="invoice_submission">
			<input type="file" id="invoice_submission" name="invoice_submission">
		</div>
		</div>

		<div class="updation-button">
			<input type="submit" value="Update" name="submit">
		</div>
	</form>
                     
    </div>		     
</body>
</html>