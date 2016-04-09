<?php

/*
	Products Class
	Handles all tasks related to retrieving and displaying products
*/

class Products
{
	private $Database;
	private $db_table = 'products';
	
	function __construct()
	{
		global $Database;
		$this->Database = $Database;
	}
	
	/*
		Getters / Setters
	*/
	
	/**
	 * Retrieve product information from database
	 *
	 * @access	public
	 * @param	int (optional)
	 * @return	array
	 */
	public function get($id = NULL)
	{
		$data = array();
		
		if (is_array($id))
		{
			// get products based on array of ids
			$items = '';
			foreach ($id as $item)
			{
				if ($items != '') 
				{ 
					$items .= ','; 
				}
				$items .= $item;
			}
			
			if ($result = $this->Database->query("SELECT id, name, description, price, image FROM $this->db_table WHERE id IN ($items) ORDER BY name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[] = array(
							'id' => $row['id'],
							'name' => $row['name'],
							'description' => $row['description'],
							'price' => $row['price'],
							'image' => $row['image'],
							'quantity' => $_SESSION['cart'][ $row['id'] ]
							);
					}
				}
			}
		}
		else if ($id != NULL)
		{
			// get one specific product
			if ($stmt = $this->Database->prepare("SELECT
				$this->db_table.id,
				$this->db_table.name,
				$this->db_table.description,
				$this->db_table.price,
				$this->db_table.image,
				categories.name AS category_name
				FROM $this->db_table, categories
				WHERE $this->db_table.id = ? AND $this->db_table.category_id = categories.id"))
			{
				$stmt->bind_param("i", $id);
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($prod_id, $prod_name, $prod_description, $prod_price, $prod_image, $cat_name);
				$stmt->fetch();
				
				if ($stmt->num_rows > 0)
				{
					$data = array('id' => $prod_id, 'name' => $prod_name, 'description' => $prod_description, 'price' => $prod_price, 'image' => $prod_image, 'category_name' => $cat_name);
				}			
				$stmt->close();
			}
		}
		else 
		{
			// get all products
			if ($result = $this->Database->query("SELECT * FROM " . $this->db_table . " ORDER BY name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[] = array(
							'id' => $row['id'],
							'name' => $row['name'],
							'price' => $row['price'],
							'image' => $row['image']
						);
					}
				}
			}
		}
		return $data;
	}
	
	/**
	 * Retrieve product information for all products in specific category
	 *
	 * @access	public
	 * @param	int
	 * @return	string
	 */
	public function get_in_category($id=NULL)
	{
		$data = array();
		if ($stmt = $this->Database->prepare("SELECT product_id,product_name, image FROM " . $this->db_table . " WHERE category_id = ? ORDER BY product_name"))
		{
			$stmt->bind_param("s", $id);
			$stmt->execute();
			$stmt->store_result();
			
			$stmt->bind_result($prod_id, $prod_name, $prod_image);
			while ($stmt->fetch())
			{
				$data[] = array(
					'id' => $prod_id,
					'name' => $prod_name,
					//'bar_or_isbn_code'=>$bar,
					'image' => $prod_image);
			}
			$stmt->close();
		}
		return $data;
	}	
	
	/**
	 * Return an array of price info for specified ids
	 *
	 * @access	public
	 * @param	array
	 * @return	array
	 */
	public function get_prices($ids)
	{
		$data = '';
		
		// create comma separated list of ids
		$items = '';
		foreach($ids as $id)
		{
			if ($items != '') 
			{
				$items .= ',';
			}
			$items .= $id;
		}
		
		// get multiple product info based on list of ids
		if ($result = $this->Database->query("SELECT id, price FROM $this->db_table WHERE id IN ($items) ORDER BY name"))
		{
			if ($result->num_rows > 0)
			{
				while ($row = $result->fetch_array())
				{
					$data[] = array(
						'id' => $row['id'],
						'price' => $row['price']
						);
				}
			}
		}
		return $data;
	}
	
	/**
	 * Checks to ensure that product exists
	 *
	 * @access	public
	 * @param	int
	 * @return	bool
	 */
	public function product_exists($id)
	{
		if ($stmt = $this->Database->prepare("SELECT id FROM $this->db_table WHERE id = ?"))
		{
			$stmt->bind_param('i', $id);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id);
			$stmt->fetch();
			
			if ($stmt->num_rows > 0)
			{
				$stmt->close();
				return TRUE;
			}
			$stmt->close();
			return FALSE;
		}
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
	


	public function create_item_for_sub( $id = NULL)
	{
		// get products
		//var_dump($id);die;
		if ($id != NULL)
		{
			$products = $this->get_in_category($id);
		}
		else
		{
			$products = $this->get();
		}
		
		$data = '';
		
		// loop through each product
		if ( ! empty($products))
		{
			$i = 1;
			foreach ($products as $item)
			{
				
            $data .= '<div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="">
                                            <img style="width:400px;height:300px;"src="../App-resourcess/assets/img/preview/shop/'.$item['image'].'" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$item['name'].'</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a style="background-color:red;" class="btn btn-theme btn-theme-transparent btn-icon-left" href="../product-details/?book-name='.$item['name'].'"">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
			}
		}else{
			return $data.='<div class="col-md-9 col-sm-6"><div class="caption text-center"><h1>No food available</></div></div>';
		}
		return $data;
	}

	
	
}