<?php

/*
	Menue Class
	Handles all tasks related to retrieving and displaying categories
*/

class Menue
{
	private $Database;
	private $db_categories = 'categories';
	private $db_sub_categories = 'sub_categories';

	function __construct()
	{
		global $Database;
		$this->Database = $Database;
	}
	
	public function get_all_categories()
	{
		$data = array();
			// get all categories
			if ($result = $this->Database->query("SELECT * FROM " . $this->db_categories . " ORDER BY category_name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[]= array('category_id' => $row['category_id'],
                         'category_name' => $row['category_name'],
                         'menu' => $row['menu_id'],
                         'image'=>$row['image'],
                         'url' => $row['url']);

					}	
				}
			}
	 	// echo'<pre>';
		// 		var_dump($data); 
		// echo'</pre>';
		// die();
		return $data;
	}

	public function get_sub_categories_for_a_category($category_id = NULL){
			$data = array();
			if ($result = $this->Database->query("SELECT sub_category_id, sub_category_name,parent_category_id FROM $this->db_sub_categories WHERE parent_category_id IN ($category_id) ORDER BY sub_category_name"))
			{
				if ($result->num_rows > 0)
				{
					while ($row = $result->fetch_array())
					{
						$data[] = array(
							'sub_category_id' => $row['sub_category_id'],
							'sub_category_name' => $row['sub_category_name'],
							'parent_category_id'=>$row['parent_category_id']
							);
					}
				}
			}

			// echo'<pre>';
			// 		var_dump($data); 
			// echo'</pre>';
			// die();

			return $data;
	}


	public function create_left_rail_navigation($id=NULL){
		$data  = '';
		// get all categories
		$categories = $this->get_all_categories();
		//var_dump($categories); die();

		foreach ($categories as $category) { 
		$sub_categories = $this->get_sub_categories_for_a_category ($category['category_id']);   	
        $data .=                   		'<li>
                               			<span class="arrow"><i class="fa fa-angle-down"></i></span>
                                        <a href="../catalog-foods/?pid='.$category['category_name'].'">'.$category['category_name'].'</a>';                
        
                            }
	return $data;
}

	public function create_sub_category_for_category($id=NULL){
		$data  = '';
		// get all categories
		    	
       
        $sub_categories = $this->get_sub_categories_for_a_category ($id);
        if(!empty($sub_categories)){
        //var_dump($sub_categories); die();
        foreach ($sub_categories as $sub_category){ 
        //var_dump($sub_category['sub_category_name']); die(); 
        $data .=             '<div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="../sub-category/?pid='.$sub_category['parent_category_id'].'">
                                            <img style="width:100px;height:100px;"src="../assets/img/preview/shop/book-sub.jpg" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$sub_category['sub_category_name'].'</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="../sub-category/?pid='.$sub_category['parent_category_id'].'">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
        }  
                                                                                   
      
                            }
	return $data;
}




	public function create_catalog($id=NULL){
		$data  = '';
		// get all categories
		$categories = $this->get_all_categories();
		//var_dump($categories); die();

		foreach ($categories as $category) { 
		$sub_categories = $this->get_sub_categories_for_a_category ($category['category_id']);   	
        $data .= '<div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="../category/?pid='.$category['category_id'].'">
                                            <img style="width:100px;height:100px;"src="../assets/img/preview/shop/'.$category['category_id'].'" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$category['category_name'].'</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="../category/?pid='.$category['category_id'].'">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
        $sub_categories = $this->get_sub_categories_for_a_category ($category['category_id']);
    }
       
        if(!empty($sub_categories)){
            foreach ($sub_categories as $sub_category){ 
            $data.='
                    <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="../sub-category/?id='.$sub_category['parent_category_id'].'">
                                            <img style="width:100px;height:100px;"src="../assets/img/preview/shop/book-sub.jpg" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$sub_category['sub_category_name'].'</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="../sub-category/?id='.$category['category_id'].'">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
                        
    }

}
	return $data;
}



public function create_catalog_item($id=NULL){
        $data  = '';
        // get all categories
        $categories = $this->get_all_categories();
        //var_dump($categories); die();

        foreach ($categories as $category) { 
        $sub_categories = $this->get_sub_categories_for_a_category ($category['category_id']);      
        $data .= '<div class="col-md-4 col-sm-6">
                                <div class="thumbnail border padding">
                                    <div class="media">
                                        <a class="media-link" href="../catalog-foods/?pid='.$category['category_name'].'">
                                            <img style="width:300px;height:100px;"src="../App-resourcess/assets/img/preview/shop/'.$category['image'].'" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i> </strong>
                                    </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title">'.$category['category_name'].'</h4>
                                        
                                        <div class="price">Descriptions</div>
                                        <div class="buttons">
                                          
                                    <a style="background-color:red;" class="btn btn-theme btn-theme-transparent btn-icon-left" href="../catalog-foods/?pid='.$category['category_name'].'">VIEW</a>
                                    </div>
                                    </div>
                                </div>
                            </div>';
        $sub_categories = $this->get_sub_categories_for_a_category ($category['category_id']);
    }
       
    
    return $data;
}
}