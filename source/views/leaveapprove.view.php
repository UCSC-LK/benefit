<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\color.css">
    <link rel="stylesheet" href="public\css\approve.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <title>Leave Approve</title>
</head>
<body>

<div>
    <?php
    $this->view('includes/header1')
    ?>
</div>

<div class="page_content">

    <?php if (Auth::access('Supervisor')): ?>

        <?php
//        $this->view('includes/supervisornav');
        $this->view('includes/parentemployeenavbar');
        ?>

    <?php endif; ?>

    <?php if (Auth::access('HR Manager')): ?>
        <div>
            <?php
            $this->view('includes/hrmanagernavbar');
//            $this->view('includes/hrnav');
            ?>
        </div>
    <?php endif; ?>
    <!-- <h1>This is Leave Approve Page</h1> -->
    <div class="main_container">
        <div class="approve-container">
            <div>
                <p class="handling_title">Handle Time Offs</p>
            </div>
            <div class="card-container">
                <div class="header-approve" id="btn">
                    <center>
                        <img src="<?= IMG_PATH ?>\profile\download.png" class="profile__image">
                    </center>
                    <p class="name">Dilukshan</p>
                    <p class="name">Bimasara</p>
                    <div>
                        <center>
                            <i class="fas fa-band-aid"></i>
                        </center>
                        <p class="date">06th Oct</p>
                    </div>
                    <center>
                        <button type="button" name="show" value="show">Show</button>
                    </center>
                </div>
                <div class="header-approve" id="btn">
                    <center>
                        <img src="<?= IMG_PATH ?>\profile\download.png" class="profile__image">
                    </center>
                    <p class="name">Dilukshan</p>
                    <p class="name">Bimasara</p>
                    <div>
                        <center>
                            <i class="fas fa-sun"></i>
                        </center>
                        <p class="date">06th Oct</p>
                    </div>
                    <center>
                        <button type="button" name="show" value="show">Show</button>
                    </center>
                </div>
                <div class="header-approve" id="btn">
                    <center>
                        <img src="<?= IMG_PATH ?>\profile\download.png" class="profile__image">
                    </center>
                    <p class="name">Dilukshan</p>
                    <p class="name">Bimasara</p>
                    <div>
                        <center>
                            <i class="far fa-calendar-plus"></i>
                        </center>
                        <p class="date">06th Oct</p>
                    </div>
                    <center>
                        <button type="button" name="show" value="show">Show</button>
                    </center>
                </div>
            </div>
            <div class="detail-container">

            </div>
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
