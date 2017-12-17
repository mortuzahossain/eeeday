<?php include 'inc/header.php'; ?>
    
    <div class="registerinevent">

        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h2 class="text-center heading">
                        Register
                    </h2>  

                    <form action="" method="post">
                      <div class="form-group">
                        <label>Event Name</label>
                        <select class="form-control" required="1" name="event-name">
                            <option value="matlab">Matlab Contest</option>
                            <option value="fifa">FIFA</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Participation Type</label>
                        <select class="form-control" required="1" name="event-name" onchange="selInput()" id="ptype">
                            <option value="1">Single</option>
                            <option value="2">Team</option>
                        </select>
                      </div>

                      <div id="output"></div>
                    
                    <div class="form-group">
                        <label>Participance Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" name="participance_name">
                    </div>

                                        
                    <div class="form-group">
                        <label>Participance Roll</label>
                        <input type="text" class="form-control" placeholder="Roll No" name="participance_roll">
                    </div>    

                    <div class="form-group">
                        <label>Participance Depertment</label>
                        <input type="text" class="form-control" placeholder="Depertment" name="participance_dept">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Instutute Name</label>
                        <input type="text" class="form-control" placeholder="Instutute Name" name="instutute-name">
                    </div>


                    <div class="form-group">
                        <label>Participance Email</label>
                        <input type="email" class="form-control" placeholder="Your Name" name="participance_email">
                    </div>


                      

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alternative Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="altemail">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" class="form-control" placeholder="Phone" name="phone">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Team Leader</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="leadername">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Member 1 </label><span>(optional)</span> 
                        <input type="text" class="form-control" placeholder="Enter Name" name="member1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Member 2 </label><span>(optional)</span> 
                        <input type="text" class="form-control" placeholder="Enter Name" name="member2">
                      </div>
                      <button type="submit" class="btn btn-success" style="float: right;" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    
    if(isset($_POST['submit'])){
        if (isset($_POST['team-name'])) {
            $team_name = $_POST['team-name'];
            echo $team_name;   
        }
    }

?>


<script type="text/javascript">
    function selInput() {

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
    selInput();
</script>


<?php
    include 'inc/footer.php';
?>