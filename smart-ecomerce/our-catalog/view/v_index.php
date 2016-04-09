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
                    <h1 style="padding-bottom:50px;">Food  Catalog zone</h1>
                </div>
               
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->
                   
                    <!-- /SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-md-12 content" id="content">

                      

                        <!-- shop-sorting -->
                        
                        <!-- /shop-sorting -->

                        <!-- Products grid -->
                        <div class="row products grid">
                            <?php  $Template->get_data('display_catalog_items');

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