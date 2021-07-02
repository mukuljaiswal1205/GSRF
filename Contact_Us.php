<?php include('Header.php'); ?>
    
    <style>
        .map
        {
          margin-top: 1%;
          bordeR: 3px solid white;
          width: 100%;
          height: 30em;
          box-shadow: 1px 1px 4px black;
        }
        
    </style>
    <!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title"> Contact us </div>
                <ul class="bread-crumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact us  </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->
	
    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="inner-content">
                        
                        <div class="contact-form-area">
                            <!--<form id="contact-form" name="contact_form" class="default-form" action="http://html.tonatheme.com/2019/Aculia/inc/sendmail.php" method="post">-->
                            <form id="contact-form" name="contact_form" class="default-form" action="sendmail.php" method="post">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="form_name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="form_email" required="">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="form_subject" required="">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="form_message" required=""></textarea>
                                </div>
                                <div class="contact-button">
                                    <button type="submit" class="theme-btn" data-loading-text="Please wait...">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-column">
                    <div class="sidebar-content">
                        <div class="single-item">
                            <h4>Address</h4>
                            <h6 class="text"> <b>GANESH SCIENTIFIC RESEARCH FOUNDATION</b>  </h6>
                            <div class="text">64-65, SATGURU RAM SINGH MARG <br/> KIRTI NAGAR INDUSTRIAL AREA,<br/> NEW DELHI – Pin 110015</div>
                        </div>
                        <div class="single-item">
                            <h4> Contact: </h4>
                            <p>  Chairman Mr.REETESH KUMAR VISHWAKARMA </p>
                            <p> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material-two-tone/24/000000/phone--v1.png"/> <a href="tel: 9599974780">+91 9599974780 </a> <br/> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material/24/000000/composing-mail.png"/> <a href="mailto: gsrfdelhi@gmail.com">gsrfdelhi@gmail.com</a>  </p>
                            <p> Director GSRF, Ms.ALPICA CHITRANSHI </p>
                            <p> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material-two-tone/24/000000/phone--v1.png"/> <a href="tel: 9876373697">+91 9876373697 </a> <br/> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material/24/000000/composing-mail.png"/> <a href="mailto: gsrf.quality@gmail.com">gsrf.quality@gmail.com</a>  </p>
                            <p> Business Head GSRF </p>
                            <p> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material-two-tone/24/000000/phone--v1.png"/> <a href="tel: 9599974780">+91 9599974780 </a> <br/> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material/24/000000/composing-mail.png"/> <a href="mailto:gsrfofficial@gmail.com">gsrfofficial@gmail.com</a>  </p>
                            <p> Land Line Office </p>
                            <p> &nbsp;&nbsp;&nbsp;&nbsp; <img src="https://img.icons8.com/material-two-tone/24/000000/phone--v1.png"/> <a href="tel: 011-25102814">011-25102814</a> </p>
                            
                            
                            <!--<h4>Contact information</h4>-->
                                 
                            <!--    <p><img src="https://img.icons8.com/nolan/64/phone.png"/> <a href="tel: 9599974780">+91 9599974780 </a> <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="tel: 011-25102814">011-25102814 </a> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="tel: 011-25195045">011-25195045 </a> </p>-->
                            <!--    <p>Email:  info@gsrf.co.in/gsrfdelhi@gmail.com</p>-->
                            <!--</div>-->
                        </div>
                         
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="map"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.440151137254!2d77.13870621508292!3d28.646536782412213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02f8c87e7219%3A0xe13e71af0677b795!2sGanesh%20Scientific%20Research%20Foundation!5e0!3m2!1sen!2sin!4v1589313913541!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
            </div>
        </div>
    </section>
    <!-- contact-section end -->
	
	<?php include('Footer.php'); ?>