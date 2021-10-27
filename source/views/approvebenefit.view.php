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
    $this->view('includes/hrmanagernavbar');
//    $this->view('includes/hrnav');
    ?>

    <div class="main_container">
        <div class="approve-container">
            <div>
                <p class="handling_title">Pending List</p>
            </div>
            <div class="card-container">
                <?php
                for ($i = 0;$i < sizeof($requested);$i++) {
                    if ($requested >= 1) {
                //            for ($j = 0; $j < sizeof($requested[$i]); $j++) { ?>
                        <div class='header-approve' id='btn'>
                            <center>
                                <img src='<?= IMG_PATH ?>profile/Chathura.jpeg' alt='Profile Image'
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

                } ?>
            </div>

<!--            <div class="detail-container">-->
<!--                <div class="details">-->
<!--                    <div class="row">-->
<!--                        <div class="column_1">-->
<!--                            <label for="benefit_type">Benefit Type</label>-->
<!--                        </div>-->
<!--                        <div class="column_2">-->
<!--                            <p>--><?php //print_r($requested[$i]['details']->benefit_type) ?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="column_1">-->
<!--                            <label for="date">Date</label>-->
<!--                        </div>-->
<!--                        <div class="column_2">-->
<!--                            <p>--><?php //print_r($requested[$i]['details']->claim_date); ?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="column_1">-->
<!--                            <label for="claim_date">Claim Amount</label>-->
<!--                        </div>-->
<!--                        <div class="column_2">-->
<!--                            <p>--><?php //print_r($requested[$i]['details']->claim_amount); ?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="column_1">-->
<!--                            <label for="reason">Reason</label>-->
<!--                        </div>-->
<!--                        <div class="column_2">-->
<!--                            <p>--><?php //print_r($requested[$i]['details']->benefit_description); ?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="column_1">-->
<!--                            <label for="documents">Documents</label>-->
<!--                        </div>-->
<!--                        <div class="column_2">-->
<!--                            <p>--><?php //print_r($requested[$i]['details']->report_location); ?><!--</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="buttons">-->
<!--                        <input class="reject_button" type="submit" value="Reject" name="reject">-->
<!--                        <input class="approve_button" type="submit" value="Approve" name="approve">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php
//            }
//
//            } ?>
        </div>

    </div>
</div>

<!--<template id="temp">-->
<!--    <div class="details">-->
<!--        <div class="row">-->
<!--            <div class="column_1">-->
<!--                <label for="benefit_type">Benefit Type</label>-->
<!--            </div>-->
<!--            <div class="column_2">-->
<!--                <p class="values">--><?php //print_r($requested[0]['details'][0]->benefit_type) ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="column_1">-->
<!--                <label for="date">Date</label>-->
<!--            </div>-->
<!--            <div class="column_2">-->
<!--                <p class="values">--><?php //print_r($requested[0]['details'][0]->claim_date) ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="column_1">-->
<!--                <label for="claim_date">Claim Amount</label>-->
<!--            </div>-->
<!--            <div class="column_2">-->
<!--                <p class="values">--><?php //print_r($requested[0]['details'][0]->claim_amount) ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="column_1">-->
<!--                <label for="reason">Reason</label>-->
<!--            </div>-->
<!--            <div class="column_2">-->
<!--                <p class="values">--><?php //print_r($requested[0]['details'][0]->benefit_description) ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="column_1">-->
<!--                <label for="documents">Documents</label>-->
<!--            </div>-->
<!--            <div class="column_2">-->
<!--                <p class="values">https://www.arisirihospital.lk</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->
<script>

    function addBox() {
        var temp = document.getElementById("temp").content;
        document.getElementById("btn").appendChild(temp);
    }

    document.getElementById("btn").addEventListener("click", addBox);

</script>
</body>
</html>