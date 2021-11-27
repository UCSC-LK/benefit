<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>updatebenefit.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>benefits.css">
    <title></title>
</head>

<body>
<div>
    <?php
    $this->view('includes/header1');
    ?>
</div>

<div class="page_content">
    <?php if (Auth::access('HR Manager')): ?>
        <div>
            <?php
            //            $this->view('includes/hrnav');
            $this->view('includes/hrmanagernavbar');
            ?>
        </div>
    <?php endif; ?>

    <?php if (Auth::access('HR Officer')): ?>
        <div>
            <?php
            //            $this->view('includes/hrofficernav');
            $this->view('includes/hrofficernavbar')
            ?>
        </div>
    <?php endif; ?>
    <div class="main_container">
        <div class="benefit_list">
            <div class="title_container">
                <p class="handling_title">Benefits List</p>
                <?php if(Auth::access('HR Manager')): ?>
                <div class="add_benefits" id="add_benefits" onclick="openForm()">
                    <p><i class="fas fa-plus-circle"></i> Add New Benefit</p>
                </div>
                <?php endif; ?>
            </div>
            <?php
            if(boolval($details)){ ?>
            <table>
                <tr>
                    <th>Benefit Type</th>
                    <th>Max Amount (LKR)</th>
                    <th>Valid Years</th>
                    <th>Valid Months</th>
                    <th>Options</th>
                </tr>
                <?php
                for($i=0 ;$i<sizeof($details); $i++){ ?>
                <tr>
                    <td><?php print_r($details[$i]->benefit_type); ?></td>
                    <td><?php print_r($details[$i]->max_amount); ?></td>
                    <td><?php print_r($details[$i]->valid_years); ?></td>
                    <td><?php print_r($details[$i]->valid_months); ?></td>
                    <td><a href=""><i class="fas fa-edit"></i></a>
                        <?php if(Auth::access('HR Manager')): ?>
                            <a href=""><i class="fas fa-trash-alt"></i></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php
                } ?>
            </table>
            <?php
            }
            else { ?>
                    <div class="no_benefits">No Benefits Yet!</div>
            <?php }?>
        </div>
        <div class="benefit_head" id="myForm">
            <fieldset>
                <legend>UPDATE BENEFIT</legend>
                <!-- <div class="heading">
                        <h2>CLAIM BENEFIT</h2>
                    </div> -->

                <div class="benefit_form">

                    <form action="#" method="post">

                        <div class="row">
                            <div class="column_1">
                                <label for="benefit_type">Benefit Type</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="benefit_type" name="benefit_type" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column_1">
                                <label for="claiming_amount">Maximum Amount (LKR)</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="max_amount" name="max_amount"
                                       placeholder="200,000.00" required pattern="[0-9._%+-]+\.[0-9]{2}$">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column_1">
                                <label for="valid_months">Valid Months</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="valid_months" name="valid_months" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column_1">
                                <label for="valid_years">Valid Years</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="valid_years" name="valid_years" required>
                            </div>
                        </div>

                        <div class="claim_button">
                            <button class="update_button" type="submit" value="Update" name="submit">Add</button>
                            <button class="cancle_button" type="button" onclick="closeForm()">Cancel</button>
                        </div>

                    </form>
            </fieldset>

        </div>
    </div>
    <center>
        <img src="<?= IMG_PATH ?>down.png"  alt="" class="img">
    </center>
</div>
<script>
    function openForm(){
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm(){
        document.getElementById("myForm").style.display = "none"
    }
</script>
</body>
</html>