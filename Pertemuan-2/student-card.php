<?php
$profile_img = "apinn.jpg";
$profile_name = "Muhammad Muqtafin Nuha";
$profile_id = 210411100218;
$profile_desc = "Informatics student at Trunojoyo University, Madura";
$profile_message = "https://wa.me/6281334631320";
$profile_status = true;
$profile_lastseen = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Card</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #28223F;
            font-family: Montserrat, sans-serif;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

            min-height: 100vh;
            margin: 0;
        }

        h3 {
            margin: 10px 0;
        }

        h6 {
            margin: 5px 0;
            text-transform: uppercase;
        }

        p {
            font-size: 14px;
            line-height: 21px;
        }

        .card-container {
            background-color: #231E39;
            border-radius: 5px;
            box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.75);
            color: #B3B8CD;
            padding-top: 30px;
            position: relative;
            width: 350px;
            max-width: 100%;
            text-align: center;
        }

        .card-container .lastseen {
            color: #231E39;
            border-radius: 3px;
            font-size: 14px;
            font-weight: bold;
            padding: 3px 7px;
            position: absolute;
            top: 30px;
            left: 30px;
        }

        .card-container .round {
            border: 1px solid #03BFCB;
            border-radius: 50%;
            padding: 7px;
            width: 128px;
            height: 127px;
        }

        .buttons {
            margin-bottom: 30px;
        }

        a.primary {
            background-color: #03BFCB;
            border: 1px solid #03BFCB;
            border-radius: 3px;
            color: #231E39;
            font-family: Montserrat, sans-serif;
            font-weight: 500;
            padding: 7px 22px;
            margin: 0 2px 0 2px;
            text-decoration: none;
        }

        a.primary.ghost {
            background-color: transparent;
            color: #02899C;
        }

        .skills {
            background-color: #1F1A36;
            text-align: left;
            padding: 15px;
            margin-top: 30px;
        }

        .skills ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .skills ul li {
            border: 1px solid #2D2747;
            border-radius: 2px;
            display: inline-block;
            font-size: 12px;
            margin: 0 7px 7px 0;
            padding: 7px;
        }
    </style>
</head>

<body>
    <div class="card-container">
        <?php
        if ($profile_lastseen == true) {
        ?>
            <span class="lastseen" style="background-color: #198754;"><?= ($profile_lastseen == True ? "Active" : "Offline"); ?></span>
        <?php } else {
        ?>
            <span class="lastseen" style="background-color: #dc3545;"><?= ($profile_lastseen == True ? "Active" : "Offline"); ?></span>
        <?php
        }
        ?>
        <span class="lastseen"><?= ($profile_lastseen == True ? "Active" : "Offline"); ?></span>
        <img class="round" src="<?= $profile_img; ?>" alt="user" />
        <h3><?= $profile_name; ?></h3>
        <h6><?= $profile_id; ?></h6>
        <p><?= $profile_desc; ?></p>
        <div class="buttons">
            <a class="primary" href="<?= $profile_message; ?>" target="_blank">
                Message
            </a>
            <a class="primary ghost">
                <?= ($profile_status == True ? "Following" : "Follow"); ?>
            </a>
        </div>
    </div>
</body>

</html>