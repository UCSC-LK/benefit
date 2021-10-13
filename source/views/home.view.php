
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
<div class="row">
    <div class="row-1">
        <div class="column1">
            <div class="card">
                <h2>Financial Branch</h2>
                <p>Manger: Mr.Aruna</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More...</button>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <h2><b>HRM Branch</b></h2>
                <p>Manger: Mr.Silva</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More...</button>
            </div>
        </div>
    </div>

    <div class="row-2">
        <div class="column1">
            <div class="card">
                <h2>Operational Branch</h2>
                <p>Manger: Mr.Chathura</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More...</button>
            </div>
        </div>
        <div class="column2">
            <div class="card">
                <h2>Selling Branch</h2>
                <p>Manger: Mr.Bimsara</p>
                <p>Employee: 50</p>
                <button class="show-more">Show More...</button>
            </div>
        </div>
    </div>
</div>

<footer>
        <p class="ofs">Copyright © 2021 Oracle Freight Solutions | Powered by Oracle Freight Solutions</p>
</footer>
    
    
</body>   
</html>

	<!--<?=Auth::getfirst_name()?>-->
