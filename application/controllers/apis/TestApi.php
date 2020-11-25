<?php

require(APPPATH . 'libraries/RestController.php') ;
require(APPPATH . 'libraries/Format.php');

class TestApi extends \chriskacerguis\RestServer\RestController
{

	/**
	 * TestApi constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("products/Product");
		$this->load->library(array("form_validation"),"security");
	}
	public function index_get(){
		$product=$this->Product->getProducts();
		$this->response(array(
			"data"=>$product,
			"message"=>"success",
			"error"=>0
		),\chriskacerguis\RestServer\RestController::HTTP_OK);
	}
	public function index_post(){
		$data=json_decode(file_get_contents("php://input"));
		$id=isset($data->id)?$this->security->xss_clean($data->id):null;
		$name=isset($data->name)?$this->security->xss_clean($data->name):null;
		$price=isset($data->price)?$this->security->xss_clean($data->price):null;
		if($this->Product->insert(array("id"=>$id,"name"=>$name,"price"=>$price))){
			$this->response(array("message"=>"success","error"=>0),200);
		}else{
			$this->response(array("message"=>"error","error"=>1),400);
		}

	}
	public function index_put(){
		$data=json_decode(file_get_contents("php://input"));
		$id=isset($data->id)?$this->security->xss_clean($data->id):null;
		$product=isset($data->product)?array(
			"id"=>$data->product->id,
			"name"=>$data->product->name,
			"price"=>$data->product->price,
		):null;
		if($this->Product->update($id,$product)){
			$this->response(array("message"=>"success","error"=>0),200);
		}else{
			$this->response(array("message"=>"error","error"=>1),400);
		}

	}

	public function index_delete(){
		$data=json_decode(file_get_contents("php://input"));
		$id=isset($data->id)?$this->security->xss_clean($data->id):null;
		if($this->Product->delete($id)){
			$this->response(array("message"=>"success","error"=>0),200);
		}else{
			$this->response(array("message"=>"error","error"=>1),400);
		}
	}
}
