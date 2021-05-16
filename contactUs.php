<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'header.php';
        //require 'index.php';
        // put your code here
        ?>
        <section id="contact" style="">
        <div class="container">
            <div class="row">
                <div class="about_our_company" style="margin-bottom: 20px;">
                    <h1 style="color:#fff;">Write Your Message</h1>
                    <p style="color:#fff;">Fill out the form below and a Toptal representative will contact you as soon as possible.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form name="sentMessage" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Text" class="form-control" placeholder="Your Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Text" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Text" class="form-control" placeholder="Your Phone *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Text" class="form-control"  placeholder="Your Message *" value="" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" value="Send Message" class="btnContactSubmit" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <p style="color:#fff;">
                        <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                        1216/Mirpur_10 Beach, Dhaka(Bangladesh)
                    </p>
                    <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                        (+8801)7123456</p>
                    <p style="color:#fff;">
                        <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                        Email@info.com</p>
                    <p></p>
                </div>
            </div>
        </div>
        </section>
        <?php
        include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>
