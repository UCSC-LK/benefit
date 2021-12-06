<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>hrdocuments.css">

    <title></title>
</head>

<body>
    <div class="hrdocuments_container">
    <div>
   <?php $this->view('includes/header1')?>
</div>

<?php if(Auth::access('HR Manager')):?>
<div>
    <?php
    $this->view('includes/hrmanagernavbar');
    ?>
</div> 
<?php endif;?>
<?php if(Auth::access('HR Officer')):?>
<div>
    <?php
    $this->view('includes/hrofficernavbar');
    ?>
</div> 
<?php endif;?>
        <h1 class="h1">HR Documents</h1>
        <div class="row">
            <div class="column">
                <div class="card">
                    <h4>Employee Application Form</h4>
                    <img src="<?= IMG_PATH?>hrdocuments/emp_application_form.png" alt="" style="width:100%">
                    <?php if(Auth::access('HR Manager') || Auth::access('HR Officer')):?>
                    <button class="btn" onclick="document.getElementById('link-1').click()"><i class="fa fa-download"></i>      Update</button>
                    <?php endif;?>

                    <a id="link-1" href="<?= DOC_PATH ?>employment-application-form.docx" download hidden></a>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <h4>Employee Emergency Contact Form</h4>
                    <img src="<?= IMG_PATH?>hrdocuments/emp_emergency_form.png" alt="" style="width:100%">
                    <?php if(Auth::access('HR Manager') || Auth::access('HR Officer')):?>
                    <button class="btn" onclick="document.getElementById('link-1').click()"><i class="fa fa-download"></i>      Update</button>
                    <?php endif;?>

                    <a id="link-2" href="<?= DOC_PATH ?>employee-emergency-form.docx" download hidden></a>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <h4>Disciplinary action form</h4>
                    <img src="<?= IMG_PATH?>hrdocuments/emp_disciplinary_form.png" alt="" style="width:100%">
                    <?php if(Auth::access('HR Manager') || Auth::access('HR Officer')):?>
                    <button class="btn" onclick="document.getElementById('link-1').click()"><i class="fa fa-download"></i>      Update</button>
                    <?php endif;?>

                    <a id="link-3" href="<?= DOC_PATH ?>disciplinary-action-form.docx" download hidden></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <div class="card">
                    <h4>HR Service Request Form</h4>
                    <img src="<?= IMG_PATH?>hrdocuments/emp_hr_request_form.png" alt="" style="width:100%">
                    <?php if(Auth::access('HR Manager') || Auth::access('HR Officer')):?>
                    <button class="btn" onclick="document.getElementById('link-1').click()"><i class="fa fa-download"></i>      Update</button>
                    <?php endif;?>

                    <a id="link-4" href="<?= DOC_PATH ?>hr-service-request-form.docx" download hidden></a>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <h4>Exit Interview Form</h4>
                    <img src="<?= IMG_PATH?>hrdocuments/emp_exit_interview_form.png" alt="" style="width:100%">
                    <?php if(Auth::access('HR Manager') || Auth::access('HR Officer')):?>
                    <button class="btn" onclick="document.getElementById('link-1').click()"><i class="fa fa-download"></i>      Update</button>
                    <?php endif;?>
                

                    <a id="link-5" href="<?= DOC_PATH ?>exit-interview-form.docx" download hidden></a>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <h4>Travel Request Form</h4>
                    <img src="<?= IMG_PATH?>hrdocuments/emp_travel_request_form.png" alt="" style="width:100%">
                    <?php if(Auth::access('HR Manager') || Auth::access('HR Officer')):?>
                    <button class="btn" onclick="document.getElementById('link-1').click()"><i class="fa fa-download"></i>      Update</button>
                    <?php endif;?>

                    <a id="link-6" href="<?= DOC_PATH ?>travel-request-form.docx" download hidden></a>
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