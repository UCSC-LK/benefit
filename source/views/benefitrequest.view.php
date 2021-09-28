<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--    <link rel="stylesheet" href="includes/css/header2.css" >-->
    <!--    <link rel="stylesheet" href="includes/css/benefitrequest.css" >-->
    <link rel="stylesheet" href="<?=CSS_PATH?>benefitrequest.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>header1.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>header2.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>footer.css">
    <!--    <script deffer src="includes/js/benefits_form.js"></script>-->
    <title></title>
</head>
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

        <div class="header2">
            <div class="nav-bar2" id="nav-bar">
                <div class="list"> <a href="#">Time Off</a></div>
                <div class="list"> <a href="#">Reimbursements</a></div>
                <div class="list"> <a href="#">Benefits</a></div>
                <div class="list"> <a href="#">Performance</a></div>
            </div>
        </div>

        <div class="benefit_container">
            <div class="benefit_head">
                <p class="claim_benefit">Claim Benefit</p>
                <div>
                    <div class="benefit_form">

                        <form action="BenefitrequestController" method="post">

                            <!--                            <div class="row">-->
                            <!--                                <div class="column_1">-->
                            <!--                                    <label for="employee_id">Employee ID</label>-->
                            <!--                                </div>-->
                            <!--                                <div class="column_2">-->
                            <!--                                    <input type="text" id="employee_id" name="employee_id" required>-->
                            <!--                                </div>-->
                            <!--                            </div>-->

                            <div class="row">
                                <div class="column_1">
                                    <label for="benefit_type">Benefit_type</label>
                                </div>
                                <div class="column_2">
                                    <select id="benefit_type" name="benefit_type">
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
                                    <input type="date" id="claiming_date" name="claiming_date" placeholder="mm/dd/yyyy">
                                </div>
                            </div>

                            <div class="row">
                                <div class="column_1">
                                    <label for="claiming_amount">Claiming Amount</label>
                                </div>
                                <div class="column_2">
                                    <input type="text" id="claiming_amount" name="claiming_amount" placeholder="Rs.20,000" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="column_1">
                                    <label for="subject">Reason</label>
                                </div>
                                <div class="column_2">
                                    <textarea id="subject" name="subject" placeholder="Why You Are Applying..." style="height:200px; width: 550px;" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="column_1">
                                    <label for="submission">Report Submission</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="report_submission">
                                    <input type="file" id="report_submission" name="report_submission" hidden="hidden">
                                    <span id="custom-text"><div class="file_text">No file chosen, yet</div></span>
                                    <span id="upload"><div class="upload"><a href="#">Upload Here</a></div></span>
                                </div>
                            </div>

                            <div class="claim_button">
                                <input type="submit" value="Apply" name="submit">
                            </div>

                            <script type="text/javascript">
                                const report_submission = document.getElementById("report_submission");
                                const custom_text = document.getElementById("custom_text");
                                const upload = document.getElementById("upload");

                                upload.addEventListener("click", function () {
                                    report_submission.click();
                                });

                                report_submission.addEventListener("change", function () {
                                    if(report_submission.value) {
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
</div>

<div>
    <?php
    $this->view('includes/footer')
    ?>

</div>
</body>
</html>


<?php

