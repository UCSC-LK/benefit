<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
//    $this->view('includes/supervisornav');
    $this->view('includes/parentemployeenavbar');
    ?>

    <div class="main_container">
        <div class="approve-container">
            <div class="header-approve">
                <img src="<?= IMG_PATH ?>profile/Sathya.jpeg" alt="Profile Image" class="profile__image">
                <p class="name">Sathya Udayangi</p>
            </div>

            <div class="details">
                <form action="#">
                    <div class="row">
                        <div class="column_1">
                            <label for="emp_id">Employee ID</label>
                        </div>
                        <div class="column_2">
                            <input type="text" id="emp_id" name="emp_id" placeholder="19000125" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column_1">
                            <label for="date">Date</label>
                        </div>
                        <div class="column_2">
                            <input type="date" id="date" name="date" placeholder="mm/dd/yyyy">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column_1">
                            <label for="attend_time">Attend Time</label>
                        </div>
                        <div class="column_2">
                            <input type="text" id="attend_time" name="attend_time" placeholder="8.00 am" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column_1">
                            <label for="leaved_time">Leaved Time</label>
                        </div>
                        <div class="column_2">
                            <input type="text" id="leaved_time" name="leaved_time" placeholder="4.00 am" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column_1">
                            <label for="hours">OT Hours</label>
                        </div>
                        <div class="column_2">
                            <input type="text" id="hours" name="hours" placeholder="8 hours" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column_3">
                            <label for="history">Attendance History</label>
                        </div>
                        <table id="attendance_history_table">
                            <tr>
                                <th>Date</th>
                                <th>Worked Hours</th>
                                <th>OT Hours</th>
                            </tr>
                            <tr>
                                <th>2021/05/08</th>
                                <th>8 h</th>
                                <th>0 h</th>
                            </tr>
                        </table>
                    </div>
                    <div class="buttons">
                        <input class="reject_button" type="submit" value="Cancel" name="reject">
                        <input class="approve_button" type="submit" value="Mark" name="approve">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


</html>