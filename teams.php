<?php
    include 'inc/header.php';
?>

    <div class="registerinevent">
        <div class="container">
            <div class="row">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <?php

            $sql = 'SELECT * FROM event2018';
            $result = mysqli_query($con,$sql);

            if($result){
                $have_data = mysqli_num_rows($result);
                if($have_data){
                    while($row = mysqli_fetch_assoc($result)){
                        $data[] = $row;
                    }

                    // populate dynamic data in front end
                    $i = 0;
                    foreach ($data as $single_event) {
                        $i++;
                    ?>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">

                            <div class="single-event">
                                <img src="<?php echo $single_event['promoimg']; ?>" alt="">
                                <div class="right">
                                    <h3><?php echo $single_event['events'] ?></h3>
<?php if($single_event['reg_active'] == 1){ ?>
                                    <a class="btn btn-success" href="participate.php">Register</a>
<?php } ?>                                    
                                    <a class="btn btn-success" target="_blank" href="<?php echo $single_event['pdflink']; ?>">Event Details</a>
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>" class="btn btn-success">Show Teams</a>
                                </div>
                            </div>
                        </div>
                        <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">

<!-- For Single -->

<?php

    $slug = $single_event['slug'];

    $sql = "SELECT * FROM participance2018 WHERE eventslug = '$slug' AND participationtype = 1" ;
    $result = mysqli_query($con,$sql);

    if($result){
        $have_data = mysqli_num_rows($result);
        if($have_data){
            while($row = mysqli_fetch_assoc($result)){
                $participance[] = $row;
            }
            
            ?>
            <h3>Single</h3>

                            <table class="table table-striped">
                                <tr>
                                    <td>SL</td>
                                    <td>Teame Name</td>
                                    <td>Institution Name</td>
                                    <td>Status</td>
                                    <td>Details</td>
                                </tr>           
            <?php
            $serial_no = 0;
            foreach ($participance as $single_particippance) {
                $serial_no++;
            ?>

                                    <tr>
                                        <td><?php echo $serial_no; ?></td>
                                        <td>Black Dragon</td>
                                        <td>Bangladesh army university of science and technology , Saidpur Cantonment</td>
                                        <td class="accepted text-center">
                                            <p>Accepted</p>
                                        </td>
                                        <td><a href="#" class="btn btn-success mybun">Details</a></td>
                                    </tr>


            <?php
            }

            ?>
            
                                </table>
            <?php

        } else {
            echo 'No data available to show.';
        }
    } else {
        echo 'Problem in Database';
    }

?>

<!-- For Team -->

<?php

    $slug = $single_event['slug'];

    $sql = "SELECT * FROM participance2018 WHERE eventslug = '$slug' AND participationtype = 0" ;
    $result = mysqli_query($con,$sql);

    if($result){
        $have_data = mysqli_num_rows($result);
        if($have_data){
            while($row = mysqli_fetch_assoc($result)){
                $participance[] = $row;
            }
            
            ?>
            <h3>Team</h3>

                            <table class="table table-striped">
                                <tr>
                                    <td>SL</td>
                                    <td>Teame Name</td>
                                    <td>Institution Name</td>
                                    <td>Status</td>
                                    <td>Details</td>
                                </tr>           
            <?php
            $serial_no = 0;
            foreach ($participance as $single_particippance) {
                $serial_no++;
            ?>

                                    <tr>
                                        <td><?php echo $serial_no; ?></td>
                                        <td>Black Dragon</td>
                                        <td>Bangladesh army university of science and technology , Saidpur Cantonment</td>
                                        <td class="accepted text-center">
                                            <p>Accepted</p>
                                        </td>
                                        <td><a href="#" class="btn btn-success mybun">Details</a></td>
                                    </tr>


            <?php
            }

            ?>
            
                                </table>
            <?php

        } else {
            echo 'No Team available to show.';
        }
    } else {
        echo 'Problem in Database';
    }

?>




                            </div>
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
            </div>
        </div>
    </div>



    <?php
    include 'inc/footer.php';
?>