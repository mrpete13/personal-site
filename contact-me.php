<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matt Petersen - Contact Me</title>
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fadeInPage.js"></script>
    <!-------------------- Custom CSS goes after the Bootstrap links -------->
    <link rel="stylesheet" type="text/css" href="css/mystyle-project.css">

    <style>
        body {
            padding: 10px;
            /* background: rgb(255,134,0);
				background: linear-gradient(216deg, rgba(255,134,0,1) 0%, rgba(97,97,97,1) 50%, rgba(0,0,0,1) 100%);  */
            background: rgb(215, 113, 0);
            background: radial-gradient(circle, rgba(215, 113, 0, 1) 0%, rgba(0, 0, 0, 1) 85%);
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <svg id="fader"></svg>
    <script>fadeInPage();</script>
    <div class="container">
        <!-- Static navbar -->
        <div id="topheader navbar navbar-default navbar-inverse">
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.html">
                                <img src="img/mp-large.png">
                            </a>
                        </div>
                    </div>
                    <div id=" navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <!-- <li id='home'><a class="nav-link" href="index.html">Home</a></li> -->
                            <li id='about-me-link'><a class="nav-link" href="about-me.html">About Me</a></li>
                            <li id='contact-me-link'><a class="nav-link" href="#" style="border-bottom: 2px solid orange; color:white;">Contact Me</a></li>
                            <li id='my-hardware-link'><a class="nav-link" href="my-hardware.html">My Hardware</a></li>
                            <li>
                                <div class="button-group">
                                    <a class="btn btn-warning navbar-btn" href="my-projects.html">My Projects</a>
                                    <a href="#" class="btn btn-warning navbar-btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left:0px;"><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="my-projects/arch-raspi.html">Arch Linux on Raspberry Pi</a></li>
                                        <li><a href="my-projects/pihole.html">My PiHole Setup</a></li>
                                        <li><a href="my-projects/wireguard.html">My WireGuard® Setup</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
    </div> <!-- /container -->

    <body>

        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8 well">
                <!--Section: Contact v.2-->
                <section class="section">
                    <!--Section heading-->
                    <h2><u>Contact me</u></h2>
                    <br>
                    <!--Section description-->
                    <h4>Any questions or constructive criticism? Feel free to reach out!</h4><br>
                    <div class="row">
                        <!--Grid column-->

                        <div class="col-md-8 col-xl-8">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="return validateForm()">

                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <label for="name" class="">Your name</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="John/Jane Doe">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <label for="email" class="">Your email</label>
                                                <input type="text" id="email" name="email" class="form-control" placeholder="name@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->
                                <br>
                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <label for="subject" class="">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <br>
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form mb-3">
                                            <label for="message" class="form-label">Your message</label><br>
                                            <textarea type="text" id="message" name="message" class="md-textarea form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                            </form>
                            <br>
                            <div class="center-on-small-only">
                                <a class="btn btn-primary" onclick="validateForm()">Send</a>
                            </div>
                            <div class="status" id="status"></div>
                        </div>
                        <div class="col-md-2 col-xl-2"></div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <!-- <div class="col-md-4 col-xl-3">
                            <p>mrpete@petesplace.org</p>
                        </div> -->
                        <!--Grid column-->
                    </div>
                </section>
                <!--Section: Contact v.2-->
            </div>
        </div>
        <div class="col-md-2"></div>
        <!-- SCRIPTS -->
        <script>
            function validateForm() {
                //get input field values data to be sent to server
                document.getElementById('status').innerHTML = "Sending...";
                formData = {
                    'name': $('input[name=name]').val(),
                    'email': $('input[name=email]').val(),
                    'subject': $('input[name=subject]').val(),
                    'message': $('textarea[name=message]').val()
                };


                $.ajax({
                    url: "mail.php",
                    type: "POST",
                    data: formData,
                    success: function(data, textStatus, jqXHR) {

                        $('#status').text(data.message);
                        if (data.code) //If mail was sent successfully, reset the form.
                            $('#contact-form').closest('form').find("input[type=text], textarea").val("");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#status').text(jqXHR);
                    }
                });
            }
        </script>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/hilight-active.js"></script>
    </body>

</html>