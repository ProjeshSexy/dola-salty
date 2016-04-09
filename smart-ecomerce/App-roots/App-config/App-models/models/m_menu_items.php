	<?php

	/*
	Products Class
	Handles all tasks related to retrieving and displaying products
	*/

	class Menu_item
	{
		private $Database;
		private $db_table = 'products';
		private $db_featured_table = 'menu';


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

	public function get_menu_items_ids($id=NULL){

		// get all featured items and associated product ids
		if ($result = $this->Database->query("SELECT * FROM " . $this->db_featured_table . " ORDER BY menu_id"))
		{
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_array())
				{
					$data[] = array(					
						'menu_id' => $row['menu_id'],
						'name' => $row['name'],
						'url' => $row['item_url'],
						'image' => $row['image'],
						
						);
				}
			}
		}
		return $data;
	}

	public function get_menu_all_items($id=NULL){
		
		// get all featured items and associated product ids
		$data=array();
		if($id !=NULL){
			//var_dump($id);die;
		if ($result = $this->Database->query("SELECT * FROM  $this->db_table WHERE menu_id='".$id."'"))
		{
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_array())
				{
					$data[] = array(					
						'product_id' => $row['product_id'],
						'product_name' => $row['product_name'],
						'price' => $row['product_price'],
						'image' => $row['image'],
						'description'=>$row['product_description']
						
						);
				}
			}
		}
		
	}else{

			if ($result = $this->Database->query("SELECT * FROM  $this->db_table  ORDER BY product_id"))
		{
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_array())
				{
					$data[] = array(					
						'product_id' => $row['product_id'],
						'product_name' => $row['product_name'],
						'price' => $row['product_price'],
						'image' => $row['image'],
						'description'=>$row['product_description']
						
						);
				}
			}
		}

	}
	return $data;
	}

	public function get_menu()
	{
	// get the featured items product ids
		$menu_item_ids = $this->get_menu_items_ids();
		$data = array();

		if (is_array($menu_item_ids))
		{
		// get products based on array of ids
			$items = '';
			foreach ($menu_item_ids as $item)
			{
				if ($items!= '') 
				{ 
					$items .= ','; 
				}

				$items .= $item['product_id'];

				
			}

			if ($result = $this->Database->query("SELECT * FROM $this->db_table WHERE product_id IN ($items) ORDER BY product_name"))
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
							'bar_or_isbn_code'=>$row['bar_or_isbn_code']
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
	public function create_display_menu_item()
	{
	// get products
		$items= $this->get_menu_items_ids();
		$data = '';
		//var_dump($products);die;
	// loop through each product
		//var_dump($items);die;
		if ( ! empty($items))
		{

			foreach ($items as $menu)
			{
				//var_dump($menu['url']);//die;

				$data .='
                     <div  class="col-md-6 ">
                        <div class="recent-post thumbnail">
                            <div style="background-color:#610B0B;" class="media ">
                                <a class="pull-left media-link" href="../'.$menu['url'].'">
                                    <img style="width:200px; height:200px;" class="media-object" src="../App-resourcess/assets/img/preview/shop/'.$menu['image'].'" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <p class="media-category" style="text-transform: capitalize;"><a href="../'.$menu['url'].'">'.$menu['name'].'</a> / <a href="../'.$menu['url'].'/">'.$menu['name'].'</a></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>';
}
}
return $data;
}


public function create_display_all_item($id=NULL)
	{
	// get products
		$products = $this->get_menu_all_items($id);
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

///

public function create_display_all_item_admin()
	{
	// get products
		$products = $this->get_menu_all_items();
		$data = '';
		//var_dump($products);die;
		//var_dump($products);die;
	// loop through each product
		if ( ! empty($products))
		{

			foreach ($products as $product)
			{


				$data .='
                     <div><a href="#"><img src="../App-resourcess/assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>';
}
}
return $data;
}

//


	public function create_display_menu_item_admin()
	{
	// get products
		$items= $this->get_menu_items_ids();
		$data = '';
		//var_dump($products);die;
	// loop through each product
		//var_dump($items);die;
		if ( ! empty($items))
		{

			foreach ($items as $menu)
			{
				//var_dump($menu['url']);//die;

				$data .='
                     <div class="media">
                                <a class="pull-left media-link" href="#">
                                    <img class="media-object" src="../App-resourcess/assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                    <div class="rating">
                                        <span class="star"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span><!--
                                        --><span class="star active"></span>
                                    </div>
                                    <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                </div>
                            </div>';
}
}
return $data;
}

}