	<?php

	/*
	Products Class
	Handles all tasks related to retrieving and displaying products
	*/

	class Featured_Items
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

	public function get_featured_items_ids(){
		// get all featured items and associated product ids
		if ($result = $this->Database->query("SELECT * FROM " . $this->db_featured_table . " ORDER BY product_id"))
		{
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_array())
				{
					$data[] = array(					
						'product_id' => $row['product_id'],
						
						);
				}
			}
		}
		return $data;
	}

	public function get_featured_products()
	{
	// get the featured items product ids
		$featued_item_ids = $this->get_featured_items_ids();
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

			if ($result = $this->Database->query("SELECT * FROM $this->db_table WHERE product_id  ORDER BY product_name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[] = array(
							'product_id' => $row['product_id'],
							'product_name' => $row['product_name'],
							'description' => $row['product_description'],
							'image' => $row['image'],
							'price'=>$row['product_price'],
							//'bar_or_isbn_code'=>$row['bar_or_isbn_code']
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
	public function create_display_featured_item()
	{
	// get products
		$products = $this->get_featured_products();
		$data = '';
		//var_dump($products);die;
	// loop through each product
		if ( ! empty($products))
		{

			foreach ($products as $product)
			{

				$data .='
                     <div style=""class="col-md-4 col-sm-6">
                                <div class="thumbnail">
                                    <div class="media">
                                        <a class="media-link" href="../product-details/?book-name='.$product['product_name'].' & id='.$product['product_id'].'"">
                                            <img style="width:250px;height:150px;"src="../App-resourcess/assets/img/preview/shop/'.$product['image'].'" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$product['product_name'].'</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a style="background-color:red;" class="btn btn-theme btn-theme-transparent btn-icon-left" href="../product-details/?book-name='.$product['product_name'].' & id='.$product['product_id'].'"">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
}
}
return $data;
}


	public function create_display_related_item()
	{
	// get products
		$products = $this->get_featured_products();
		$data = '';

		//var_dump($products);die;
	// loop through each product

			$i=0;
			foreach ($products as $product)
			{

				$data .='
                     <div class="col-md-2 col-sm-6">
                                <div class="thumbnail">
                                    <div class="media">
                                        <a class="media-link" href="../product-details/?'.$product['product_name'].' & id='.$product['product_id'].'">
                                            <img style="width:450px;height:250px;"src="../App-resourcess/assets/img/preview/shop/'.$product['image'].'" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$product['product_name'].'</h4>
                                        
                                        <div class="buttons">
                                          
                                    <a style="background-color:red;" class="btn btn-theme btn-theme-transparent btn-icon-left" href="../product-details/?book-name='.$product['product_name'].' & id='.$product['product_id'].'"">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
                            if($i==5)break;
									

									$i++;
}
return $data;
}

//

	public function create_display_all_item()
	{
	// get products
		$products = $this->get_featured_products();
		$data = '';
		//var_dump($products);die;
	// loop through each product
		if ( ! empty($products))
		{

			foreach ($products as $product)
			{

				$data .='
                     <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="">
                                            <img style="width:250px;height:150px;"src="../App-resourcess/assets/img/preview/shop/'.$product['image'].'" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">name</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="../product-details/?book-name='.$product['product_name'].' & id='.$product['product_id'].'"">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
}
}
return $data;
}

}