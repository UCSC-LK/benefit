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
<div>
    <?php
    $this->view('includes/hrmanagernavbar');
    ?>
</div>
<div>
    <p class="handling_title">Approve Benefit</p>
</div>
<div class="approve-container">
    <?php
    //    print_r(sizeof($requested[0]['details']));
    for ($i = 0; $i < sizeof($requested); $i++) {
        if ($requested[$i]['details'] >= 1) {
            for ($j = 0; $j < sizeof($requested[$i]['details']); $j++) {
                print_r("<div class='header-approve' id='btn'>");
                echo  "<img src='<?= IMG_PATH ?>profile/Chathura.png' alt='Profile Image' class='profile__image'>" .
                    "<p class='name'>";
                print_r($requested[$i]['first_name']);
                echo " ";
                print_r($requested[$i]['last_name']);
                echo "</p>";
                echo "<p class='date'>";
                print_r($requested[$i]['details'][$j]->claim_date);
                echo "</p>" .
                    "</div>";

                echo "
    <div class='details'>
    <div class='row'>
        <div class='column_1'>
            <label for='benefit_type'>Benefit Type</label>
        </div>
        <div class='column_2'>
            <p>"; print_r($requested[$i]['details'][0]->benefit_type); echo"</p>
        </div>
    </div>
    <div class='row'>
        <div class='column_1'>
            <label for='date'>Date</label>
        </div>
        <div class='column_2'>
            <p>"; print_r($requested[$i]['details'][0]->claim_date); echo "</p>
        </div>
    </div>
    <div class='row'>
        <div class='column_1'>
            <label for='claim_date'>Claim Amount</label>
        </div>
        <div class='column_2'>
            <p>"; print_r($requested[$i]['details'][0]->claim_amount); echo "</p>
        </div>
    </div>
    <div class='row'>
        <div class='column_1'>
            <label for='reason'>Reason</label>
        </div>
        <div class='column_2'>
            <p>"; print_r($requested[$i]['details'][0]->benefit_description); echo "</p>
        </div>
    </div>
    <div class='row'>
        <div class='column_1'>
            <label for='documents'>Documents</label>
        </div>
        <div class='column_2'>
            <p>https://www.arisirihospital.lk</p>
        </div>
    </div>
    <div class='buttons'>
        <input class='reject_button' type='submit' value='Reject' name='reject'>
        <input class='approve_button' type='submit' value='Approve' name='approve'>
    </div>
</div>
    ";
            }
        }
    }

    ?>


    <!--</div>-->
    <!---->
    <!--<div class="details">-->
    <!--    <div class="row">-->
    <!--        <div class="column_1">-->
    <!--            <label for="benefit_type">Benefit Type</label>-->
    <!--        </div>-->
    <!--        <div class="column_2">-->
    <!--            <p>--><?php //print_r($requested[0]['details'][0]->benefit_type) ?><!--</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="column_1">-->
    <!--            <label for="date">Date</label>-->
    <!--        </div>-->
    <!--        <div class="column_2">-->
    <!--            <p>--><?php //print_r($requested[0]['details'][0]->claim_date) ?><!--</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="column_1">-->
    <!--            <label for="claim_date">Claim Amount</label>-->
    <!--        </div>-->
    <!--        <div class="column_2">-->
    <!--            <p>--><?php //print_r($requested[0]['details'][0]->claim_amount) ?><!--</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="column_1">-->
    <!--            <label for="reason">Reason</label>-->
    <!--        </div>-->
    <!--        <div class="column_2">-->
    <!--            <p>--><?php //print_r($requested[0]['details'][0]->benefit_description) ?><!--</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--        <div class="column_1">-->
    <!--            <label for="documents">Documents</label>-->
    <!--        </div>-->
    <!--        <div class="column_2">-->
    <!--            <p>https://www.arisirihospital.lk</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="buttons">-->
    <!--        <input class="reject_button" type="submit" value="Reject" name="reject">-->
    <!--        <input class="approve_button" type="submit" value="Approve" name="approve">-->
    <!--    </div>-->
    <!--</div>-->
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

        function addBox(){
            var temp = document.getElementById("temp").content;
            document.getElementById("btn").appendChild(temp);
        }

        document.getElementById("btn").addEventListener("click", addBox);

    </script>
</body>
</html>