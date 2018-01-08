<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This is social network html5 template available in themeforest......" />
        <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
        <meta name="robots" content="index, follow" />
        <title>Hawk Eye </title>
        <!-- Stylesheets
    ================================================= -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css'>
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <link rel="stylesheet" href="css/ionicons.min.css" /r_job>
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <link href="css/emoji.css" rel="stylesheet">
        <link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">
        <link href="css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="images/fav.png" />
        <style type="text/css">
          #tab_jstatus{
            margin-left: -171px;
            width: 885px;
          }
        </style>




    </head>
    <body>
        <!-- Header
    ================================================= -->
        <header id="header">
            <nav class="navbar navbar-default navbar-fixed-top menu">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-register.html">
                            <!-- <img src="images/logo.png" alt="logo" />-->
                            <span style="color:#fff;font-size:30px">HAWK EYE</span>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right main-menu" style="padding-right:30px">
                            <li style="margin-right:10px">
                                <a href="#"><i class="fa fa-bell" style="color:#fff;font-size:23px"></i></a>
                            </li>
                            <li style="margin-right:10px">
                                <a href="#"><i class="fa fa-comment" style="color:#fff;font-size:23px"></i></a>
                            </li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="edit-profile-password.html" style="color:#fff;font-size:23px"><i class="fa fa-cog" ></i>
                              <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="edit-profile-settings.html">Account Settings</a></li>
                                <li><a href="edit-profile-password.html">Change Password</a></li>
                                <li><a href="php/log_out.php" id="lg">Log Out</a></li>
                              </ul>
                            </li>
                        </ul>
                        <div align="center">
                            <form class="navbar-form navbar-center hidden-sm">
                                <div class="form-group">
                                    <i class="icon ion-android-search"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header>
        <!--Header End-->
        <div id="page-contents">
            <div class="container">
                <div class="row">
                    <!-- Newsfeed Common Side Bar Left
          ================================================= -->
                    <div class="col-md-3 static">
                        <div class="profile-card">
                            <img src="http://placehold.it/300x300" alt="user" class="profile-photo" />
                            <h5><a href="timeline.html" class="text-white" id="r_name"></a></h5>
                            <a href="#" class="text-white"> 1,299 Views</a>
                        </div>
                        <!--profile card ends-->
                        <!--news-feed links ends-->
                        <div id="chat-block">
                            <ul class="nav-news-feed" style="text-align:left;">
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="newsfeed.html" style="color:#149AC9">Profile</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="newsfeed-people-nearby.html" style="color:#149AC9">Jobfeed</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="resumesearch.html" style="color:#149AC9">Resume Search</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="newsfeed-friends.html" style="color:#149AC9">Clients</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="newsfeed-messages.html" style="color:#149AC9">Recruiters</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="newsfeed-images.html" style="color:#149AC9">Relevant</a>
                                    </div>
                                </li>
                                <li>
                                    <div style="border-bottom:1px solid #c0c0c0">
                                        <a href="newsfeed-videos.html" style="color:#149AC9">Views</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--chat block ends-->
                    </div>
                    <div class="col-md-9">
                        <!-- Post Create Box
            ================================================= -->
                        <!-- <div class="create-post">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
                        <!-- Post Create Box End-->
                        <!-- Post Content
            ================================================= -->
                        <div class="" style="width:900px;">
                          <h2 align="center">JOB POSTING</h2>
                          <div class="content container" style="margin-top:45px;margin-left:165px;" id="R_Form">
                            <div id="register">
                              <div class="container" id="tab_jstatus">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Applied</a></li>
    <li><a href="#tab2" data-toggle="tab">Suggested</a></li>
    <li><a href="#tab3" data-toggle="tab">Shortllisted</a></li>
    <li><a href="#tab4" data-toggle="tab">Save For Later</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <div class="panel panel-default" id="applied1">
      <?php include 'php/r_job_applied3.php';?>
        <!-- <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseOne">
              Applied
            </a>
          </h4>
        </div> -->

      </div>
    </div>
    <div class="tab-pane" id="tab2">
      <div class="panel panel-default">
        <!-- <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
              Tab 2
            </a>
          </h4>
        </div> -->
       <!--  <div id="collapseTwo" class="panel-collapse collapse in">
          <div class="panel-body">

          </div> -->
        <!-- </div> -->
      </div>
    </div>
    <div class="tab-pane" id="tab3">
      <div class="panel panel-default" id="shortlisted">
        <!-- <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseThree">
              Tab 3
            </a>
          </h4>
        </div> -->
        <!-- <div id="collapseThree" class="panel-collapse collapse in"> -->
       <!--    <div class="panel-body">

          </div>
        </div> -->
      </div>
    </div>
    <div class="tab-pane" id="tab4">
      <div class="panel panel-default">
        <!-- <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseFour">
             Tab 4
            </a>
          </h4>
        </div> -->
        <div id="collapseFour" class="panel-collapse collapse in">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                              </div>
                            </div>

                            </div>
                        </div>
                        <br />
                        <br />
                        <!-- Post Content
            ================================================= -->


                </div>
            </div>
        </div>
        <!-- Footer
    ================================================= -->
        <!--preloader-->
        <div id="spinner-wrapper">
            <div class="spinner"></div>
        </div>
        <!-- Scripts
    ================================================= -->
        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script> -->
        <!-- <script src="js/jquery-3.1.1.min.js"></script> -->
        <!-- <script src="js/bootstrap.min.js"></script> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>  -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script src="js/script.js"></script>
        <!-- <script type="text/javascript" src="js/tag-it.js"></script> -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.sticky-kit.min.js"></script>
        <!-- <script src="js/tagprompt.js"></script> -->
        <script src="js/jobPosting.js"></script>
        <script src="js/r_candetails.js"></script>
        <script src="js/c_jobView.js"></script>

        <script src="js/job_shortlist.js"></script>

        <script src="js/jquery.scrollbar.min.js"></script>
<!--         <script type="text/javascript">

    $(document).ready(function() {

    $('.pop').magnificPopup({
      type: 'ajax'
    });



    });
    </script> -->


</script>

    </body>
</html>
