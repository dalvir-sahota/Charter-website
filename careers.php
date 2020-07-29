<?php
$showSuccessMessage = false; 
if(isset($_GET['code']))
    $showSuccessMessage = true;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Careers - Charter Logistics</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>
  <header class="sub-pages">
        <nav class="navbar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                        <a href="index.html" class="navbar-brand hidden-md hidden-sm hidden-xs"><img src="./img/charter_logo_black_md.png" alt=""/></a>
                        <a href="index.html" class="navbar-brand hidden-lg"><img src="./img/charter_logo_black_xs.png" alt=""/></a>                                
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <div class="row">
                            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="tel:+19057811237"><i class="glyphicon glyphicon-phone"></i> (905) 781-1237</a></li>
                                    <li><a href="mailto:dispatch@charterfreightservices.com"><i class="glyphicon glyphicon-envelope"></i> dispatch@charterfreightservices.com</a></li>        
                            </ul>
                    </div>    
                    <div class="row">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Our Services</a></li>
                                <li><a href="equipments.html">Equipment &amp; Fleets</a></li>
                                <li class="active"><a href="careers.php">Careers</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
        </nav>
</header>
<div class="container-fluid our-services-main-content">
            <div class="row title-row-career text-center background-fixed breadcrumb">
                <div class="col-xs-12">
                    <h1>Careers</h1>
                    <h3><a href="index.html">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Careers</h3>
                </div>
            </div>
</div>
<!-- main content -->
<div class="main-content-container our-services-main-content-container">
<div class="row" style="display:<?php echo $showSuccessMessage ? 'block' : 'none' ?>">
    <div class="col-xs-12">
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Thank you! for your message.</strong> We will get back to you ASAP.
    </div>
</div> 
</div>       
<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="contact-form-submission.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Your Information</legend>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" name="lastname" id="lastname" class="form-control" />
                                        </div>
                                </div>
                            </div>
                    </fieldset>                  
                   <div class="row">
                       <div class="col-md-6">
                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" />
                            </div>
                       </div>
                       <div class="col-md-6">
                            <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" />
                            </div>
                       </div>
                   </div>
                   <fieldset>
                       <legend>Additional Documents</legend>
                       <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                         <label for="attachment">Resume</label>
                                         <input type="file" name="attachment" id="attachment" class="form-control" />
                                 </div>
                            </div>
                        </div>
                   </fieldset>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-rounded btn-primary" name="submit" value="career">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="blue-block">CONTACT DETAILS</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 border-left-block">
                <h4>Contact Details</h4>
                <a href="mailto:dispatch@charterfreightservices.com"><i class="fa fa-envelope" aria-hidden="true" ></i> dispatch@charterfreightservices.com</a><br>
                <a href="tel:+16471231234"><i class="fa fa-phone" aria-hidden="true"></i> +1 (647) 123-1234</a><br>
                <a href="fax:+19056542636"><i class="fa fa-print" aria-hidden="true"></i> +1 (905) 654-2636</a>
            </div>
            <div class="col-md-6 border-left-block">
                <h4>Office Address</h4>
                <address>
                    7050 Telford Way<br>
    Unit 8A<br>
    Mississauga, ON L5S 1V7<br>
    Canada
                </address>
            </div>
        </div>
    </div>
    <!-- /main-content -->
<!-- footer -->
<footer>
            <div class="row">
                <div class="col-md-6">
                    <h4>About Us</h4>
                    <div class="oranger-underline"></div>
                    <p>We provide an unmatched customer service experience and continuously train our staff to be the best they can be.
                       Our team works with the shared vision of helping our customers achieve success. 
                       We equip our drivers with top-of-the-line equipment, provide on-going training, 
                       and offer several benefits packages to our office staff.</p>
                </div> 
                <div class="col-md-6">
                    <h4>Quick Links</h4>
                    <div class="oranger-underline"></div>
                    <ul>
                        <li><a href="services.html">Our Services</a></li>
                        <li><a href="equipments.html">Equipment</a></li>
                        <li><a href="contact.php">Connect With Us</a></li>
                        <li><a href="careers.php">Careers</a></li>
                    </ul>
                    <ul class="display-li-block">
                        <li class="underline-none"><a href="tel:+19057811237"></a><i class="fa fa-phone" aria-hidden="true"></i> +1 (905) 781-1237</a></li>
                        <li class="underline-none"><a href="fax:+19056542636"><i class="fa fa-print" aria-hidden="true"></i> +1 (905) 654-2636</a></li>
                        <li class="underline-none"><a href="mailto:dispatch@charterfreightservices.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;dispatch@charterfreightservices.com</a></li>
                    </ul>
                </div> 
            </div>
            <div class="row copyright-row">
                <div class="col-xs-12">
                    <p class="text-center">&copy; Charter Freight Services. All rights reserved.</p>
                </div>
            </div>
        </footer>
<!-- /footer -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

  </body>
</html>
