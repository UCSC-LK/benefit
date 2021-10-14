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
	<div class="heading-2">
                <h2>Update Claim Reimbursement</h2>
            </div>

			<?php 
                if(boolval($rows)){
                    if(count($rows)>0)
                    foreach($rows as $entry){?>

	<div class="update_reimbursement">
	<form method="post">

		<div class="row">
			<div class="column_1">
			<label for="c_date">Claim Date</label>
			</div>
		<div class="column_2">
			<input type="date" id="claim_date" name="claim_date" value="<?php echo $entry->claim_date?>">
		</div>
		</div>

		<div class="row">
			<div class="column_1">
			<label for="c_amount">Claim Amount</label>
			</div>
		<div class="column_2">
			<input type="text" id="claim_amount" name="claim_amount" value="<?php echo $entry->claim_amount?>">
		</div>
		</div>

		
		<?php }
                }
                
                ?>
		
		<div class="row">
			<div class="column_1">
			<label for="subject">Pay For</label>
			</div>
		<div class="column_2">
			<textarea id="subject" name="subject" value="<?php echo $entry->reimbursement_reason?> "style="height:200px;" ></textarea>
		</div>
		</div>

		<div class="row">
			<div class="column_1">
			<label for="submission">Invoice Submission</label>
		</div>
		</div>

		<div class="row">
			<div class="invoice_submission">
			<input type="file" id="invoice_submission" name="invoice_submission" value="<?php echo $entry->invoice_submission?>">
		</div>
		</div>
		
		<a href="<?=PATH?>Reimbursement/updatereim">
        <button  type="submit" value="submit" name="update" class="update-confirmation">Update</button>
        </a>

		<a href="<?=PATH?>/Reimbursement">
		<input class="cancle-confirmation" type="button" value="Cancel">
		</a>

	
	</form>
                     
    </div>		     
</body>
</html>