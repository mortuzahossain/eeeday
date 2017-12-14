<?php include 'inc/header.php'; ?>
    
    <div class="registerinevent">

        <div class="container ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h2 class="text-center heading">
                        Register
                    </h2>  

                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <select class="form-control" required="1" name="event-name">
                            <option value="matlab">Matlab Contest</option>
                            <option value="fifa">FIFA</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Team Name</label>
                        <input type="text" class="form-control" placeholder="Team Name" name="team-name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Instutute Name</label>
                        <input type="text" class="form-control" placeholder="Instutute Name" name="instutute-name">
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
                      <button type="submit" class="btn btn-success" style="float: right;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'inc/footer.php';
?>