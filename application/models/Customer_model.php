<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    private $_table = "customer";

    public $customer_id;
    public $name;
    public $addres;



    public function getAll()// untuk mengambil select on from
    {
        return $this->db->get($this->_table)->result();
    }

}
