<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\requestleave.css">
    <link rel="stylesheet" href="public\css\color.css">
    <!-- <script src="../../public/js/request_leave.js"></script> -->
    <title>Request leave</title>
</head>
<body>
    <!-- <div> -->
        <?php
        $this->view('includes/header1');
        ?>
    <!-- </div> -->
    <div class="main_container">
        <div class="title">
            <p>REQUEST LEAVE</p>
        </div>

        <div class="input_feild">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="leave_type">
                    <label for="leave_type">Leave Type</label>
                    <select name="leave_type" id="leave_type">
                        <option value="sick">Sick Leave</option>
                        <option value="casual">Casual Leave</option>
                        <option value="annual">Annual Leave</option>
                    </select>
                </div>

                <div class="full_day">
                    <p>Full Days</p>
                    <div class="full_duration">
                      <div class="start_date">
                          <label for="start_date">Start Date </label>
                          <input type="date" name="start_date" id="start_date">
                      </div>

                      <div class="end_date">
                          <label for="end_date">End Date</label>
                          <input type="date" name="end_date" id="end_date">
                      </div>
                    </div>

                </div>

                <div class="half_day">
                    <p>Half Days</p>
                    <div class="half_duration">
                      <div class="date_item">
                        <label for="start_date">Date </label>
                        <input type="date" name="start_date" id="start_date">
                      </div>

                      <div class="item">
                        <label for="half">Morning </label>
                        <input type="radio" id="morning" name="half" value="morning">
                      </div>

                      <div class="item">
                        <label for="half">Evening</label>
                        <input type="radio" name="half" value="evening" id="evening">
                      </div>

                    </div>
                </div>

                <div class="buttons">
                    <button type="reset" id="cancel">Cancel</button>
                    <button type="submit" id="request" name="submit">Request</button>
                </div>
            </form>
        </div>
    </div>

    <div class="fot">
        <?php $this->view('includes/footer')?>
    </div>
</body>
</html>
