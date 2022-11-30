<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Alún Café | Contacto </title>

    <link href="//fonts.googleapis.com/css2?family=Manrope:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
    <!--header-->
    <?php             
      require "include/header.php";
    ?>
    <!--/header-->
    <div class="inner-banner">
    </div>
    <section class="d7l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="#url">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
            </ul>
        </div>
    </section>
    <!-- /contact-form -->
    <section class="d7l-contact-6 py-5" id="contact">
        <div class="contact-info  py-lg-4 py-md-3">
            <div class="container">
                <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2">Contact us</h5>
                <h3 class="title-big text-center mb-5">Get in touch with us</h3>
            </div>
            <div class="grid contact-grids pt-3">
                <div class="contact-left">
                    <div class="grid">
                        <span class="fa fa-map-marker"></span>
                        <div class="location-info">
                            <span>Address</span>
                            <p> 2005 Stokes Isle Apt. 896, dolor sit </p>
                            <p>sed at ipsum,  Coffee Cafe Center,</p>
                            <p>Vacaville 10010, USA.</p>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-envelope-o"></span>
                        <div class="email-info">
                            <span>Have any Questions?</span>
                            <a href="mailto:mail@examplemail.com"> mail@examplemail.com</a>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Phone Number</span>
                            <a href="tel:(123) 456-78-90"> (123) 456-78-90</a><br>
                            <a href="tel:(123) 456-78-90"> (+12) 255 456-78-90</a>
                        </div>
                    </div>
                </div>
                <div class="contacts12-main">
                    <form action="https://sendmail.d7layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <div>
                                <label class="form-field" for="d7lName">Name</label>
                                <input type="text" name="d7lName" id="d7lName" placeholder="e.g. Jhon Smith"
                                    class="contact-input" />
                            </div>
                            <div>
                                <label class="form-field" for="d7lSender">Email Address</label class="form-field">
                                <input type="email" name="d7lSender" id="d7lSender" placeholder="e.g. example@mail.com"
                                    class="contact-input" />
                            </div>
                        </div>

                        <div>
                            <label class="form-field" for="d7lSubect">Subject</label class="form-field">
                            <input type="text" name="d7lSubect" id="d7lSubect" placeholder="e.g. Subject"
                                class="contact-input" />
                        </div>
                        <div>
                            <label class="form-field" for="d7lMessage">Message</label class="form-field">
                            <textarea name="d7lMessage" id="d7lMessage" placeholder="Type your message here"
                                required=""></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-style btn-primary submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-form -->
    <!-- /contact-map -->
    <section class="d7l-contact-6">
        <div id="contacts4-block" class="contact-map">
            <div class="">
                <div class="contact">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="cont-details">
                        <h5>Opening hours</h5>

                        <div class="opening-info-day">
                            <span class="opening-left">Monday:</span><span class="opening-right">9 AM - 4 PM</span>
                        </div>
                        <div class="opening-info-day">
                            <span class="opening-left">Tuesday:</span><span class="opening-right">9 AM - 4 PM</span>
                        </div>
                        <div class="opening-info-day">
                            <span class="opening-left">Wednesday:</span><span class="opening-right">9 AM - 4 PM</span>
                        </div>
                        <div class="opening-info-day">
                            <span class="opening-left">Thursday:</span><span class="opening-right">9 AM - 4 PM</span>
                        </div>
                        <div class="opening-info-day">
                            <span class="opening-left">Friday:</span><span class="opening-right">9 AM - 4 PM</span>
                        </div>
                        <div class="opening-info-day">
                            <span class="opening-left">Saturday:</span><span class="opening-right">9 AM - 4 PM</span>
                        </div>
                        <div class="opening-info-day">
                            <span class="opening-left">Sunday:</span><span class="opening-right">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact-map -->
    <?php 
      require "include/footer.php";
      require "include/scripts.php";
    ?> 
  </body>
</html>