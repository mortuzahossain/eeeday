<?php
    include 'inc/header.php';
?>
<script type="text/javascript">
    var maxteammember = 0;
</script>
    <div class="registerinevent">

        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h2 class="text-center heading">
                        Register
                    </h2>


            <?php
                if (isset($_POST['submit'])) {
                    
                    $event_name = $_POST['event_name'];
                    // Address Part
                    $instutute_name         = validate($_POST['instutute_name']);
                    $email                  = validate($_POST['email']);
                    $altemail               = validate($_POST['altemail']);
                    $phone                  = validate($_POST['phone']);
                    $altphone               = validate($_POST['altphone']);
                    // Payment Part
                    # if BKSAH then take text type input field
                    $transection_type = validate($_POST['transection_type']);
                    if ($transection_type == 1) {
                        $transactionid = validate($_POST['transactionid']);
                    }
                    # If BANK then take the image
                    if ($transection_type == 2) {
                        $file = $_FILES['file'];
                        print_r($file);
                    }


                    $sql = "SELECT teamon FROM event2018 WHERE slug = '".$event_name."'";
                    $result = mysqli_query($con,$sql)->fetch_assoc();
                    // If it is for only single member

                    if ($result['teamon'] == '0') {
                        include 'inc/single.php';
                    }

                    if ($result['teamon'] == '1') {

                        # Type Single 
                        $participation_type = $_POST['participation_type'];
                        $maxteammember = $_POST['maxteammember'];
                        if ($participation_type == 1) {
                            include 'inc/single.php';
                        }

                        else {
                            // For Team Info
                            $team_name = $_POST['team_name'];
                            // Team Leader
                            $team_leader_name = $_POST['team_leader_name'];
                            $team_leader_roll = $_POST['team_leader_roll'];
                            $team_leader_dept = $_POST['team_leader_dept'];

                            
                            // Name Generation

                            for ($k=1; $k <= $maxteammember ; $k++) { 
                                $member_name[] =  'member'.$k.'_name';
                                $member_name_db[] =  'member'.$k.'name';
                                $member_roll[] =  'member'.$k.'_roll';
                                $member_roll_db[] =  'member'.$k.'roll';
                                $member_dept[] =  'member'.$k.'_dept';
                                $member_dept_db[] =  'member'.$k.'dept';
                            }

                            // Value Corrospondent to the name in array

                            for ($i=0; $i < $maxteammember ; $i++) { 
                                $member_name_value[] = $_POST[$member_name[$i]];
                                $member_roll_value[] = $_POST[$member_roll[$i]];
                                $member_dept_value[] = $_POST[$member_dept[$i]];
                            }

                            // print_r($member_name_value);
                            // print_r($member_dept);
                            // print_r($member_roll);

                            // Save Value in Database

                            if ($transection_type == 1) {
                                $sql = "SELECT id FROM participance2018 WHERE transectionid = '".$transactionid."'";
                                $check = mysqli_query($con,$sql);
                                $check = mysqli_num_rows($check);
                                if ($check) {
                                    // Show Worning
                                    echo "Duplicate Transaction ID Please Provide Right One . Or Check Charefully.";
                                } else {
                                    $sql = "INSERT INTO participance2018
                                     (eventslug,participationtype,teamname,
                                     teamleadername,teamleaderroll,teamleaderdept,
                                     ";
                                    for ($i=0; $i < $maxteammember; $i++) { 
                                        $sql .= $member_name_db[$i].', ';
                                        $sql .= $member_roll_db[$i].', ';
                                        $sql .= $member_dept_db[$i].', ';
                                    }
                                     $sql .= "
                                      institute,phone,alternativephone,email,alternativeemail,
                                     transectionid) 
                                     VALUES 
                                     ('$event_name','1','$team_name',
                                     '$team_leader_name','$team_leader_roll','$team_leader_dept',";
                                    
                                    for ($i=0; $i < $maxteammember; $i++) { 
                                        $sql .= "'".$member_name_value[$i]."', ";
                                        $sql .= "'".$member_roll_value[$i]."', ";
                                        $sql .= "'".$member_dept_value[$i]."', ";
                                    }

                                    $sql .="
                                     '$instutute_name','$phone','$altphone','$email','$altemail',
                                     '$transactionid') ";

                                    //echo $sql;
                                    if (mysqli_query($con,$sql)) {
                                        echo "Your Request have been submit Please wait for approve";
                                    } else {
                                        echo "Sorry Something Wrong in Database Please try Again";
                                    }
                                }
                            }

                            if ($transection_type == 2) {
                                
                                $file_name = $file['name'];
                                $file_tmp = $file['tmp_name'];
                                $file_size = $file['size'];
                                $file_error = $file['error'];

                                // File Extention
                                $file_extention = explode('.', $file_name);
                                $file_extention = strtolower(end($file_extention));

                                // Allowed File Type
                                $allowed = array('gif','jpg','png');
                                define('ROOTPATH', __DIR__);

                                if (in_array($file_extention,$allowed)) {
                                    if ($file_error === 0) {
                                        if ($file_size <= 100000000) {
                                            $file_name_new = uniqid('',true). '.' .$file_extention;
                                            // In Server Where Want to save the file
                                            $file_destinition = ROOTPATH.'/img/bankrecept/'.$file_name_new;
                                            //echo $file_destinition;
                                            //echo $file_destinition;
                                            if (move_uploaded_file($file_tmp, $file_destinition)) {
                                                # Save Data In Database
                                                #echo $file_destinition;

                                                $sql = "INSERT INTO participance2018
                                                 (eventslug,participationtype,teamname,
                                                 teamleadername,teamleaderroll,teamleaderdept,
                                                 ";
                                                for ($i=0; $i < $maxteammember; $i++) { 
                                                    $sql .= $member_name_db[$i].', ';
                                                    $sql .= $member_roll_db[$i].', ';
                                                    $sql .= $member_dept_db[$i].', ';
                                                }
                                                 $sql .= "
                                                  institute,phone,alternativephone,email,alternativeemail,
                                                 transectionimg) 
                                                 VALUES 
                                                 ('$event_name','1','$team_name',
                                                 '$team_leader_name','$team_leader_roll','$team_leader_dept',";
                                                
                                                for ($i=0; $i < $maxteammember; $i++) { 
                                                    $sql .= "'".$member_name_value[$i]."', ";
                                                    $sql .= "'".$member_roll_value[$i]."', ";
                                                    $sql .= "'".$member_dept_value[$i]."', ";
                                                }

                                                $sql .="
                                                 '$instutute_name','$phone','$altphone','$email','$altemail',
                                                 '$file_name_new') ";

                                                //echo $sql;
                                                if (mysqli_query($con,$sql)) {
                                                    echo "Your Request have been submit Please wait for approve";
                                                } else {
                                                    echo "Sorry Something Wrong in Database Please try Again";
                                                }


                                            } else {
                                                echo "Error in File Uploading";
                                            }
                                        } else{
                                            echo "File Size is too Big";
                                        }
                                    }
                                }
                            }


                        }



                    }


                }


            ?>



                    <form action="" method="post" enctype="multipart/form-data">
                    
                    <?php 
                        $sql = 'SELECT events , slug ,teamon  FROM event2018 WHERE reg_active = 1';
                        $result = mysqli_query($con,$sql);

                        if($result){
                            $have_data = mysqli_num_rows($result);
                            if($have_data){
                                while($row = mysqli_fetch_assoc($result)){
                                    $allslug[] = $row;
                                }                        

                    ?>
                        
                        <div class="form-group">
                            <label>Event Name</label>
                            <select class="form-control" required="1" name="event_name" onchange="getEvents(this.value);">
                                <option value="0">Select Event Type</option>
                            <?php foreach ($allslug as $slug) { ?>
                                 <option value="<?php echo $slug['slug'] ; ?>"><?php echo $slug['events'] ; ?></option>
                            <?php } ?>
                            </select>
                        </div>

                        <div id="show"></div>

                        <div id="output"></div>

                        <!-- Address Part -->

                        <h3 class="text-center">Address Info</h3>

                        <div class="form-group">
                            <label>Institute Name</label>
                            <input type="text" class="form-control" placeholder="Instutute Name" name="instutute_name" required="1">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="demo@gmail.com" name="email" required="1">
                        </div>

                        <div class="form-group">
                            <label>Alternative Email Address</label>
                            <input type="email" class="form-control" placeholder="demo1@gmail.com" name="altemail" required="1">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="phone" class="form-control" placeholder="01000000000" name="phone" required="1">
                        </div>
                        

                        <div class="form-group">
                            <label>Alternative Phone</label>
                            <input type="phone" class="form-control" placeholder="01000000000" name="altphone" required="1">
                        </div>

                        <!-- Payment Information -->
                        
                        <h3 class="text-center">Payment Info</h3>
                        
                        <div class="form-group">
                            <label>Transaction Type</label>
                            <select class="form-control" required="1" name="transection_type" onchange="changeTransaction()" id="ttypr">
                                <option value="1">Bkash</option>
                                <option value="2">Bank Draft</option>
                            </select>
                        </div>

                        <div id="transactionopt"></div>

                        <button type="submit" class="btn btn-success" style="float: right;" name="submit" id="submitbtn">Submit</button>

            <?php 
                } else {
                        echo 'No data available to show.';
                    }
                    
                } else {
                    echo 'Problem in Database';
                }

            ?>


                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        
        document.getElementById("submitbtn").disabled = true;

        function getEvents(val) {
            //alert(val);
            if (val == 0) {
                var emptyevent = '';
                var show = document.getElementById("show");
                show.innerHTML = emptyevent;

                // Disable the submit button
                document.getElementById("submitbtn").disabled = true;

            } else {
                $.ajax({
                    type: "POST",
                    url: "getparticipance.php",
                    data:'data='+val,
                    success: function(data){
                        $("#show").html(data);
                    }
                });
            }
        }


        // For User Type Selection

        function setUserInputType() {
            
            // Selector Input Part
            // For Team Input

            var ptype = document.getElementById("ptype");
            if (ptype) {
                var ptypeValue = ptype.options[ptype.selectedIndex].value;
                //console.log(ptypeValue);
            }
            
            // Generate maximum member input


            // Show in front end
            var optinDiv = document.getElementById("output");
            
            var optTeam     = '<div class="form-group"><label>Team Name</label><input type="text" class="form-control" placeholder="Team Name" name="team_name"></div><h4 class="text-center">Team Leader Info</h4><div class="form-group"><label>Name</label><input type="text" class="form-control" placeholder="Name" name="team_leader_name"></div><div class="form-group"><label>Roll</label><input type="text" class="form-control" placeholder="Roll No" name="team_leader_roll"></div><div class="form-group"><label>Department</label><input type="text" class="form-control" placeholder="Depertment" name="team_leader_dept"></div>';

            for (var i = 1; i <= maxteammember; i++) {
                optTeam += '<h4 class="text-center">Member '+i+ ' Info <span>( Optional )</span></h4> ';
                optTeam += '<div class="form-group"><label>Name</label><input type="text" class="form-control" placeholder="Name" name="member'+i+'_name"></div>';
                optTeam += '<div class="form-group"><label>Roll</label><input type="text" class="form-control" placeholder="Roll No" name="member'+i+'_roll"></div><div class="form-group"><label>Department</label><input type="text" class="form-control" placeholder="Depertment" name="member'+i+'_dept"></div>';
            }


            var optSingle   = '<div class="form-group"><label>Name</label><input type="text" class="form-control" placeholder="Your Name" name="participance_name"></div><div class="form-group"><label>Roll</label><input type="text" class="form-control" placeholder="Roll No" name="participance_roll"></div><div class="form-group"><label>Department</label><input type="text" class="form-control" placeholder="Depertment" name="participance_dept"></div>';

            document.getElementById("submitbtn").disabled = true;

            if (ptype && ptypeValue == 0) {
                optinDiv.innerHTML = '';
                document.getElementById("submitbtn").disabled = true;
            } else if (ptype && ptypeValue == 1) {
                // For single
                optinDiv.innerHTML = optSingle;
                document.getElementById("submitbtn").disabled = false;
            } else if (ptype && ptypeValue == 2){
                // For Team
                optinDiv.innerHTML = optTeam;
                document.getElementById("submitbtn").disabled = false;
            }


        }

        setUserInputType();


        // Transaction Type Selection

        function changeTransaction() {
            // Input part

            var ttype = document.getElementById("ttypr");
            var selectedttype = ttype.options[ttype.selectedIndex].value;
            //console.log(selectedttype);
            
            // Output Part

            var transactionopt = document.getElementById("transactionopt");

            // If Selected value is 1 then show the bkash Transaction Type
            var number_type = '<div class="form-group"><label>Transaction ID</label><input type="text" class="form-control" placeholder="Transaction ID No" name="transactionid" required></div>';
            if (selectedttype == 1) {
                transactionopt.innerHTML = number_type;
            }
            // If Value is 2 Then let them upload file
            var image_type = '<div class="form-group"><label>Bank Draft Image</label><input type="file" class="form-control" placeholder="Provide Your Bank Draft Image" name="file" required></div>';
            if (selectedttype == 2) {
                transactionopt.innerHTML = image_type;
            }

        }
        changeTransaction();

    </script>


<?php
    include 'inc/footer.php';
?>