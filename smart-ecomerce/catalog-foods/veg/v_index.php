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
                    <h1 style="padding-bottom:50px;">Food zone</h1>
                </div>
               
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar">
                        <!-- widget search -->
                        <div class="widget">
                            <div class="widget-search">
                                <input class="form-control" type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- /widget search -->
                        <!-- widget shop categories -->
                        <div class="widget shop-categories">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-content">
                                <ul>
                                <?php  $Template->get_data('build_left_rails_menu');

                            ?>
                                </ul>
                            </div>
                        </div>
                        <!-- /widget shop categories -->
                        <!-- widget product color -->
                        
                        <!-- /widget product color -->
                        <!-- widget price filter -->
                        
                        <!-- /widget price filter -->
                        <!-- widget tabs -->
                       
                        <!-- /widget tabs -->
                        <!-- widget tag cloud -->
                     
                        <!-- /widget tag cloud -->
                        <!-- widget products carousel -->
                      
                        <!-- /widget products carousel -->
                        <!-- widget shop hot deals -->
                        
                        <!-- /widget shop hot deals -->
                    </aside>
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-9 content" id="content">

                      

                        <!-- shop-sorting -->
                        
                        <!-- /shop-sorting -->

                        <!-- Products grid -->
                        <div class="row products grid">
                            <?php  $Template->get_data('display_all_items');

                            ?>
                  
                            
                        </div>
                        <!-- /Products grid -->

                        <!-- Pagination -->
                        
                        <!-- /Pagination -->

                    </div>
                    <!-- /CONTENT -->


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