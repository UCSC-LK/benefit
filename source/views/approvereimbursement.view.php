<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
<div class="page_content">

    <?php
        $this->view('includes/parentemployeenavbar');
//    $this->view('includes/supervisornav');
    ?>

    <div class="main_container">
        <div class="approve-container">
            <div>
                <p class="handling_title">To Be Handle</p>
            </div>
            <hr>
            <div class="card-container">
            <?php
            if(boolval($requested)){
                // print_r(sizeof($requested));
                for ($i = 0;$i < sizeof($requested);$i++) {
                
                    // if ($requested >= 1) {
                //            for ($j = 0; $j < sizeof($requested[$i]); $j++) { ?>
                        <div class='header-approve' id='btn'>
                            <center>
                                <img src="<?php echo $requested[$i]['profile_image'];?>" alt='Profile Image'
                                     class='profile__image'>
                            </center>
                            <p class='name'>
                                <?php
                                print_r($requested[$i]['first_name']); ?>
                            </p>
                            <p class="name">
                                <?php
                                echo " ";
                                print_r($requested[$i]['last_name']);
                                ?>
                            </p>
                            <div>
                                <p class='date'>
                                    <?php
                                    print_r($requested[$i]['details']->claim_date); ?>
                                </p>
                            </div>
                            <center>
                                <button type="button" name="show" value="show">Show</button>
                            </center>
                        </div>
                        <?php
                    }

                } 
            // }
            ?>

            </div>
        </div>
        <div class="approve-container">
            <div>
                <p class="handling_title">Reimbursement History</p>
            </div>
            <hr>
            <div class="history_table">
                <?php
                if(boolval($requested_approve)){
                ?>
                <table id="claim_history_table">
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    for ($i = 0;$i < sizeof($requested_approve);$i++) {
                    ?>
                    <tr>
                        <td><?php print_r($requested_approve[$i]['details']->claim_date)?></td>
                        <td><?php print_r($requested_approve[$i]['first_name']); echo "  "; print_r($requested_approve[$i]['last_name']);?></td>
                        <td><?php print_r($requested_approve[$i]['details']->reimbursement_reason)?></td>
                        <td><?php print_r($requested_approve[$i]['details']->claim_amount)?></td>
                        <td><?php print_r($requested_approve[$i]['details']->reimbursement_status)?></td>


                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                }
                ?>
            </div>
        </div>
<!--        <div class="details">-->
<!--            <div class="row">-->
<!--                <div class="column_1">-->
<!--                    <label for="c_date">Claim Date</label>-->
<!--                </div>-->
<!--                <div class="column_2">-->
<!--                    --><?php //// print_r($requested[$i]['details']->claim_date); ?>
<!--                    <p class="values">2021/09/21</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="column_1">-->
<!--                    <label for="c_amount">Claim Amount</label>-->
<!--                </div>-->
<!--                <div class="column_2">-->
<!--                    --><?php //// print_r($requested[$i]['details']->claim_amount); ?>
<!--                    <p class="values">10 000 LKR</p>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="column_1">-->
<!--                    <label for="subject">Reason</label>-->
<!--                </div>-->
<!--                <div class="column_2">-->
<!--                    <p class="values">Fuel Cost</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="column_1">-->
<!--                    <label for="document">Documents</label>-->
<!--                </div>-->
<!--                <div class="column_2">-->
<!--                    --><?php ////print_r($requested[$i]['details']->invoice_submission); ?>
<!--                    <p class="values">https://www.abc.lk</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="column_3">-->
<!--                    <label for="claim_history">Reimbursement History</label>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--            <div class="buttons">-->
<!--                <input class="reject_button" type="submit" value="Reject" name="reject">-->
<!--                <input class="approve_button" type="submit" value="Approve" name="approve">-->
<!--            </div>-->
<!--        </div>-->
        <?php
        //      }
        // }
        ?>
    </div>
</div>

<!--<div>-->
<!--    --><?php //$this->view('includes/footer') ?>
<!--</div>-->
</body>

</html>