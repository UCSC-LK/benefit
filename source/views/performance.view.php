<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?=CSS_PATH?>header2.css"> -->
    <link rel="stylesheet" href="<?=CSS_PATH?>addperfor.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title></title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>
<div class="profile_container">
        <div class="profile">
            <?php
            $this->view('includes/profile1');
            ?>
        </div>
    <div class="content" id="cont">
<!-- <div class="header2">
    <div class="nav-bar2" id="nav-bar">
        <div class="list"><a href="#">Time Off</a></div>
        <div class="list"><a href="<?=PATH?>Reimbursement">Reimbursements</a></div>
        <div class="list"><a href="<?=PATH?>BenefitrequestController">Benefits</a></div>
        <div class="list"><a href="<?=PATH?>Performance">Performance</a></div>
    </div>
</div> -->
    <?php
        $this->view('includes/header2');
        ?>
   <div>
    <div class="conta" style="max-width: 75%;">
        <div class="row">
            <div class="col-6 chart">
                <canvas id="myChart2" ></canvas>
            </div>
        </div>
    </div>
    <?php
    if(boolval($row)>0){ 
    $row=[$row[0]->communication,$row[0]->quality_of_work,$row[0]->organization,$row[0]->team_skills,$row[0]->multitasking_ability];
    

    ?>

    <script >
        var labels2 = ['Communication', 'Quality of work', 'Organization', 'Team skills','Multitasking ability'];
        var  data2 = <?=json_encode($row)?>;
        var colors2 = ['#a88d32', '#73a832', '#32a89e' ,'#8f72e8' ,'#a274a6'];

        var ctx = document.getElementById("myChart2").getContext('2d');

        var myChart2 = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels2,
                datasets: [ {
                    data: data2,
                    backgroundColor: colors2
                }]
            },
            options: {
                title: {
                    
                    display: true
                },
                legend: {
                display: false
                }
            }
        });

    </script>
<?php }
else{
    ?>
    <h3 style="text-align: center;">You don't have recods yet</h3>
<?php }?>
</div>
</div>
</div>
<div class="fot">
    <?php $this->view('includes/footer')?>
</div>
</body>
</html>