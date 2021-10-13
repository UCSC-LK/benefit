<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>approve.css">

    <title></title>
</head>

<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
  <div>
    <?php
    $this->view('includes/parentemployeenavbar');
    ?>
</div>  
    <div class="approve-container">
        <div class="header-approve">
        <img src="<?= IMG_PATH?>profile/Chathura.png"  class="profile__image">
            <p class="name">Sathya Udayangi<span class="tab"></span> 2021/09/10
            </p>
        </div>
        <div class="details">
            <div class="row">
                <div class="column_1">
                    <label for="c_date">Claim Date</label>
                </div>
                <div class="column_2">
                    <p class="values">2021/09/21</p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="c_amount">Claim Amount</label>
                </div>
                <div class="column_2">
                    <p class="values">10 000 LKR</p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="subject">Reason</label>
                </div>
                <div class="column_2">
                    <p class="values">Fuel Cost</p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="document">Documents</label>
                </div>
                <div class="column_2">
                    <p class="values">https://www.abc.lk</p>
                </div>
            </div>
            <div class="row">
                <div class="column_3">
                    <label for="claim_history">Reimbursement History</label>
                </div>
                <table id="claim_history_table">
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <th>2021/05/08</th>
                        <th>Fuel Cost</th>
                        <th>Rs.5 000</th>
                    </tr>
                </table>
            </div>


            <div class="buttons">
                <input class="reject_button" type="submit" value="Reject" name="reject">
                <input class="approve_button" type="submit" value="Approve" name="approve">
            </div>
        </div>
    </div>

    <div>
    <?php $this->view('includes/footer')?>
</div>
</body>

</html>