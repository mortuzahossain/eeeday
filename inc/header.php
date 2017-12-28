<?php
    include 'inc/conn.php';
?>
<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Roboto" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/totop.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <title>EEE Day</title>
</head>

<body>

    <div id='cssmenu'>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a data-toggle="modal" data-target="#ourevents">Events</a></li>
<?php
    if ($con) {
        $sql = "SELECT content FROM contents WHERE slug ='schedule'";
        $schedule = mysqli_query($con,$sql)->fetch_assoc();
    }
?>
            <li><a target="_blank" href="<?php echo $schedule['content']; ?>">Schedule</a></li>
            <li><a href="teams.php">Teams</a></li>

<?php
    if ($con) {
        $sql = "SELECT content FROM contents WHERE slug ='results'";
        $results = mysqli_query($con,$sql)->fetch_assoc();
    }
?>

            <li><a target="_blank" href="<?php echo $results['content'] ?>">Results</a></li>
            <li><a href="sponsors.php">Sponsors</a></li>
            <li><a data-toggle="modal" data-target="#contact-us" href="#">Contact</a></li>
        </ul>
    </div>

    <div class="poster">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title-logo">
                    <img class="poster-image animated infinite pulse" src="img/eee_day.png" alt="Title Logo">
                </div>
            </div>
        </div>
    </div>
