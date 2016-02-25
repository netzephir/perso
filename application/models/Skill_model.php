<?php

class Skill_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->mytable = 'skill';
        $this->model = array
            (
            "id" => "int",
            "id_category" => "int",
            "img" => "int",
            "libelle" => "string",
            "content" => "text",
            "disabled" => "bool"
        );
    }

}