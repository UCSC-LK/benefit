<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>benefits.css">
    <link href="assets/css/feather.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <title>Benefits</title>
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
        <?php
        $this->view('includes/header2')
        ?>
        <div class="benefit_container">
            <div class="benefit_head">
                <p class="main_title">Benefits</p>
                <hr>
                <div>

                    <form action="BenefitrequestController">
                        <a href="<?= PATH ?>BenefitrequestController">
                            <div class="benefit_card">
                            <?php
                            if(boolval($all_details)){
                                for($i=0;$i<sizeof($all_details);$i++){?>
                                <div class="benefit_card_column">
                                    <div class="card">
                                        <p class="title"><?php print_r($all_details[$i]->benefit_type); ?></p>
                                        <div class="text">Remaining Amount</div>
                                        <div class="remain_amount">10,000 LKR</div>
                                        <div class="text">Max Amount</div>
                                        <div class="max_amount"><?php print_r($all_details[$i]->max_amount); ?></div>
                                        <div class="text">Renew Date</div>
                                        <div class="text">25th Jan 2022</div>
                                        <div>
                                            <button type="submit" value="claim">Claim</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                            }?>
                            </div>
                        </a>
                        <!--                        <div class="claim_button">-->
                        <!--                            <input type="submit" value="Apply" name="submit">-->
                        <!--                        </div>-->
                    </form>
                </div>

            </div>


            <div class="benefit_history">
                <div class="history_header">
<!--                    <i class="item" data-feather="clipboard"></i>-->
                    <i class="fa fa-history" aria-hidden="true"></i>
                    <p class="main_title">Benefit History</p>
                </div>
                <hr>

                <?php
                if (boolval($pending)) {
                    if (isset($pending)) {
                        for ($i = 0; $i < sizeof($pending); $i++) {
                            $row = $pending[$i]; ?>
                            <div class='pending_benefits'>
                                <div><?php print_r($row->benefit_type); ?> </div>
                                <div><?php print_r($row->claim_date); ?></div>
                                <div><i>Pending</i></div>
                                <a href="<?= PATH ?>BenefitrequestController/change/<?= $row->report_hashing ?>">
                                    <button type='submit' value='Change' name="change" class='change_button'><i
                                                class="fa fa-edit"></i> Update
                                    </button>
                                </a>
                                <a href="<?= PATH ?>Benefit/delete/<?= $row->report_hashing ?>">
                                    <button type='submit' value='Decline' name="delete" class='delete_button'><i class="fa fa-trash"></i> Delete
                                    </button>
                                </a>
                            </div>
                        <?php }
                    }
                }
                ?>

                <div class="benefit_type">
                    <form action="">
                        <select id="benefit_type" name="benefit">
                            <option value="medical">Medical Insurance</option>
                            <option value="life">Life Insurance</option>
                            <option value="accident">Accident Insurance</option>
                        </select>
                        <a href="#"><i class="fa fa-search"></i></a>
                    </form>
                </div>
                <?php
                if(boolval($handled)){?>
                <table id="benefit_history_result">
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Amount(LKR)</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    for($i=0;$i<sizeof($handled);$i++){
                    ?>
                    <tr>
                        <td><?php print_r($handled[$i]->claim_date); ?> </td>
                        <td><?php print_r($handled[$i]->benefit_type); ?> </td>
                        <td><?php print_r($handled[$i]->benefit_description); ?> </td>
                        <td><?php print_r($handled[$i]->claim_amount); ?> </td>
                        <td><?php print_r($handled[$i]->benefit_status); ?> </td>
                    </tr>
                <?php
                    }
                }
                else{
                    echo "No Request Done Yet";
                }
                ?>
                </table>

            </div>

            <!--            <div class="benefit_type">-->
            <!--                <form action="">-->
            <!---->
            <!--                    <select id="benefit" name="benefit">-->
            <!--                        <option value="medical">Medical Insurance</option>-->
            <!--                        <option value="life">Life Insurance</option>-->
            <!--                        <option value="accident">Accident Insurance</option>-->
            <!--                    </select>-->
            <!--                    <input id="button" type="submit" value="Search"/>-->
            <!--                </form>-->
            <!--            </div>-->
            <!---->
            <!--            <table id="benefit_history_result">-->
            <!--                <tr>-->
            <!--                    <th>Date</th>-->
            <!--                    <th>Description</th>-->
            <!--                    <th>Used</th>-->
            <!--                </tr>-->
            <!--            </table>-->

        </div>
    </div>
</div>

<!--<div>-->
<!--    --><?php
//    $this->view('includes/footer')
//    ?>
<!--</div>-->

</body>
</html>

