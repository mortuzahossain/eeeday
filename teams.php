<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Avion - Simple Landing Page</title>

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/custom.css" rel="stylesheet"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a data-toggle="modal" data-target="#ourevents">Events</a></li>
                    <li><a href="#">Schedule</a></li>
                    <li><a href="#">Teams</a></li>
                    <li><a href="#">Results</a></li>
                    <li><a href="#">Sponsors</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>        
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <div class="poster">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title-logo">
                    <img class="poster-image" src="img/eee_day.png" alt="Title Logo">
                </div>
            </div>
        </div>
    </div>

    <div class="event-counter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="counter_wrapper">
                <h1 class="text-center">Event Counter</h1>
                <div class="text-center" id="counter"></div>
              </div>
            </div>
          </div>
        </div>
   </div>


    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>About EEE Day</h1>
                    <p>Department of Electrical and Electronic Engineering is going to celebrate “EEE Day 2017” with great zeal and festivities at Bangladesh Army University of Science and Technology (BAUST, Saidpur Cantonment on 23-25 January, 2018. The whole program consists of National Idea Contest, RoboRun, Project Show, Tech Quiz, Motivational speech, Workshops and Grand Concert. Students from different reputed universities from all over Bangladesh along with students from all departments of Bangladesh Army University of Science and Technology (BAUST) will attend the program. Famous personalities of Bangladesh will attend the program as honored guests and judges.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/techhunt_logo.png" class="w3-round w3-padding w3-hover-shadow w3-margin" alt="TechHunt Logo">
                </div>
            </div>
        </div>
    </div>

    <div class="block block-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/techhunt_logo.png" class="w3-round w3-padding w3-hover-shadow w3-margin" alt="TechHunt Logo">
                </div>
                <div class="col-md-8">
                    <h1>About EEE Society</h1>
                    <p>Department of Electrical and Electronic Engineering is going to celebrate “EEE Day 2017” with great zeal and festivities at Bangladesh Army University of Science and Technology (BAUST, Saidpur Cantonment on 23-25 January, 2018. The whole program consists of National Idea Contest, RoboRun, Project Show, Tech Quiz, Motivational speech, Workshops and Grand Concert. Students from different reputed universities from all over Bangladesh along with students from all departments of Bangladesh Army University of Science and Technology (BAUST) will attend the program. Famous personalities of Bangladesh will attend the program as honored guests and judges.</p>
                </div>
            </div>
        </div>
    </div>


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

    <div class="copyright text-center">
        <p>All &copy; Recieved by EEE BAUST </p>
    </div>
    


<div class="modal fade" tabindex="-1" role="dialog" id="ourevents">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Our Events</h4>
      </div>
      <div class="modal-body">

        <div class="single-event">
            <img src="img/event/Techhunt2017_Gaming_Contest_COD4 cover.png" alt="">
            <div class="right">
                <h3>Programming Contest</h3>
                <a class="btn btn-success" href="#">Register</a>
                <a class="btn btn-success" href="file/event/techhunt_programming_2017_v5.pdf">Event Details</a>
            </div>
        </div>
        

     </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- fit text -->
    <script type="text/javascript" src="js/jquery.fittext.js"></script>

    <!-- jquery countdown -->
    <script type="text/javascript" src="js/jquery.plugin.js"></script> 
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <script type="text/javascript">
      
      $(document).ready(function(){
        $("#counter").countdown({
        until: new Date(2018, 1 - 1, 23),
        format: 'dHMS'
        });

        $("#counter_wrapper").fitText(1.2, {
        minFontSize: '20px',
        maxFontSize: '50px'
        });

      });
    </script>
  </body>
</html>