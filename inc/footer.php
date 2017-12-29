


    <div class="social-link text-center">
        <div class="container">
            <div class="row">
                <div class="w3-xlarge w3-padding-32">
                    <a href="#" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"> &nbsp; </i></a>
                    <a href="#" target="_blank"><i class="fa fa-globe w3-hover-opacity"> &nbsp; </i></a>
                    <a href="#" target="_blank"><i class="fa fa-map-marker w3-hover-opacity"> &nbsp; </i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="developer text-center">
        <p>Developer <a href="http://www.facebook.com/mdmortuza.hossain/">Md. Mortuza Hossain</a></p>
    </div>

<?php
    // For show the previous data
    if ($con) {
        $sql = "SELECT content FROM contents WHERE slug ='copyright_text'";
        $result = mysqli_query($con,$sql)->fetch_assoc();
        //var_dump($result);
    }

?>

    <div class="copyright text-center">
        <p><?php if (!empty($result['content'])) {
            echo $result['content'];
        } ?></p>
    </div>


<!-- Model Data For Events -->


<div class="modal fade" tabindex="-1" role="dialog" id="ourevents">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Our Events</h4>
      </div>
      <div class="modal-body">

        <?php

            $sql = 'SELECT * FROM event2018';
            $result = mysqli_query($con,$sql);

            if($result){
                $have_data = mysqli_num_rows($result);
                if($have_data){
                    while($row = mysqli_fetch_assoc($result)){
                        $alldata[] = $row;
                    }

                    // populate dynamic data in front end

                    foreach ($alldata as $single_model) {
                    ?>

                    <div class="single-event">
                        <img src="admin/img/events/<?php echo $single_model['promoimg']; ?>" alt="<?php echo $single_model['events']; ?>">
                        <div class="right">
                            <h3 class="model-header"><?php echo $single_model['events']; ?></h3>
                            <?php if ($single_model['reg_active'] == 1) { ?>
                            <a class="btn btn-success" href="participate.php">Register</a>
                            <?php } ?>
                            <a class="btn btn-success" target="_blank" href="<?php echo $single_model['pdflink'] ?>">Event Details</a>
                        </div>
                    </div>

                    <?php
                    }

                } else {
                    echo 'No data available to show.';
                }
            } else {
                echo 'Problem in Database';
            }



        ?>


     </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>




<div class="modal fade" tabindex="-1" role="dialog" id="contact-us">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contact With Us</h4>
      </div>
      <div class="modal-body">
    <p><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">Need to change your team info then <a href="#">mail me</a>.</marquee></p>

    <?php

    $sql_contact = 'SELECT * FROM contact2018';
    $contact_result = mysqli_query($con,$sql_contact);

    if($contact_result){
        $have_data = mysqli_num_rows($contact_result);
        if($have_data){
            while($row = mysqli_fetch_assoc($contact_result)){
                $contacts[] = $row;
            }

            // populate dynamic data in front end

            foreach ($contacts as $single_contact) {
            ?>

            <div class="single-contact text-center">
                <img src="<?php echo $single_contact['image']; ?>" alt="<?php echo $single_contact['name']; ?>">
                <div class="contact-detail">
                    <h3><?php echo $single_contact['name']; ?></h3>
                    <p><?php echo $single_contact['designation']; ?></p>
                    <p><?php echo $single_contact['phone']; ?></p>
                    <p><?php echo $single_contact['email']; ?></p>
                </div>
            </div>

            <?php
                    }

                } else {
                    echo 'No data available to show.';
                }
            } else {
                echo 'Problem in Database';
            }
        ?>

     </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


    <a href="#0" class="cd-top animated infinite pulse">Top</a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/backtotop.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){


        $("#counter").countdown({
        until: new Date(2018, 1 - 1, 23),
        format: 'dHMS'
        });

        $("#counter_wrapper").fitText(1.4, {
        minFontSize: '20px',
        maxFontSize: '50px'
        });

      });
    </script>


</body>
<html>
