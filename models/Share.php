<?php
class ShareModel extends Model
{
    public function index()
    {
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        print_r($rows);
    }
}