<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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
    $this->view('includes/hrmanagernavbar');
//    $this->view('includes/hrnav');
    ?>

    <div class="main_container">
        <div class="approve-container">
            <div>
                <p class="handling_title">Pending List</p>
            </div>
            <hr>
            <div class="card-container">
                <?php

                if(boolval($requested)){
                for ($i = 0;$i < sizeof($requested);$i++) {
                    if ($requested >= 1) {
                //            for ($j = 0; $j < sizeof($requested[$i]); $j++) { ?>
                        <div class='header-approve' id='btn'>
                            <center>
                                <img src="<?php echo $requested[$i]['profile_image'];?>" alt='Profile Image'
                                     class='profile__image'>
                            </center>
                            <p class='name'>
                                <?php
                                print_r($requested[$i]['first_name']); ?>
                            </p>
                            <p class="name">
                                <?php
                                echo " ";
                                print_r($requested[$i]['last_name']);
                                ?>
                            </p>
                            <div style="margin-bottom: 15px">
                                <p class='date'>
                                    <?php
                                    print_r($requested[$i]['details']->benefit_type); ?>
                                </p>
                                <p class='date'>
                                    <?php
                                    print_r($requested[$i]['details']->claim_date); ?>
                                </p>
                            </div>
                            <?php
                                $btnChange = 'btnChange';
                                $btnChange .= $i;
                                //echo $btnChange;
                            ?>
                            <center>
                                <button class="show_btn" type="button" name="show" value="show" id="<?php echo $btnChange ?>" onclick="reply_click(this.id)">Show</button>
                            </center>
                            <script type="text/javascript">

                                document.querySelector('<?php echo "#".$btnChange;?>').addEventListener('click', () => {
                                    //document.getElementById("this.id").addEventListener('click', () => {
                                    Confirm.open({
                                        title: 'Request From <?php print_r($requested[$i]['first_name']); echo " "; print_r($requested[$i]['last_name']); ?>',
                                        message: 'Benefit Type : <?php print_r($requested[$i]['details']->benefit_type); echo "<br>";?> ' +
                                            'Claimed Date : <?php print_r($requested[$i]['details']->claim_date); echo "<br>";?>' +
                                            'Claimed Amount : <?php print_r($requested[$i]['details']->claim_amount); echo "<br>";?>' +
                                            'Description : <?php print_r($requested[$i]['details']->benefit_description); echo "<br>";?>' +
                                            'Report : <?php print_r($requested[$i]['details']->report_location); echo "<br>";?>',
                                        onok: () => {
                                            //document.body.style.backgroundColor = 'blue';
                                            window.location.href = "Approvebenefit/accept/<?php print_r($requested[$i]['details']->report_hashing); ?>"
                                        },
                                        onreject: () => {
                                            window.location.href = "Approvebenefit/reject/<?php print_r($requested[$i]['details']->report_hashing); ?>"
                                        }

                                    })
                                });
                            </script>

                        </div>
                        <?php
                    }
                }
                } ?>

            </div>
            <div class="approve-container">
                <div>
                    <p class="handling_title">Benefit History</p>
                </div>
                <hr>
                <div class="history_table">
                    <?php
                    if(boolval($handled)){ ?>
                    <table id="claim_history_table">
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Benefit Type</th>
                            <th>Description</th>
                            <th>Amount(LKR)</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        for($i=0;$i<sizeof($handled);$i++){ ?>
                        <tr>
                            <td><?php print_r($handled[$i]['benefit_details']->claim_date); ?></td>
                            <td><?php print_r($handled[$i]['emp_details'][0]->first_name); echo ' '; print_r($handled[$i]['emp_details'][0]->last_name);?></td>
                            <td><?php print_r($handled[$i]['benefit_details']->benefit_type); ?></td>
                            <td><?php print_r($handled[$i]['benefit_details']->benefit_description); ?></td>
                            <td><?php print_r($handled[$i]['benefit_details']->claim_amount); ?></td>
                            <td class="status"><?php print_r($handled[$i]['benefit_details']->benefit_status); ?></td>
                        </tr>
                        <?php
                        }?>
                    </table>
                    <?php
                    }?>
                </div>
            </div>
        </div>

    </div>
