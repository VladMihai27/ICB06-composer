<?php

include 'exerciseData.php';

class ApiData{

    function getAll(){
        $data = new excerciseData();
        $datas = array();
        $datas['register'] = array();

        $result = $data->getData();

        if ($result->rowCount()) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $register = array(
                    'date' => $row['date'],
                    'company' => $row['company'],
                    'qty' => $row['qty']
                );

                array_push($datas['register'], $register);               
            }
            http_response_code(200);
            echo json_encode($datas);
            
        }else{
            http_response_encote(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }

    function getByCompany(){
        $data = new excerciseData();
        $company = $_GET['company'];
        $result = $data->getBy($company);

        $datas = array();
        $datas['byCompany'] = array();

        if ($result->rowCount()) {
            while($row = $result->fetch()){
                $byCompany = array(
                    'date' => $row['date'],
                    'company' => $row['company'],
                    'qty' => $row['qty']
                );
                array_push($datas['byCompany'], $byCompany);
            }
            http_response_code(200);
            echo json_encode($datas);
        }else{
            http_response_code(404);
            echo json_encode(array('error' => 'Data not found'));
        }
    }

    function getByDate(){
        $data = new excerciseData();
        $date = $_GET['date'];
        $date = date('Y-m-d', strtotime($date));
        $result = $data->getBy($date);

        $datas = array();
        $datas['byDate'] = array();

        if ($result->rowCount()) {
            while($row = $result->fetch()){
                $byDate = array(
                    'date' => $row['date'],
                    'company' => $row['company'],
                    'qty' => $row['qty']
                );
                array_push($datas['byDate'], $byDate);
            }
            http_response_code(200);
            echo json_encode($datas);
        }else{
            http_response_code(404);
            echo json_encode(array('error' => 'Data not found'));
        }
    }
}

$api = new ApiData();
$api -> getAll();
$api -> getByCompany();
$api -> getByDate();

?>