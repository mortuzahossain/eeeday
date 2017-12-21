<?php
    include 'inc/header.php';
?>


    <div class="registerinevent">
        <div class="container">
            <h1 class="text-center header1">Our Trusted Sponsors</h1>
            <div class="row">

    <?php

        $sql = 'SELECT * FROM sponsors2018';
        $sponsors_result = mysqli_query($con,$sql);

        if($sponsors_result){
            $have_data = mysqli_num_rows($sponsors_result);
            if($have_data){
                while($row = mysqli_fetch_assoc($sponsors_result)){
                    $sponsors[] = $row;
                }

                // populate dynamic data in front end

                foreach ($sponsors as $sponsor) {
                ?>

            
                <div class="col-md-4 col-sm-8 text-center">
                    <a href="<?php echo $sponsor['website']; ?>" target="_blank"><img class="sponsor-img" src="<?php echo $sponsor['image']; ?>" alt="<?php echo $sponsor['name']; ?>"></a>
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



    <?php
    include 'inc/footer.php';
?>