</div>

<script>

    function addBox() {
        var temp = document.getElementById("temp").content;
        document.getElementById("btn").appendChild(temp);
    }

    document.getElementById("btn").addEventListener("click", addBox);

</script>
<!--
<div class="confirm">
    <div class="confirm__window">
        <div class="confirm__titlebar">
            <span class="confirm__title">Benefit Request By ASDFG</span>
            <button class="confirm__close">&times;</button>
        </div>
        <div class="confirm__content">
            <div class="row">
                <div class="column_1">
                    <label for="claim_date">Claimed Date :</label>
                </div>
                <div class="column_2">
                    <p class="values">
                        <?php
                        print_r($requested[0]['details']->benefit_type); ?> </p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="claim_date">Claimed Date :</label>
                </div>
                <div class="column_2">
                    <p class="values">
                        <?php
                        print_r($requested[0]['details']->claim_date); ?> </p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="claim_date">Claimed Date :</label>
                </div>
                <div class="column_2">
                    <p class="values">
                        <?php
                        print_r($requested[0]['details']->claim_amount); ?> </p>
                </div>
            </div>
            <div class="row">
                <div class="column_1">
                    <label for="claim_date">Claimed Date :</label>
                </div>
                <div class="column_2">
                    <p class="values">
                        <?php
                        print_r($requested[0]['details']->benefit_description); ?> </p>
                </div>
            </div>
        </div>
        <div class="confirm__buttons">
            <button class="confirm__button confirm__button--ok confirm__button--fill">OK</button>
            <button class="confirm__button confirm__button--cancel">Cancel</button>
        </div>
    </div>
</div>
-->

<!--<script src="http://localhost/benefit/public/js/approve.js">-->
<script>
    const  Confirm = {
        open(options){
            options = Object.assign({},{
                title: '',
                message: '',
                okText: 'Accept',
                //cancelText: 'Reject',
                rejectText: 'Reject',
                onok: function () {},
                oncancel: function () {},
                onreject: function () {}
            }, options);


            const html = `<div class="confirm">
    <div class="confirm__window">
        <div class="confirm__titlebar">
            <span class="confirm__title">${options.title}</span>
            <button class="confirm__close">&times;</button>
        </div>
        <div class="confirm__content">${options.message}
        </div>
        <div class="confirm__buttons">
            <button class="confirm__button confirm__button--ok confirm__button--fill">${options.okText}</button>
            <button class="confirm__button confirm__button--cancel">${options.rejectText}</button>

</div>
    </div>
</div>`;

            const template = document.createElement('template');
            template.innerHTML = html;

            const confirmEl = template.content.querySelector('.confirm');
            const btnReject = template.content.querySelector('.confirm__button--cancel');
            const btnClose = template.content.querySelector('.confirm__close');
            const btnOk = template.content.querySelector('.confirm__button--ok');
            //const btnCancel = template.content.querySelector('.confirm__button--cancel');

            confirmEl.addEventListener('click', e => {
                if(e.target === confirmEl){
                    options.oncancel();
                    this._close(confirmEl);
                }
            });

            btnReject.addEventListener('click', e => {
                options.onreject();
                this._close(confirmEl);
            });

            btnOk.addEventListener('click', () => {
                options.onok();
                this._close(confirmEl);
            });

            // [btnCancel, btnClose].forEach(el => {
            //     el.addEventListener('click', () => {
            //         options.oncancel();
            //         this._close(confirmEl);
            //     });
            // });
            [btnClose].forEach(el => {
                el.addEventListener('click', () => {
                    options.oncancel();
                    this._close(confirmEl);
                });
            });

            document.body.appendChild(template.content);
        },

        _close (confirmEl){
            confirmEl.classList.add('confirm--close');
            confirmEl.addEventListener('animationend', () => {
                document.body.removeChild(confirmEl);
            });
        }
    }
</script>

</body>
</html>