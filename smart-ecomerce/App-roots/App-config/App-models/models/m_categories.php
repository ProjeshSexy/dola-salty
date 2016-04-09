<?php

/*
	Categories Class
	Handles all tasks related to retrieving and displaying categories
*/

class Categories
{
	private $Database;
	private $db_table = 'categories';

	function __construct()
	{
		global $Database;
		$this->Database = $Database;
	}
	
	/*
		Setting/Getting categories from database
	*/
	
	/**
	 * Return an array with category information
	 *
	 * @access	public
	 * @param	int (optional)
	 * @return	array
	 */
	public function get_categories($id = NULL)
	{
		$data = array();
		if ($id != NULL)
		{
			// get specific category
			if ($stmt = $this->Database->prepare("SELECT id, name FROM " . $this->db_table . " WHERE id = ? LIMIT 1"))
			{
				$stmt->bind_param("i", $id);
				$stmt->execute();
				$stmt->store_result();
				
				$stmt->bind_result($cat_id, $cat_name);
				$stmt->fetch();
				
				if ($stmt->num_rows > 0)
				{
					$data = array('id' => $cat_id, 'name' => $cat_name);
				}
				$stmt->close();
			}
		}
		else 
		{
			// get all categories
			if ($result = $this->Database->query("SELECT * FROM " . $this->db_table . " ORDER BY category_name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[] = array('category_id' => $row['category_id'], 'category_name' => $row['category_name']);
					}	
				}
			}
		}
		return $data;
	}


	/*
		Create page parts
	*/

	/**
	 * Returns an unordered list of links to all category pages
	 *
	 * @access	public
	 * @param	string (optional)
	 * @return	string
	 */
	public function create_category_nav($active = NULL)
	{
		// get all categories
		$categories = $this->get_categories();
		//var_dump($categories);die();
		
		// set up 'all' item
		$data = '<li';
		if ($active == strtolower('home')) 
		{
			$data .= ' class="active"';
		}
		$data .= '><a href="' . SITE_PATH . '">View All</a></li>';
		
		// loop through each category
		if ( ! empty($categories))
		{
			foreach($categories as $category)
			{
				$data .= '<li';
				if (strtolower($active) == strtolower($category['category_name']))
				{
					$data .= ' class="active"';
				}
				$data .= '><a href="' . SITE_PATH . 'index.php?id=' . $category['category_id'] . '">' . $category['category_name'] . '</a></li>';
			}
		}
		
		return $data;
	}
	
}