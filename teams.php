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

    $sql = "SELECT * FROM participance2018 WHERE eventslug = '$slug' AND participationtype = 0 ORDER BY id DESC" ;
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
                                    <td width="5%">SL</td>
                                    <td width="35%%">Name</td>
                                    <td width="40%">Institution Name</td>
                                    <td width="10%">Status</td>
                                    <td width="10%">Details</td>
                                </tr>           
            <?php
            $serial_no = 0;
            foreach ($participance as $single_particippance) {
                $serial_no++;
            ?>

                                    <tr>
                                        <td width="5%"><?php echo $serial_no; ?></td>
                                        <td width="35%"><?php echo $single_particippance['name']; ?></td>
                                        <td width="40%"><?php echo $single_particippance['institute']; ?></td>
                                        <?php if($single_particippance['status'] == '0'){ ?>
                                        <td width="10%" class="pending text-center">
                                            <p>Pending</p>
                                        </td>
                                        <?php } elseif ($single_particippance['status'] == '1') { ?>
                                        <td width="10%" class="accepted text-center">
                                            <p>Accepted</p>
                                        </td>
                                        <?php } else { ?>
                                        <td width="10%" class="rejected text-center">
                                            <p>Rejected</p>
                                        </td>
                                        <?php } ?>
                                        <td width="10%"><a href="details.php?id=<?php echo $single_particippance['id']; ?>&participationtype=0;" target="_blank" class="btn btn-success mybun">Details</a></td>
                                    </tr>


            <?php
            }
            $participance = [];

            ?>
            
                                </table>
            <?php

        } else {
            echo '<p>No Single Participance available to show.</p>';
        }
    } else {
        echo '<p>Problem in Database</p>';
    }

?>



<!-- For Team -->

<?php

    $slug = $single_event['slug'];

    $sql = "SELECT * FROM participance2018 WHERE eventslug = '$slug' AND participationtype = 1 ORDER BY id DESC" ;
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
                                    <td width="5%">SL</td>
                                    <td width="35%%">Name</td>
                                    <td width="40%">Institution Name</td>
                                    <td width="10%">Status</td>
                                    <td width="10%">Details</td>
                                </tr>           
            <?php
            $serial_no = 0;
            foreach ($participance as $single_particippance) {
                $serial_no++;
            ?>

                                    <tr>
                                        <td width="5%"><?php echo $serial_no; ?></td>
                                        <td width="35%"><?php echo $single_particippance['teamname']; ?></td>
                                        <td width="40%"><?php echo $single_particippance['institute']; ?></td>
                                        <?php if($single_particippance['status'] == '0'){ ?>
                                        <td width="10%" class="pending text-center">
                                            <p>Pending</p>
                                        </td>
                                        <?php } elseif ($single_particippance['status'] == '1') { ?>
                                        <td width="10%" class="accepted text-center">
                                            <p>Accepted</p>
                                        </td>
                                        <?php } else { ?>
                                        <td width="10%" class="rejected text-center">
                                            <p>Rejected</p>
                                        </td>
                                        <?php } ?>
                                        <td width="10%"><a href="details.php?id=<?php echo $single_particippance['id']; ?>&participationtype=1;" target="_blank" class="btn btn-success mybun">Details</a></td>
                                    </tr>


            <?php
            }
            $participance = [];

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