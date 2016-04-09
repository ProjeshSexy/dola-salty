<?php 
               //var_dump($id);
         include('../App-roots/Share-views/v_page_header.php');
            
            //die();

?>
<div class="wrapper">


    <!-- /Header top bar -->

    <!-- HEADER -->
  
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Shopping Cart</h1>
                </div>
              
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">

                
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>2. Orders</h3>
                <div class="row orders">
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Product Name</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                            <?php 
                            if($data!=null){
                            foreach ($data as $cart) {
                            //var_dump($cart);
                                # code...
                                
                            echo '<tr>
                                <td class="image"><a class="media-link" href="#"><i class="fa fa-plus"></i><img src="assets/img/preview/shop/order-1.jpg" alt=""/></a></td>
                                <td class="quantity" ><input type="number" id="qty" data-price="'.$cart['price'].'" class="form-control qty_box" min="1" data-id= "'.$cart['id'].'"style="width:100px;"value="'.$cart['qty'].'"/></td>
                                <td class="description" id="name-product">
                                    <h4><a href="#" >'.$cart['name'].'</a></h4>
                                    
                      
                                    
                                </td>
                                <td class="total" id="unit-cost">$'.$cart['price'].'<button type="submit" id="delete-qty" data-id="'.$cart['id'].'"><i class="fa fa-close"></i></button></td>
                            </tr>';
                                }
                            }
                            else{

                                    echo '<tr>
                                <td class="total"></td>
                                <td class="total"></td>
                                <td class="description">
                                    Empty(Cart)
                      
                                    
                                </td>
                                <td class="total"></td>
                            </tr>';

                                }
                                ?>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <h3 class="block-title"><span>Shopping cart</span></h3>
                        <div class="shopping-cart">
                            <table>
                                <tr>
                                    <td>Sub-total:</td>
                                    <td id="sub-total">$<?php echo $subtotal;?>.00</td>
                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td id="s-cost">$25</td>
                                </tr>
                                <tfoot>
                                <tr>
                                    <td>Total:</td>
                                    <td id="total-cost">$<?php echo $payment_total;?>.00</td>
                                </tr>
                                </tfoot>
                            </table>
                            
                        </div>
                    </div>
                </div>

                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Delivery address</h3>
                <form  class="form-delivery" id="cart-inform" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" placeholder="First Name" name="fname" id="fname" type="text" value=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Last Name" name="lname" id="lname" value=""></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Address" name="uaddress" id="uaddress" value=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                        class="selectpicker input-price" data-live-search="true" data-width="100%"
                                        data-toggle="tooltip" title="Select" name="ucountry" id="ucountry">
                                    <option value="">Select country</option>
                                    <option>Country</option>
                                    <option>Country</option>
                                    <option>Country</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                        class="selectpicker input-price" data-live-search="true" data-width="100%"
                                        data-toggle="tooltip" title="Select" name="ucity" id="ucity">
                                    <option value="">Select City</option>
                                    <option>City</option>
                                    <option>City</option>
                                    <option>City</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Postcode/ZIP" name="uzip" id="uzip"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Email" name="uemail" id="uemail"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"><input class="form-control" type="text" placeholder="Phone Number" name="uphone" id="uphone"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><textarea class="form-control" placeholder="Addıtıonal Informatıon" name="umessage" id="umessage" cols="30" rows="10"></textarea></div>
                        </div>
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                

                <div class="overflowed">
                    <a class="btn btn-theme btn-theme-dark" href="../index/">Home Page</a>
                    <input type="button" id="place-order" class="btn btn-theme pull-right" value="Submit"/>
                </div>

                </form>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->
        
        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->
<?php 
            include('../App-roots/Share-views/v_page_footer.php'); 
?>