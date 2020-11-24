<?php


class ProductController extends CI_Controller
{

	/**
	 * ProductController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('products/Product');
	}
	public function index(){
		echo "This is Index";
	}
	public function getProducts(){
		$productList=$this->Product->getProducts();
		$data['products']=$productList;
		$this->load->view("products/products",$data);
	}
	public function create($value){
		echo "Create value is".$value;
	}
	public function update($value){
		echo "Update value is".$value;
	}
	public function delete($value){
		echo "Delete value is".$value;
	}
}
