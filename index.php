<?php
    include 'inc/header.php';
?>

<?php

if ($con) {
    $sql = "SELECT content FROM contents WHERE slug ='countdown'";
    if(mysqli_query($con,$sql)){
        $countdownonoff = mysqli_query($con,$sql)->fetch_assoc();
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


<?php } } } ?>

<?php
  if(mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_heading'")){
    $abouteeeday_heading = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_heading'")->fetch_assoc();
    $abouteeeday_content = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_content'")->fetch_assoc();
    $abouteeeday_video = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeeday_video'")->fetch_assoc();
  }
?>


    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><?php if(!empty($abouteeeday_heading['content'])) {echo $abouteeeday_heading['content'];}else { echo "About EEE Day" ;} ?></h1>
                    <p><?php if(!empty($abouteeeday_content['content'])) {echo $abouteeeday_content['content'];}else { echo "Department of Electrical and Electronic Engineering is going to celebrate “EEE Day 2017” with great zeal and festivities at Bangladesh Army University of Science and Technology (BAUST, Saidpur Cantonment on 23-25 January, 2018. The whole program consists of National Idea Contest, RoboRun, Project Show, Tech Quiz, Motivational speech, Workshops and Grand Concert. Students from different reputed universities from all over Bangladesh along with students from all departments of Bangladesh Army University of Science and Technology (BAUST) will attend the program. Famous personalities of Bangladesh will attend the program as honored guests and judges." ;} ?></p>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php if(!empty($abouteeeday_video['content'])) {echo $abouteeeday_video['content'];}else { echo "Vg2T81HbxXk" ;} ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- For EEE SOCIETY -->

<?php
if(mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeesociety_heading'")){
  $abouteeesociety_heading = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeesociety_heading'")->fetch_assoc();
  $abouteeesociety_content = mysqli_query($con,"SELECT content FROM contents WHERE slug = 'abouteeesociety_content'")->fetch_assoc();
}
?>

    <div class="block block-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/association.png" class="w3-round w3-padding w3-hover-shadow w3-margin" alt="TechHunt Logo">
                </div>
                <div class="col-md-8">
                  <h1><?php if(!empty($abouteeesociety_heading['content'])) {echo $abouteeesociety_heading['content'];}else { echo "About EEE Day" ;} ?></h1>
                  <p><?php if(!empty($abouteeesociety_content['content'])) {echo $abouteeesociety_content['content'];}else { echo "Department of Electrical and Electronic Engineering is going to celebrate “EEE Day 2017” with great zeal and festivities at Bangladesh Army University of Science and Technology (BAUST, Saidpur Cantonment on 23-25 January, 2018. The whole program consists of National Idea Contest, RoboRun, Project Show, Tech Quiz, Motivational speech, Workshops and Grand Concert. Students from different reputed universities from all over Bangladesh along with students from all departments of Bangladesh Army University of Science and Technology (BAUST) will attend the program. Famous personalities of Bangladesh will attend the program as honored guests and judges." ;} ?></p>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'inc/footer.php';
?>
