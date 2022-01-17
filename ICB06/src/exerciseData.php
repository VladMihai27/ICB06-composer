<?php

include 'dbConn.php';

class excerciseData extends dbConn{
    function getData(){
        $result = $this -> connect()->query('SELECT * FROM orders');
        return $result;
        $this->disconnect();
    }

    public function getBy($company){
        $sql = "SELECT * FROM orders WHERE company = '".$company."';";
        $result = $this->connect()->query($sql);
        return $result;
        $this->disconnect();
    }

    public function getByDate($date){
        $date = $date;
        $date = date('Y-m-d', strtotime($date));
        $sql = "SELECT * FROM orders WHERE date < ".$date.";";
        $result = $this->connect()->query($sql);
        return $result;
        $this->disconnect();
    }
}



?>