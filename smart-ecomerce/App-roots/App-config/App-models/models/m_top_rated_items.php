	<?php

	/*
	Products Class
	Handles all tasks related to retrieving and displaying products
	*/

	class Top_Items
	{
		private $Database;
		private $db_table = 'products';
		private $db_featured_table = 'featured_items';
		private $db_top_rated_items = 'top_rated_items';

		function __construct()
		{
			global $Database;
			$this->Database = $Database;
		}

	/**
	* Retrieve product information from database
	*
	* @access	public
	* @param	int (optional)
	* @return	array
	*/

	public function get_top_items_ids(){
		// get all featured items and associated product ids
		if ($result = $this->Database->query("SELECT product_id FROM " . $this->db_top_rated_items . " ORDER BY product_id"))
		{
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_array())
				{
					$data[] = array(					
						'product_id' => $row['product_id']
						);
				}
			}
		}
		return $data;
	}

	public function get_top_products()
	{
	// get the featured items product ids
		$featued_item_ids = $this->get_top_items_ids();
		$data = array();

		if (is_array($featued_item_ids))
		{
		// get products based on array of ids
			$items = '';
			foreach ($featued_item_ids as $item)
			{
				if ($items!= '') 
				{ 
					$items .= ','; 
				}

				$items .= $item['product_id'];
			}

			if ($result = $this->Database->query("SELECT product_id, product_name, product_description FROM $this->db_table WHERE product_id IN ($items) ORDER BY product_name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[] = array(
							'product_id' => $row['product_id'],
							'product_name' => $row['product_name'],
							'description' => $row['product_description']
							);
					}
				}
			}
		}

		return $data;
	}





	/*
	Creation of page elements
	*/

	/**
	* Create product table using info from database
	*
	* @access	public
	* @param	int (optional), int (optional)
	* @return	string
	*/
	public function create_display_top_item()
	{
	// get products
		$products = $this->get_top_products();
		$data = '';

	// loop through each product
		if ( ! empty($products))
		{

			foreach ($products as $product)
			{

				$data .='<div class="col-md-3 col-sm-6">
    					<div class="thumbnail no-border no-padding">
        				<div class="media">
            				<a class="media-link" data-gal="prettyPhoto" href="../assets/img/preview/shop/100_1558_edited.jpg">
                			<img src="../assets/img/preview/shop/100_1558_edited.jpg" alt=""/>
                			<span class="icon-view"><strong></strong></span>
            				</a>
        				</div>
        				<div class="caption text-center">
            				<h4 class="caption-title"><a href="product-details.html">'.$product['product_name'].'</a></h4>
            				<div class="rating">
								<span class="star"></span>
								<span class="star active"></span>
								<span class="star active"></span>
								<span class="star active"></span>
								<span class="star active"></span>
							</div>
							<div class="price"><ins>$15.00</ins> <del>$17.00</del></div>
							<div class="buttons">
							<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"></a><!--
							--><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#">Add to Cart</a><!--
							--><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"></a>
							</div>
							</div>
							</div>
							</div>';
}
}
return $data;
}

}