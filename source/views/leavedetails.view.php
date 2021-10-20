<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="public\css\color.css">
    <link rel="stylesheet" href="public\css\leavedetails.css">
    <!-- <script src="https://unpkg.com/feather-icons"></script> -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <title>Leaves</title>
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
        <div>
            <?php
            $this->view('includes/header2')
            ?>
<<<<<<< Updated upstream
        </div>  
    <div class="leave_container">
        <div class="timeoff_head">
            <div class="head_title">
                <p class="main_title">Time Off</p>
            </div>
            
            <div class="leave_card">
            
                <div class="card">
                <a id = "anchor" href="RequestleaveController">
                    <p class="title">Casual Leaves</p>
                    <div class="icon">
                        <i class="item" data-feather="calendar"></i>
                        <p class="remain" id="casual_remain">4.5</p>
=======
        </div>
        <div class="leave_container">
            <div class="timeoff_head">
                <div class="head_title">
                    <p class="main_title">Time Off</p>
                </div>

                <div class="leave_card">

                    <div class="card" title="Click for Request Lave">
                        <a id = "anchor" href="RequestleaveController">
                            <p class="title">Casual Leaves</p>
                            <div class="icon">
                                <i class="item" data-feather="calendar"></i>
                                <p class="remain" id="casual_remain">4.5</p>
                            </div>
                            <p>DAYS AVAILABLE</p>
                        </a>
>>>>>>> Stashed changes
                    </div>
                    <p>DAYS AVAILABLE</p>
                </a>    
                </div>

<<<<<<< Updated upstream
                <div class="card">
                <a id = "anchor" href="RequestleaveController">
                    <p class="title">Sick Leaves<p>
                    <div class="icon">
                        <i class="item" data-feather="plus-square"></i>
                        <p class="remain"  id="sick_remain">4.5</p>
=======
                    <div class="card" title="Click for Request Lave">
                        <a id = "anchor" href="RequestleaveController">
                            <p class="title">Sick Leaves<p>
                            <div class="icon">
                                <i class="item" data-feather="plus-square"></i>
                                <p class="remain"  id="sick_remain">4.5</p>
                            </div>
                            <p>DAYS AVAILABLE</p>
                        </a>
>>>>>>> Stashed changes
                    </div>
                    <p>DAYS AVAILABLE</p>
                </a>
                </div>

<<<<<<< Updated upstream
                <div class="card">
                <a id = "anchor" href="RequestleaveController">
                    <p class="title">Annual Leaves</p>
                    <div class="icon">
                        <i class="item" data-feather="sun"></i>
                        <p class="remain"  id="annual_remain">4.5</p>
=======
                    <div class="card" title="Click for Request Lave">
                        <a id = "anchor" href="RequestleaveController">
                            <p class="title">Annual Leaves</p>
                            <div class="icon">
                                <i class="item" data-feather="sun"></i>
                                <p class="remain"  id="annual_remain">4.5</p>
                            </div>
                            <p>DAYS AVAILABLE</p>
                        </a>
>>>>>>> Stashed changes
                    </div>
                    <p>DAYS AVAILABLE</p>
                </a>
                </div>

            </div>
        </div>

        <div class="upcoming_timeoff">

            <div class="upcoming_header">
                <i class="item" data-feather="clock"></i>
                <p class="main_title">Upcoming Time Off</p>
            </div>

            <div class="upcoming_detail">
                <div class="icon">
                    <i class="item" data-feather="clock"></i>
                </div>
                <div class="description">
                    <!-- Dummy hard code value only -->
                    <!-- this data filling after open this page and then get data fron database -->
                    <div class="leave_name">
                        <p id="day">May 15</p>
                        <p id="reson">vesak full moon poya day</p>
                    </div>

                    <div class="leave_status">
                        <p id="status">pending</p>
                    </div>

                    
                </div>
            </div>
            
        </div>
        <div class="leave_history">
            <div class="history_header">
                <i class="item" data-feather="clipboard"></i>
                <p class="main_title">Leave History</p>
            </div>


            <div class="leave_type">
                <!-- <form onsubmit="return doSearch()"> -->
                <form action="">
                    <!-- <input type="option" id="search" required/>
                    <input type="submit" value="Search"/> -->
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <select id="leave" name="leave">
                        <option value="sick">Sick Leaves</option>
                        <option value="casual">Casual Leaves</option>
                        <option value="annual">Annual Leaves</option>
                    </select>
                    <!-- <input id="button" type="submit" value="Search"/> -->
                </form>
            </div>
            <table id="leave_history_result" >
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Used</th>
                </tr>
            </table>
        </div>
    </div>
    </div>
    <script>
        feather.replace()
    </script>
   
</div>
    <?php $this->view('includes/footer')?>
</div>
</body>

</html>