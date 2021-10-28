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
                <div class="add_benefits">
                    <p><i class="fas fa-plus-circle"></i> Add New Benefit</p>
                </div>
                <?php endif; ?>
            </div>
            <table>
                <tr>
                    <th>Benefit Type</th>
                    <th>Max Amount</th>
                    <th>Valid Years</th>
                    <th>Valid Months</th>
                    <th>Option</th>
                </tr>
                <tr>
                    <td>Medical Insurance</td>
                    <td>20000.00 LKR</td>
                    <td>01</td>
                    <td>00</td>
                    <td><a href=""><i class="fas fa-edit"></i></a>
                        <?php if(Auth::access('HR Manager')): ?>
                            <a href=""><i class="fas fa-trash-alt"></i></a>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Life Insurance</td>
                    <td>20000.00 LKR</td>
                    <td>01</td>
                    <td>00</td>
                    <td><a href=""><i class="fas fa-edit"></i></a>
                        <?php if(Auth::access('HR Manager')): ?>
                        <a href=""><i class="fas fa-trash-alt"></i></a>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="benefit_head">
            <fieldset>
                <legend>UPDATE BENEFIT</legend>
                <!-- <div class="heading">
                        <h2>CLAIM BENEFIT</h2>
                    </div> -->

                <div class="benefit_form">

                    <form name="myform" action="#" method="post">

                        <div class="row">
                            <div class="column_1">
                                <label for="benefit_type">Benefit Type</label>
                            </div>
                            <div class="column_2">
                                <select id="benefit_type" name="benefit_type" required>
                                    <option></option>
                                    <option>Medical Insurance</option>
                                    <option>Life Insurance</option>
                                    <option>Accident Insurance</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column_1">
                                <label for="claiming_amount">Maximum Amount</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="claiming_amount" name="claiming_amount"
                                       placeholder="Rs.200,000.00" required pattern="[0-9._%+-]+\.[0-9]{2}$">
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
                        <div class="row">
                            <div class="column_1">
                                <label for="valid_months">Valid Months</label>
                            </div>
                            <div class="column_2">
                                <input type="text" id="valid_months name=" valid_years" required>
                            </div>
                        </div>

                        <div class="claim_button">
                            <input type="submit" value="Update" name="submit">
                            <a href="<?= PATH ?>/Benefit/update">
                                <input class="cancle_button" type="button" value="Cancel"></a>
                        </div>

                    </form>
            </fieldset>

        </div>
    </div>
</div>
</body>
</html>