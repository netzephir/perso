<?php

class Project_model extends Main_model
{

    public function __construct()
    {
        parent::__construct();
        $this->mytable = 'project';
        $this->model = array
            (
            "id" => "int",
            "id_category" => "int",
            "img" => "int",
            "libelle" => "string",
            "content" => "text",
            "disabled" => "bool",
            "start" => "date",
            "end" => "date",
            "source" => "string",
            "demo" => "string",
        );
    }

}
