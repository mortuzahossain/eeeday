<?php
    include 'inc/header.php';
    include 'inc/dbconfig.php';
    $db = new Database();
?>
    
    <div class="registerinevent">
        <div class="container">
            <div class="row">
                
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      
                          <div class="single-event">
                            <img src="img/event/Techhunt2017_Gaming_Contest_COD4 cover.png" alt="">
                            <div class="right">
                                <h3>Programming Contest</h3>
                                <a class="btn btn-success" href="participate.php">Register</a>
                                <a class="btn btn-success" target="_blank" href="file/event/techhunt_programming_2017_v5.pdf">Event Details</a>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="btn btn-success">Show Teams</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                                               
                        <table class="table table-striped">
                            <tr>
                                <td>SL</td>
                                <td>Teame Name</td>
                                <td>Institution Name</td>
                                <td>Status</td>
                                <td>Details</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Black Dragon</td>
                                <td>Bangladesh army university of science and technology , Saidpur Cantonment</td>
                                <td class="accepted text-center"><p>Accepted</p></td>
                                <td><a href="#" class="btn btn-success mybun">Details</a></td>
                            </tr>
                        </table>


                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <div class="single-event">
                            <img src="img/event/Techhunt2017_Gaming_Contest_COD4 cover.png" alt="">
                            <div class="right">
                                <h3>Programming Contest</h3>
                                <a class="btn btn-success" href="participate.php">Register</a>
                                <a class="btn btn-success" target="_blank" href="file/event/techhunt_programming_2017_v5.pdf">Event Details</a>
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" class="btn btn-success">Show Teams</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">

                        <table class="table table-striped">
                            <tr>
                                <td>SL</td>
                                <td>Teame Name</td>
                                <td>Institution Name</td>
                                <td class="text-center">Status</td>
                                <td>Details</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Black Dragon</td>
                                <td>Bangladesh army university of science and technology , Saidpur Cantonment</td>
                                <td class="accepted text-center"><p>Rejecte</p></td>
                                <td><a href="#" class="btn btn-success mybun">Details</a></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Black Dragon</td>
                                <td>Bangladesh army university of science and technology , Saidpur Cantonment</td>
                                <td class="rejected text-center"><p>Rejected</p></td>
                                <td><a href="#" class="btn btn-success mybun">Details</a></td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Black Dragon</td>
                                <td>Bangladesh army university of science and technology , Saidpur Cantonment</td>
                                <td class="pending text-center"><p>Pending</p></td>
                                <td><a href="#" class="btn btn-success mybun">Details</a></td>
                            </tr>
                        </table>

                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>



<?php
    include 'inc/footer.php';
?>