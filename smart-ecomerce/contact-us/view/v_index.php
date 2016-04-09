<!-- CONTENT AREA -->
 <?php include('../App-roots/Share-views/v_page_header.php');

 //$_SESSION['cart']=1234;
 //session_start(); 
    //echo $_SESSION['cart'];
 ?>

<!-- /CONTENT AREA -->
  <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Contact</h1>
                </div>
               
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <div class="contact-info">

                            <h2 class="block-title"><span>Contact Us</span></h2>

                            <div class="media-list">
                                <div class="media">
                                    <i class="pull-left fa fa-home"></i>
                                    <div class="media-body">
                                        <strong>Address:</strong><br>
                                        294 Portage Ave, Winnipeg, MB R3C 0B9
                                    </div>
                                </div>
                                <div class="media">
                                    <i class="pull-left fa fa-phone"></i>
                                    <div class="media-body">
                                        <strong>Telephone:</strong><br>
                                        (204) 947-0057
                                    </div>
                                </div>
                                <div class="media">
                                    <i class="pull-left fa fa-envelope-o"></i>
                                    <div class="media-body">
                                        <strong>Fax:</strong><br>
                                        (204) 947-0057
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        Thank you for your attention.
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <strong>Customer Service:</strong><br>
                                        <a href="mailto:qsb@synergyforce.ca">qsb@synergyforce.ca</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <strong>Returns and Refunds:</strong><br>
                                        <a href="mailto:qsb@synergyforce.ca">qsb@synergyforce.ca</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-8 text-left">

                        <h2 class="block-title"><span>Contact Form</span></h2>

                        <!-- Contact form -->
                        <form  method="POST"  class="contact-form" id="contact-form">

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <label class="sr-only" for="name">Name</label>
                                    <input
                                            type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                            data-toggle="tooltip" title="Name is required"
                                            class="form-control placeholder" />
                                </div>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <label class="sr-only" for="email">Email</label>
                                    <input
                                            type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                            data-toggle="tooltip" title="Email is required"
                                            class="form-control placeholder" />
                                </div>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input
                                            type="text" name="subject" id="subject" placeholder="Subject" value="" size="30"
                                            data-toggle="tooltip" title="Subject is required"
                                            class="form-control placeholder"/>
                                </div>
                            </div>

                            <div class="form-group af-inner">
                                <label class="sr-only" for="input-message">Message</label>
                                <textarea
                                        name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                        data-toggle="tooltip" title="Message is required"
                                        class="form-control placeholder"></textarea>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                 
                               <input type="button" id="submit-contact" class="btn btn-theme pull-right" value="Send message"/>
                                </div>
                            </div>

                        </form>
                        <!-- /Contact form -->

                    </div>

                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
      
        <!-- /PAGE -->

    </div>

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->

<?php include('../App-roots/Share-views/v_page_footer.php');?>