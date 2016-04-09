<!-- CONTENT AREA -->
 <?php include('../App-roots/Share-views/v_page_header.php');

 //$_SESSION['cart']=1234;
 //session_start(); 
    //echo $_SESSION['cart'];
 ?>

<!-- /CONTENT AREA -->

    <!-- CONTENT AREA -->
     <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1 style="padding-bottom:50px;">Addmin Zone</h1>
                </div>
               
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
    
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title"><span>All items</span></h2>
                <div class="partners-carousel">
                    <div class="owl-carousel" id="partners">
                         <?php  $Template->get_data('display_all_items');

                            ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="../insert/">Insert new</a>
                            <h4 class="block-title"><span>Menu</span></h4>
                         
                              <?php  $Template->get_data('display_menu_items_admin');

                            ?>
                        </div>
                    </div>
                  
                    <div class="col-md-6">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="../insert/">Insert new</a>
                            <h4 class="block-title"><span>Categories</span></h4>
                          
                            <?php  $Template->get_data('display_menu_items_admin');

                            ?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

        <!-- PAGE -->
     
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
  
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->

<?php include('../App-roots/Share-views/v_page_footer.php');?>