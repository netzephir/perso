<?php

class Information_model extends Main_model
{
    public function __construct()
    {
        parent::__construct();
        $this->mytable = 'training';
        $this->model = array
            (
                "id" => "int",
                "img" => "int",
                "firstname" => "string",
                "lastname" => "string",
                "mail" => "string",
                "phonenumber" => "string",
                "adress1" => "string",
                "adress2" => "string",
                "birthdate" => "date",
                "resume" => "text",
                "title" => "string",
                "driver_license" => "bool",
            );
    }

}