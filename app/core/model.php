<?php

class Model extends Database
{
    // protected $table = "";

    public function insert(array $data)
    {
        //remove unwanted columns

        if (!empty($this->allowedColumns)) {

            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }
        // show($data);
        $keys = array_keys($data);
        // $values = array_values($data);
        $query = "INSERT INTO " . $this->table;
        $query .= " (" . implode(",", $keys) . ") values (:" . implode(",:", $keys) . ")";
        // show($query);
        // show($data);

        $this->query($query, $data);
    }

    public function where(array $data)
    {
        //remove unwanted columns
        $keys = array_keys($data);
        $query = "SELECT * FROM " . $this->table . " WHERE ";
        foreach ($keys as $key) {
            $query .= $key . "=:" . $key . " && ";
        }
        $query = trim($query, "&& ");

        $result = $this->query($query, $data);

        if (is_array($result)) {
            return $result;
        }
        return false;
    }
    public function first(array $data)
    {
        //remove unwanted columns
        $keys = array_keys($data);
        $query = "SELECT * FROM " . $this->table . " WHERE ";
        foreach ($keys as $key) {
            $query .= $key . "=:" . $key . " && ";
        }
        $query = trim($query, "&& ");
        $query .= " ORDER BY id DESC LIMIT 1";

        $result = $this->query($query, $data);

        if (is_array($result)) {
            return $result[0];
        }
        return false;
    }
}