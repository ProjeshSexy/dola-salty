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
                  <h1 class="caption-title" style="font-size:1.75em;"><span>Search from our inventory of thousands book</span></h1>
                </div>
               
            </div>
        </section>

        <section class="page-section no-padding-bottom">
        <div class="container" id="search-result">
            <div class="row main-slider-row">   
                

            <div class="col-md-9  col-sm-6 col-xs-4 slider">
               <div class = "table-responsive">
      <table class = "table">
      
      
      
      <tbody>
         <tr>
            <td>AUTHOR</td>
            <td><input class="slider-1-search-input" type="text" id="author-name"name="author-name"></td>
            <td></td>
         </tr>
         
         <tr>
            <td>TITLE</td>
            <td><input class="slider-1-search-input" id="title-id" type="text" name="title-"></td>
            <td></td>
         </tr>
         
         <tr>
            <td>KEYWORDS</td>
            <td><input class="slider-1-search-input" id="keywords-id" type="text" name="author-name"></td>
            <td></td>
         </tr>

         <tr>
            <td>ISBN</td>
            <td><input class="slider-1-search-input" id="isbn-id" type="text" name="author-name"></td>
            <td></td>
         </tr>

         <tr>
            <td>PUBLISHERS</td>
            <td><input class="slider-1-search-input" id="publishers-id" type="text" name="author-name"></td>
            <td></td>
         </tr>

         <tr>
            <td>PUBLISHED DATE</td>
            <td><input class="slider-1-search-input" type="text" name="author-name"></td>
            <td>TO</td>
            <td><input class="slider-1-search-input" type="text" name="author-name"></td>
         </tr>

         <tr>
            <td>PRICE</td>
            <td><input class="slider-1-search-input" type="text" name="author-name"></td>
            <td>TO</td>
            <td><input class="slider-1-search-input" type="text" name="author-name"></td>
         </tr>

         <tr>
            <td>BINDINGS</td>
            <td>
            <label class="radio-inline"><input type="radio" name="optradio">ANY</label>
            <label class="radio-inline"><input type="radio" name="optradio">HARDCOVER</label>
            <label class="radio-inline"><input type="radio" name="optradio">SOFTCOVER</label> 
            </td>
            <td></td>
         </tr>
         
         <tr>
            <td>BOOK LISTED  WITHIN</td>
            <td>
            <select class="form-control" id="sel1" style="width:75%;">
            <option>24 HOURS</option>
            <option>48 HOURS</option>
            <option>3 DAYS</option>
            <option>7 DAYS</option>
          </select>
            </td>
            <td></td>
         </tr>

          <tr>
            <td>BOOKSELLER COUNTRY</td>
            <td>
            <select class="form-control" id="sel1" style="width:75%;">
            <option>CANADA</option>
            <option>USA</option>
            <option>UK</option>
            <option>BANGLADESH</option>
          </select>
            </td>
            <td></td>
         </tr>

          <tr>
            <td>SORT RESULTS BY</td>
            <td>
            <select class="form-control" id="sel1" style="width:75%;">
            <option>TITLE</option>
            <option>AUTHOR</option>
            <option>CATEGORY</option>
            <option>ISBN</option>
            </select>
            </td>
            <td></td>
         </tr>

         <tr>
            <td>BOOLEAN SEARCH</td>
            <td>
            <label class="radio-inline"><input type="radio" name="optradio">TRUE</label>
            <label class="radio-inline"><input type="radio" name="optradio">FALSE</label>
           
            </td>
            <td></td>
         </tr>

          <tr>
           <td><input type="button" class="btn btn-theme"  id="search-id" value="Search Now"></td>
            <td></td>
            <td></td>
           
            
         </tr>
      </tbody>
      
   </table>
</div>      
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