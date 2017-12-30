<?php
    include 'inc/header.php';
?>

<?php

if ($con) {
    $sql = "SELECT content FROM contents WHERE slug ='countdown'";
    $countdownonoff = mysqli_query($con,$sql)->fetch_assoc();
    //var_dump($countdownonoff);
}

if ($countdownonoff['content'] == '1') {

?>


    <div class="event-counter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="counter_wrapper">
                <h1 class="text-center">Starting At</h1>
                <div class="text-center" id="counter"></div>
              </div>
            </div>
          </div>
        </div>
    </div>


<?php } ?>

    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>About EEE Day</h1>
                    <p>Department of Electrical and Electronic Engineering is going to celebrate “EEE Day 2017” with great zeal and festivities at Bangladesh Army University of Science and Technology (BAUST, Saidpur Cantonment on 23-25 January, 2018. The whole program consists of National Idea Contest, RoboRun, Project Show, Tech Quiz, Motivational speech, Workshops and Grand Concert. Students from different reputed universities from all over Bangladesh along with students from all departments of Bangladesh Army University of Science and Technology (BAUST) will attend the program. Famous personalities of Bangladesh will attend the program as honored guests and judges.</p>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wxVweqiz5qs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/association.png" class="w3-round w3-padding w3-hover-shadow w3-margin" alt="TechHunt Logo">
                </div>
                <div class="col-md-8">
                    <h1>About EEE Society</h1>
                    <p>Department of Electrical and Electronic Engineering is going to celebrate “EEE Day 2017” with great zeal and festivities at Bangladesh Army University of Science and Technology (BAUST, Saidpur Cantonment on 23-25 January, 2018. The whole program consists of National Idea Contest, RoboRun, Project Show, Tech Quiz, Motivational speech, Workshops and Grand Concert. Students from different reputed universities from all over Bangladesh along with students from all departments of Bangladesh Army University of Science and Technology (BAUST) will attend the program. Famous personalities of Bangladesh will attend the program as honored guests and judges.</p>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'inc/footer.php';
?>
