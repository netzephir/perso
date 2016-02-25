<?php

class User_model extends CI_Model {
    public $id;
    public $login;
    public $password;
    public $level;
    public $disabled;
    public function __construct() {
        parent::__construct();
    }
    
}
