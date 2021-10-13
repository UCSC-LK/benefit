<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>hierarchy.css">
    <title></title>
</head>

<div>
   <?php $this->view('includes/header1')?>
</div>
<body class="hierarchy-body">

    <div class="hierarchy-container">

        <h1 class="level-1 rectangle">CEO</h1>
        <ol class="level-2-wrapper">
            <li>
                <h2 class="level-2 rectangle">Director A</h2>
                <ol class="level-3-wrapper">
                    <li>
                        <h3 class="level-3 rectangle">Manager A</h3>
                        <ol class="level-4-wrapper">
                            <li>
                                <h4 class="level-4 rectangle">Person A</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person B</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person C</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person D</h4>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <h3 class="level-3 rectangle">Manager B</h3>
                        <ol class="level-4-wrapper">
                            <li>
                                <h4 class="level-4 rectangle">Person A</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person B</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person C</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person D</h4>
                            </li>
                        </ol>
                    </li>
                </ol>
            </li>
            <li>
                <h2 class="level-2 rectangle">Director B</h2>
                <ol class="level-3-wrapper">
                    <li>
                        <h3 class="level-3 rectangle">Manager C</h3>
                        <ol class="level-4-wrapper">
                            <li>
                                <h4 class="level-4 rectangle">Person A</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person B</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person C</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person D</h4>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <h3 class="level-3 rectangle">Manager D</h3>
                        <ol class="level-4-wrapper">
                            <li>
                                <h4 class="level-4 rectangle">Person A</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person B</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person C</h4>
                            </li>
                            <li>
                                <h4 class="level-4 rectangle">Person D</h4>
                            </li>
                        </ol>
                    </li>
                </ol>
            </li>
        </ol>
    </div>

    <div>
    <?php
    $this->view('includes/footer');
    ?>
</div>
</body>

</html>