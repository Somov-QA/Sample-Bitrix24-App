<?php
error_reporting(0);

/* Класс для работы с базой данных ======================================================= */
class DB {

    public static $Server = "localhost";
    public static $DataBase = "somov";
    public static $UserName = 'root';
    public static $UserPass = '';

    public static function getData($query) {
        $mysqli = mysqli_connect(DB::$Server, DB::$UserName, DB::$UserPass, DB::$DataBase);
        if (mysqli_connect_errno()) {
            echo 'error_getData ';
            #print_r(mysqli_connect_error());
            return null;
        }
        mysqli_query($mysqli, "SET NAMES 'UTF8'");

        $result = mysqli_query($mysqli, $query);
        mysqli_close($mysqli);

        return $result;
    }

    public static function setData($query) {
        $mysqli = mysqli_connect(DB::$Server, DB::$UserName, DB::$UserPass, DB::$DataBase);
        if (mysqli_connect_errno()) {
            echo 'error_setData ';
            #print_r(mysqli_connect_error());
            return false;
        }
        mysqli_query($mysqli, "SET NAMES 'UTF8'");

        if (!$mysqli->query($query)) {
            echo 'error_setData_query ';
            #print_r($mysqli->error);
            return false;
        }
        return true;
    }

    public static function getRow($dataTable) {
        mysqli_data_seek($dataTable, 0);
        $row = mysqli_fetch_assoc($dataTable);
        return $row;
    }

    public static function getDataArrayKeyValue($query, $key_name, $value_name) {
        $dataTable = self::getData($query);
        $data = [];
        while ($row = mysqli_fetch_assoc($dataTable)) {
            $data[$row[$key_name]] = [
                'key' => $row[$key_name],
                'value' => $row[$value_name]
            ];
        } 
        return $data;
    }
}

/* Раздел выполнения запросов ======================================================== */

$event = $_POST["event"]; 

if($event === 'select'){
    

}elseif($event === 'insert'){
    

}elseif($event === 'update'){
    

}elseif($event === 'delete'){
    

}