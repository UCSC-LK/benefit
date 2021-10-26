<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>reporting.css">

    <title>Reports</title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1')
    ?>
</div>

<div class="page_content">
    <?php if (Auth::access('HR Manager')): ?>
        <?php
//        $this->view('includes/hrnav');
        $this->view('includes/hrmanagernavbar');
        ?>
    <?php endif; ?>

    <?php if (Auth::access('HR Officer')): ?>
        <?php
        $this->view('includes/hrofficernavbar');
        ?>
    <?php endif; ?>

    <div class="main_container">
        <div class="report_container">
            <div class="report_type">
                <div class="report_name">
                    <p>Time Offs</p>
                </div>
                <div class="options">
                    <button>View</button>
                    <div class="download">
                        <i class="fa fa-download" style="font-size:30px"></i>
                    </div>
                </div>
            </div>

            <div class="divide_line"></div>

            <div class="chart">
            </div>
        </div>

        <div class="report_container">
            <div class="report_type">
                <div class="report_name">
                    <p>Benefits</p>
                </div>
                <div class="options">
                    <button>View</button>
                    <div class="download">
                        <i class="fa fa-download" style="font-size:30px"></i>
                    </div>
                </div>
            </div>

            <div class="divide_line"></div>

            <div class="chart">
            </div>
        </div>

        <div class="report_container">
            <div class="report_type">
                <div class="report_name">
                    <p>Reimbursements</p>
                </div>
                <div class="options">
                    <button>View</button>
                    <div class="download">
                        <i class="fa fa-download" style="font-size:30px"></i>
                    </div>
                </div>
            </div>

            <div class="divide_line"></div>

            <div class="chart">
            </div>
        </div>
    </div>
</div>

</body>
</html>

