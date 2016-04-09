<?php 

Class Random
{

	function __construct() {}

	
	public function generate_random_number($seed){
		//$data=mt_rand(1000000000, 9999999999);
		
		mt_srand($seed);
		$data = mt_rand(00000001, 99999999);

		/*
			the above function handles seed and lenght both
		*/
		// handle duplicate report number
        $concat="";
        $iterate= 8-strlen($data);
        for($i=0;$i<$iterate;$i++){
            
            $concat.="0";
        }
		return $concat.$data;
	}

	public function seed_Bonus(){
	    $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);;
        $seeder= str_replace(".","",$ip);
		list($usec, $sec) = explode(' ', microtime());
  		return (float) $sec + ((float) $usec * 100000*((int)$seeder)+200000);
	}



}
