<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <link rel="stylesheet" href="public\css\leaveapprove.css">
    <title>Leave Approve</title>
  </head>
  <body>

    <div>
        <?php
            $this->view('includes/header1')
        ?>
    </div>

    <?php if(Auth::access('Supervisor')):?>   
    <div>
    <?php
    $this->view('includes/parentemployeenavbar');
    ?>
</div> 
<?php endif;?>

<?php if(Auth::access('HR Manager')):?>
<div>
    <?php
    $this->view('includes/hrmanagernavbar');
    ?>
</div> 
<?php endif;?>
    <!-- <h1>This is Leave Approve Page</h1> -->
    <div class="main_container">
      <div class="empployee_details">
        <div class="card">
          <div class="img">
            <img src="public\img\profile\003.PNG" alt="employee name">
          </div>
          <p>Chathura Liyanage</p>
          <p>Leave Date</p>
        </div>
      </div>
      <div class="leave_details">
        <table>
          <tr>
            <td class="left">Leave Type</td> <td>Sick Leave</td>
          </tr>

          <tr>   </tr>

          <tr>
            <td id="title">Full Days</td> <td></td>
          </tr>

          <tr>
            <td class="left">Starting Date</td> <td>Get data db</td>
          </tr>

          <tr>
            <td class="left">Ending Date</td> <td>Get data db</td>
          </tr>

          <tr> </tr>

          <tr>
            <td id="title">Half Day</td> <td></td>
          </tr>

          <tr>
            <td class="left">Date</td>  <td>Half from db</td>
          </tr>

          <tr>
            <td class="left"></td>   <td>morning or evening</td>
          </tr>

          <tr>
            <td class="left">Remaining Leaves</td>   <td>Reamining sick leaves</td>
          </tr>


          <tr>   </tr>
          <tr>
            <td class="buttons"><button type="reset"  id="cancel">Reject</button></td>
            <td class="buttons"><button type="submit" id="add" name="submit">Approve</button> </td>
          </tr>
          <tr>   </tr>

        </table>
      </div>
    </div>

  <div>
    <?php
    $this->view('includes/footer')
    ?>
  </div>
  </body>
</html>
