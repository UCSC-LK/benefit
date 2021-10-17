<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>benefitrequest.css">
    <title></title>
</head>
<script type="text/javascript">
    function number_validation() {
        var n = document.forms["myform"]["claiming_amount"].value;
        var decimal = /^[+]?[0-9]+\.[0-9]{2}$/;
        if (!n.match(decimal)) {
            document.getElementById("numberText").innerHTML = "<div style='font-family: Arial,serif; font-size: smaller; color: red'><i class='fas fa-exclamation' style='color: red;'></i> Please enter Numeric value</div>";
            var r1 = false;
            reason_validation();
            return false;
        } else {
            if (r1) {
                document.getElementById("numberText").innerHTML = "<span>&#10003;</span>";
            } else {
                var f1 = reason_validation();
                var f2 = true;
                if (f1 && f2) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

    function reason_validation() {
        var m = document.forms["myform"]["subject"].value;
        if (isNaN(m)) {
            document.getElementById("reasonText").innerHTML = "<span>&#10003;</span>";
            return true;
        } else {
            document.getElementById("reasonText").innerHTML = "<div style='font-family: Arial; color: red'><i class='fas fa-exclamation' style='color: red;'></i> Please enter your reason correctly</div>";
            return false;
        }
    }
</script>
<body>

<div>
    <?php
    $this->view('includes/header1')
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
        $this->view('includes/header2')
        ?>

        <div class="benefit_container">
            <div class="benefit_head">
                <p class="claim_benefit">Claim Benefit</p>

                <div class="benefit_form">

                    <form name="myform" action="BenefitrequestController" method="post"
                          onsubmit=" return number_validation()">

                        <div class="row">
                            <div class="column_1">
                                <label for="benefit_type">Benefit Type</label>
                            </div>
                            <div class="column_2">
                                <select id="benefit_type" name="benefit_type" required>
                                    <option></option>
                                    <option>Medical Insurance</option>
                                    <option>Life Insurance</option>
                                    <option>Accident Insurance</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column_1">
                                <label for="claiming_date">Date</label>
                            </div>
                            <div class="column_2">
                                <input type="date" id="claiming_date" value="<?php echo date('Y-m-d') ?>"
                                       name="claiming_date" placeholder="mm/dd/yyyy" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column_1">
                                <label for="claiming_amount">Claiming Amount</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="claiming_amount" name="claiming_amount"
                                       placeholder="Rs.20,000.00" required pattern="[0-9._%+-]+\.[0-9]{2}$">
                                <span id="numberText"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="column_1">
                                <label for="subject">Reason</label>
                            </div>
                            <div class="column_2">
                                    <textarea id="subject" name="subject" placeholder="Why You Are Applying..."
                                              required></textarea>
                                <span id="reasonText"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column_1">
                                <label for="submission">Report Submission</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="report_submission">
                                <input type="file" id="report_submission" name="report_submission"
                                       accept=".pdf, .png" multiple required>
                                <span id="custom-text"><div class="file_text">No file chosen, yet....</div></span>
                                <span id="upload"><div class="upload"><a href="#">Upload Here</a></div></span>
                            </div>
                        </div>

                        <div class="claim_button">
                            <input type="submit" value="Apply" name="submit">
                        </div>

                        <script type="text/javascript">
                            const report_submission = document.getElementById('report_submission');
                            const custom_text = document.getElementById('custom_text');
                            const upload = document.getElementById('upload');

                            upload.addEventListener("click", function () {
                                report_submission.click();
                            });

                            report_submission.addEventListener("click", function () {
                                if (report_submission.value) {
                                    custom_text.innerHTML = report_submission.value;
                                } else {
                                    custom_text.innerHTML = "No File chose, yet";
                                }
                            });

                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div>
    <?php
    $this->view('includes/footer')
    ?>

</div>
<!--<script src="public\js\Benefitrequest.js"></script>-->
</body>
</html>


<?php

