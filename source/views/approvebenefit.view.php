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
    $this->view('includes/hrmanagernavbar');
    ?>
</div>  
    <div class="approve-container">
        <div class="header-approve">
            <img src="<?= IMG_PATH?>profile/Chathura.png" alt="Profile Image" class="profile__image">
            <p class="name"><?php print_r($requested[0]['first_name']); echo " "; print_r($requested[0]['last_name']); ?><span class="tab"></span><?php print_r($requested[0]['details'][0]->claim_date); ?>
            </p>
        </div>
        <div class="details">
            <div class="row">
                <div class="column_1">
                    <label for="benefit_type">Benefit Type</label>
                </div>
                <div class="column_2">
                    <p class="values"><?php print_r($requested[0]['details'][0]->benefit_type) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="date">Date</label>
                </div>
                <div class="column_2">
                    <p class="values"><?php print_r($requested[0]['details'][0]->claim_date) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="claim_date">Claim Amount</label>
                </div>
                <div class="column_2">
                    <p class="values"><?php print_r($requested[0]['details'][0]->claim_amount) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="reason">Reason</label>
                </div>
                <div class="column_2">
                    <p class="values"><?php print_r($requested[0]['details'][0]->benefit_description) ?></p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="documents">Documents</label>
                </div>
                <div class="column_2">
                    <p class="values">https://www.arisirihospital.lk</p>
                </div>
            </div>
            <div class="row">
                <div class="column_3">
                    <label for="benefit_history">Benefit History</label>
                </div>
                <table id="cbenefit_history_table">
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <th>2021/05/08</th>
                        <th>Accident</th>
                        <th>20, 000 LKR</th>
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