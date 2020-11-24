<?php


class Product extends CI_Model
{

	public function __construct(){}


	public function getProducts()
	{
		$products = $this->db->query('select * from product');
		if($products->num_rows()>0){
			return $products->result_array();
		}else{
			return null;
		}

	}



}
