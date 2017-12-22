<?php
    include 'inc/header.php';
?>

    <div class="registerinevent">

        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h2 class="text-center heading">
                        Register
                    </h2>

                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Event Name</label>
                            <select class="form-control" required="1" name="event-name" onchange="eventType()">
                            <option value="matlab">Matlab Contest</option>
                            <option value="fifa">FIFA</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Participation Type</label>
                            <select class="form-control" required="1" name="event-name" onchange="setUserInputType()" id="ptype">
                                <option value="1">Single</option>
                                <option value="2">Team</option>
                            </select>
                        </div>

                        <div id="output"></div>


                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Your Name" name="participance_name">
                        </div>
                        
                        <div class="form-group">
                            <label>Roll</label>
                            <input type="text" class="form-control" placeholder="Roll No" name="participance_roll">
                        </div>
                        
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" placeholder="Depertment" name="participance_dept">
                        </div>


                        <!-- Address Part -->

                        <h3 class="text-center">Address Info</h3>

                        <div class="form-group">
                            <label>Institute Name</label>
                            <input type="text" class="form-control" placeholder="Instutute Name" name="instutute-name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="demo@gmail.com" name="email">
                        </div>

                        <div class="form-group">
                            <label>Alternative Email Address</label>
                            <input type="email" class="form-control" placeholder="demo1@gmail.com" name="altemail">
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="phone" class="form-control" placeholder="01000000000" name="phone">
                        </div>
                        

                        <div class="form-group">
                            <label>Alternative Phone</label>
                            <input type="phone" class="form-control" placeholder="01000000000" name="altphone">
                        </div>

                        <!-- Payment Information -->
                        
                        <h3 class="text-center">Payment Info</h3>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Transaction Type</label>
                            <select class="form-control" required="1" name="event-name" onchange="changeTransaction()" id="ttypr">
                                <option value="1">Bkash</option>
                                <option value="2">Bank Draft</option>
                            </select>
                        </div>

                        <div id="transactionopt"></div>

                        <button type="submit" class="btn btn-success" style="float: right;" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
        /*function selInput() {

            var e = document.getElementById("ptype");
            var type = e.options[e.selectedIndex].value;
            console.log(type);

            var opt = document.getElementById("output");

            var single = '';

            var team = '';

            if (type == 1) {
                opt.innerHTML = single;
            }

            if (type == 2) {
                opt.innerHTML = team;
            }

        }
        selInput();*/

        // For Event Type Selection

        function eventType() {

        }

        eventType();

        // For User Type Selection

        function setUserInputType() {
            
            // Selector Input Part

            // For Team Input

            // Generate maximum member input

            // Show in front end


        }

        setUserInputType();


        // Transaction Type Selection

        function changeTransaction() {
            // Input part

            var ttype = document.getElementById("ttypr");
            var selectedttype = ttype.options[ttype.selectedIndex].value;
            console.log(selectedttype);
            
            // Output Part

            var transactionopt = document.getElementById("transactionopt");

            // If Selected value is 1 then show the bkash Transaction Type
            var number_type = '<div class="form-group"><label>Transaction ID</label><input type="text" class="form-control" placeholder="Transaction ID No" name="transactionid"></div>';
            if (selectedttype == 1) {
                transactionopt.innerHTML = number_type;
            }
            // If Value is 2 Then let them upload file
            var image_type = '<div class="form-group"><label>Bank Draft Image</label><input type="file" class="form-control" placeholder="Provide Your Bank Draft Image" name="altphone"></div>';
            if (selectedttype == 2) {
                transactionopt.innerHTML = image_type;
            }

        }
        changeTransaction();

    </script>


<?php
    include 'inc/footer.php';
?>