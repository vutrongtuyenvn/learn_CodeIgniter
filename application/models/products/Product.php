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
	public function insert($data = array()){
		return $this->db->insert("product",$data);
	}
	public function update($id,$data = array()){
		$this->db->where("id",$id);
		return $this->db->update("product",$data);
	}
	public function delete($id){
		$this->db->where("id",$id);
		return $this->db->delete("product");
	}



}
