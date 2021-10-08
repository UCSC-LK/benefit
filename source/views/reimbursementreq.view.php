<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS_PATH?>header2.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>reimbursement.css">
    <title></title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
<div class="profile_container">
    <div class="profile">
        <?php
        $this->view('includes/profile1');
        ?>
    </div>
    <div class="content">
        <?php
        $this->view('includes/header2');
        ?>
        <div class="reimbursement_container">
            <div class="heading">
                <h2>Claim Reimbursement</h2>
            </div>
            <div class="reimbursement_details">
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

                    <div class="apply_button">
                        <input type="submit" value="Apply" name="submit">
                    </div>
                </form>
                <?php
                if(boolval($errors)){
                    print_r($errors);
                }
                ?>
                <div class="history">

                    <div class="column_4">
                        <label for="claim_history">Claim History</label>
                    </div>
                    <table id="claim_history_table">
                        <!-- <form method="post" action="Reimbursement/delete"> -->
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>


                            <?php
                            $i=0;

                            if(boolval($row)){

                                for ($i=0; $i <sizeof($row) ; $i++) {
                                    $vai=$row[$i];
                                    ?>
                                    <tr>
                                    <td><?php print_r($vai->claim_date); ?></td>
                                    <td><?php print_r($vai->claim_amount); ?></td>
                                    <td><?php print_r($vai->reimbursement_status);
                                    if($vai->reimbursement_status=="pending")
                                    {?>
                                        <!--<button type="Submit" value="Submit" name="delete">Delete</button>-->
                                        <a href="<?=PATH?>Reimbursement/delete/<?=$vai->invoice_submission?>">
                                        <button  type="Submit" value="Submit" name="delete" class="delete_button">Delete</button>
                                        </a>



                                    <?php }?>
                                <?php }?></td>

                                </tr>
                                <?php
                            }
                            else{
                            ?><td><?php echo "No history";}?></td>
                        <!-- </form> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<div>
    <?php $this->view('includes/footer')?>
</div>
</body>
</html>



