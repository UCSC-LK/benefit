
<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" href="<?=CSS_PATH?>home.css">
    <title>Home Page</title>
    
</head>

<body>
<div>
   <?php $this->view('includes/header1')?>
</div>

<div class="container">
    <div class="left">
        
        <div class="card_container" id = "financial">
            <div class="card">
                <h2>Financial Branch</h2>
                <p>Manger: Mr.Aruna</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
        
        <div class="card_container" id = "financial">
            <div class="card">
                <h2><b>HRM Branch</b></h2>
                <p>Manger: Mr.Silva</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="card_container" id = "financial">
            <div class="card">
                <h2>Operational Branch</h2>
                <p>Manger: Mr.Chathura</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>

        <div class="card_container" id = "financial">
            <div class="card">
                <h2>Selling Branch</h2>
                <p>Manger: Mr.Bimsara</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More <i class="fas fa-arrow-right"></i></button>
            </div> 
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L30,229.3C60,203,120,149,180,106.7C240,64,300,32,360,26.7C420,21,480,43,540,58.7C600,75,660,85,720,80C780,75,840,53,900,37.3C960,21,1020,11,1080,53.3C1140,96,1200,192,1260,234.7C1320,277,1380,267,1410,261.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg> -->

        </div> 
        
    </div>

    <div class="right">

    </div>
</div>


<!-- <footer>
        <p class="ofs">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
</footer> -->
    
    
</body>   
</html>

	<!--<?=Auth::getfirst_name()?>-->
