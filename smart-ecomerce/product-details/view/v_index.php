<!-- CONTENT AREA -->
 <?php include('../App-roots/Share-views/v_page_header.php');

 //$_SESSION['cart']=1234;
 //session_start(); 
    //echo $_SESSION['cart'];
 ?>

<div class="content-area">

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">

                <div class="row product-single">
                    <div class="col-md-6">
                       
                            <div class="item">
                                
                                <a href="#"><img style="width:500px; height:600px;"class="img-responsive" src="../App-resourcess/assets/img/preview/shop/<?php  echo $img;?>" alt=""/></a></div>
                       
                        
                    </div>



                    <div class="col-md-6">
                        
                        <h2 class="product-title" style="text-transform: capitalize;"><?php  echo $name;?></h2>
                      
                        
                        <hr class="page-divider small"/>

                        <div class="product-price"><?php echo $price; ?>TK</div>
                        <hr class="page-divider"/>

                        <div class="product-text">
                            <p> <strong><?php  echo $description?></strong></p>
                            <ul>
                                <li><?php  echo $description?></li>
                                
                            </ul>
                        </div>
                        <hr class="page-divider"/>
                        <form action="#" class="row variable">
                            <div class="col-sm-6">
                                <div class="form-group selectpicker-wrapper">
                                    <label for="exampleSelect1">Quantity</label>
                                    <select
                                            id="exampleSelect1"
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select">
                                        <option value=1>1</option>
                                        <option value=2>2</option>
                                        <option value=3>3</option>
                                    </select>
                                </div>
                            </div>
                          
                        </form>
                        <hr class="page-divider small"/>


                        <div class="buttons">
                            <div class="quantity">
                                <button class="btn"><i class="fa fa-minus"></i></button>
                                <input class="form-control qty" type="number" step="1" min="1" name="quantity" value="1" title="Qty">
                                <button class="btn"><i class="fa fa-plus"></i></button>
                            </div>
                            <button id="add-to-cart" data-book-id="<?=$id?>" data-book-name="<?=$name?>" class="btn btn-theme btn-cart btn-icon-left" type="submit"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                           
                        </div>

                        <hr class="page-divider small"/>

                        <table>
                            <tr>
                                <td class="title">Category:</td>
                                <td>Food</td>
                            </tr>
                           
                        </table>
                        <hr class="page-divider small"/>


                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
       
        <!-- /PAGE -->

        <!-- PAGE -->
       
        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title section-title-lg"><span>Related Products</span></h2>
                <div class="featured-products-carousel">
                   
                      
                    <?php  $Template->get_data('display_related_items'); ?>  
                   
                </div>
                <hr class="page-divider half"/>
               
            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
      
        <!-- /PAGE -->

    </div>
     <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>

    <!-- CONTENT AREA -->
 <?php include('../App-roots/Share-views/v_page_footer.php');

 //$_SESSION['cart']=1234;
 //session_start(); 
    //echo $_SESSION['cart'];
 ?>