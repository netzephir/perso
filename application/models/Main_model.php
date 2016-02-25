<?php

class Main_model extends CI_Model
{

    protected $mytable;
    protected $model;

    public function __construct()
    {
        parent::__construct();
    }

    public function get(int $id = null, int $limit = null, array $where = null)
    {
        if ($id != null)
        {
            $this->db->where('id', $id);
        }
        if (!empty($where))
        {
            foreach ($where as $cond)
            {
                $query = $this->db->where($cond['field'] . ' ' . $cond['operator'], $cond['value']);
            }
        }
        if ($limit != null)
        {
            $query = $this->db->get($this->mytable, 10);
        }
        else
        {
            $query = $this->db->get($this->mytable, 10);
        }
        return $query->result_array();
    }

    public function create(array $data)
    {
        if (!is_array($data) || empty($data))
        {
            return false;
        }
        return $this->db->insert($this->mytable, $data);
    }

    public function update(int $id, array $data)
    {
        $id = (int) $id;
        if (!is_array($data) || empty($data))
        {
            return false;
        }
        $this->db->where('id', $id);
        return $this->db->update($this->mytable, $data);
    }

    public function delete(int $id)
    {
        $id = (int) $id;
        $this->db->where('id', $id);
        return $this->db->delete($this->mytable);
    }

    protected function secureValue($value)
    {
        $value = $this->checkValueType($value);
        $value = $this->applySecurityFunction($value);
        return $value;
    }

    protected function checkValueType($value)
    {

        return $value;
    }

    protected function applySecurityFunction($value)
    {

        return $value;
    }

}