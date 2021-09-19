<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<!--    <link rel="stylesheet" href="includes/css/header2.css" >-->
<!--    <link rel="stylesheet" href="includes/css/benefit.css" >-->
    <link rel="stylesheet" href="<?=CSS_PATH?>benefits.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>header1.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>header2.css">
    <link rel="stylesheet" href="<?=CSS_PATH?>footer.css">

    <title></title>
</head>
<body>
<div>
    <?php
    $this->view('includes/header1')
    ?>

</div>

<div class="profile_container">
    <div class="profile">
        <img src="<?=IMG_PATH?>me.jpeg" alt="Profile Image" class="profile__image">
        <div class="name">Sathya Udayangi</div>
        <div class="job">Software Engineer</div>
        <div class="contact">
            <i class="material-icons">local_phone</i>071#######
        </div>
        <div class="email">
            <i class="material-icons">email</i>sathyau@gmail.com
        </div>
        <div class="hire">Hired Date</div>
        <div class="date">27th Aug 2019</div>
        <div class="address">No 22, ABD Rd, Galle</div>
        <div class="supervisor">
            <i class="material-icons">supervisor_account</i>Mr.Dilukshan
        </div>

    </div>


    <div class="content">
        <div class="header2">
            <div class="nav-bar2" id="nav-bar">
                <div class="list"> <a href="#">Time Off</a></div>
                <div class="list"> <a href="#">Reimbursements</a></div>
                <div class="list"> <a href="#">Benefits</a></div>
                <div class="list"> <a href="#">Performance</a></div>
            </div>
        </div>

        <div class="benefit_container">
            <div class="benefit_head">
                <p class="main_title">Benefits</p>
                <div>

                    <form action="BenefitrequestController">
                        <div class="benefit_card">

                            <div class="benefit_card_column">
                                <div class="card">
                                    <p class="title">Medical Insurance</p>
                                    <div class="text">Remaining Amount</div>
                                    <div class="remain_amount">100,000 LKR</div>
                                    <div class="text">Max Amount</div>
                                    <div class="max_amount">200,000 LKR</div>
                                    <div class="text">Renew Date</div>
                                    <div class="text">25th Jan 2022</div>
                                </div>
                            </div>
                            <div class="benefit_card_column">
                                <div class="card">
                                    <p class="title">Medical Insurance</p>
                                    <div class="text">Remaining Amount</div>
                                    <div class="remain_amount">100,000 LKR</div>
                                    <div class="text">Max Amount</div>
                                    <div class="max_amount">200,000 LKR</div>
                                    <div class="text">Renew Date</div>
                                    <div class="text">25th Jan 2022</div>
                                </div>
                            </div>
                            <div class="benefit_card_column">
                                <div class="card">
                                    <p class="title">Medical Insurance</p>
                                    <div class="text">Remaining Amount</div>
                                    <div class="remain_amount">100,000 LKR</div>
                                    <div class="text">Max Amount</div>
                                    <div class="max_amount">200,000 LKR</div>
                                    <div class="text">Renew Date</div>
                                    <div class="text">25th Jan 2022</div>
                                </div>
                            </div>
                        </div>
                        <div class="claim_button">
                            <input type="submit" value="Apply" name="submit">
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="benefit_history">
            <div class="history_header">
                <p class="main_title"><i class="material-icons">history</i>Benefit History</p>
            </div>

            <div class="benefit_type">
                <form action="">

                    <select id="benefit" name="benefit">
                        <option value="medical">Medical Insurance</option>
                        <option value="life">Life Insurance</option>
                        <option value="accident">Accident Insurance</option>
                    </select>
                    <input id="button" type="submit" value="Search"/>
                </form>
            </div>
            <table id="benefit_history_result" >
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Used</th>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>

<div>
    <?php
    $this->view('includes/footer')
    ?>

</div>
</body>
</html>


