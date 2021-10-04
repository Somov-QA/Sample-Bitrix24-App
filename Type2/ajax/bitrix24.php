<?php

class Bitrix24 {
    
    public static function query($method, $params){
        $_REQUEST['DOMAIN'] = 'somov-i-ua.bitrix24.ru';
	    $_REQUEST['AUTH_ID'] = 'e3b15561005774c400563d4c00000001000003238830ea116e91898b2ec70f0b8f1cd9';

        #$method = 'crm.contact.list';
        #$method = 'tasks.task.list';
        #$params = [];

        $queryUrl = 'https://'.$_REQUEST['DOMAIN'].'/rest/'.$method.'.json';
        $queryData = http_build_query(array_merge($params, array("auth" => $_REQUEST['AUTH_ID'])));
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData
        ));

        $result = json_decode(curl_exec($curl), true);
        curl_close($curl);

        echo '<pre>'.print_r($result, true).'</pre>';
    }
}