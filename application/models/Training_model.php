<?php

class Training_model extends Main_model
{
    public function __construct()
    {
        parent::__construct();
        $this->mytable = 'training';
        $this->model = array
            (
                "id" => "int",
                "libelle" => "string",
                "start" => "date",
                "end" => "date",
                "location" => "string",
            );
    }

}