 <!-- CONTENT AREA -->
 <?php include('../App-roots/Share-views/v_page_header.php');

 //$_SESSION['cart']=1234;
 //session_start(); 
    //echo $_SESSION['cart'];
 ?>
            
             <div class="content-area">
         <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                  <h1 class="caption-title" style="font-size:1.75em;"><span>Insert into inventory</span></h1>
                </div>
               
            </div>
        </section>

        <section class="page-section no-padding-bottom">
        <div class="container" id="search-result">
            <div class="row main-slider-row">   
                

            <div class="col-md-12  col-sm-6 col-xs-4 slider">
            <form action="upload.php" method="post" enctype="multipart/form-data">
               <div class = "table-responsive col-md-6">
      <table class = "table">
      
      
      
      <tbody>
        

         <tr>
            <td>Category name</td>
            <td><input class="slider-1-search-input" type="text" id="cat-name"name="cat-name"></td>
            <td></td>
         </tr>

         <tr>
            <td>Category url</td>
            <td><input class="slider-1-search-input" type="text" id="cat-url"name="cat-url"></td>
            <td></td>
         </tr>

         <tr>
            <td>Menu name</td>
            <td><input class="slider-1-search-input" type="text" id="menu-name"name="menu-name"></td>
            <td></td>
         </tr>

         <tr>
            <td>Menu url</td>
            <td><input class="slider-1-search-input" type="text" id="menu-url"name="menu-url"></td>
            <td></td>
         </tr>
         
         <tr>
            <td>Product name</td>
            <td><input class="slider-1-search-input" id="name-id" type="text" name="name-id"></td>
            <td></td>
         </tr>
         
         <tr>
            <td>Product price</td>
            <td><input class="slider-1-search-input" id="price-id" type="text" name="price-id"></td>
            <td></td>
         </tr>

         <tr>
            <td>Product description</td>
            <td><input class="slider-1-search-input" id="desc-id" type="text" name="desc-id"></td>
            <td></td>
         </tr>

         <tr>
            <td>Product other details</td>
            <td><input class="slider-1-search-input" id="details-id" type="text" name="details-id"></td>
            <td></td>
         </tr>

         

      

          <tr>
           <td><input type="submit" class="btn btn-theme"  name="insert" id="insert" value="Insert Now"></td>
            <td></td>
            <td></td>
           
            
         </tr>
      </tbody>
      
   </table>
</div> 
 <div class = "table-responsive col-md-6">
    
    
    Select image to upload:
    <input type="file"   class="btn btn-theme"  name="fileToUpload" id="fileToUpload">
    
</div> 
</form>    
        </div>                   
    </div>
</div>
</section>

        <!-- BREADCRUMBS -->
      
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
      
        <!-- /PAGE -->

        <!-- PAGE -->
      
        <!-- /PAGE -->

    </div>
        <!-- FOOTER -->

<?php include('../App-roots/Share-views/v_page_footer.php');?>