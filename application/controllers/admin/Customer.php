<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model("Customer_model");
  }//_construct ditulis atau tidak, sunah. tidak memberikan efek. tetap munculnya pertama(spesial)

	public function index()
	{
    // $data["products"] = $this->product_model->getAll();
      $data["customer"] = $this->Customer_model->getAll();
  var_dump($data["customer"]);
	}
}
