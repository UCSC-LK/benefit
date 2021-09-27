<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=CSS_PATH?>header2.css" >
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
        <img src="<?=IMG_PATH?>me.jpeg" alt="Profile Image" class="profile__image">
        <div class="name">Sathya Udayangi</div>
        <div class="job">Software Engineer</div>
        <div class="contact">
            <i class="material-icons">local_phone</i>071#######
        </div>
        <div class="email">
            <i class="material-icons">email</i>sathyau@gmail.com
        </div>
        <div class="hire">Hired Date</div>
        <div class="date">27th Aug 2019</div>
        <div class="address">No 22, ABD Rd, Galle</div>
        <div class="supervisor">
            <i class="material-icons">supervisor_account</i>Mr.Dilukshan
        </div>

    </div>


    <div class="content">
        <div class="header2">
            <div class="nav-bar2" id="nav-bar">
                <div class="list"> <a href="#">Time Off</a></div>
                <div class="list"> <a href="#">Reimbursements</a></div>
                <div class="list"> <a href="#">Benefits</a></div>
                <div class="list"> <a href="#">Performance</a></div>
            </div>
        </div> 

        <div class="reimbursement_container">
        <div class="heading">
            <h2>Claim Reimbursement</h2>
        </div>
        <div class="reimbursement_details">
            <form action="#" method="POST">

                <div class="row">
                    <div class="column_1">
                        <label for="emp_id">Employee ID</label>
                    </div>
                    <div class="column_2">
                        <input type="text" id="employee_id" name="employee_id" placeholder="1">
                    </div>
                </div>
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
                        <input type="text" id="claim_amount" name="claim_amount" placeholder="Rs.20, 000" required>
                    </div>
                </div>
                <div class="row">
                    <div class="column_1">
                        <label for="status">Reimbursement Status</label>
                    </div>
                    <div class="column_2">
                        <input type="text" id="reimbursement_status" name="reimbursement_status" placeholder="Pending">
                    </div>
                </div>
                <div class="row">
                    <div class="column_1">
                        <label for="subject">Pay For</label>
                    </div>
                    <div class="column_2">
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; width: 550px;" required ></textarea>
                    </div>
                </div>

                <div class="invoice">
                    <div class="column_3">
                        <label for="submission">Invoice Submission</label>
                    </div>
                    <div class="invoice_submission">
                        <input type="file" id="invoice_submission" name="invoice_submission" style="height:250px; width: 600px;">
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Apply" name="submit">
                </div>

                <div class="history">
                    <div class="column_4">
                        <label for="claim_history">Claim History</label>
                    </div>
                    <table id="claim_history_table">
                        <tr>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>             
</div>
</div>
<div>
    <?php
    $this->view('includes/footer');
    ?>
</div>
</body>
</html>


