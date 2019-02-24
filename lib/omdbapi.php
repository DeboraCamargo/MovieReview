<?php
/**
 * Created by PhpStorm.
 * User: debby
 * Date: 2019-02-23
 * Time: 9:37 AM
 */

class OMDb {

    private $baseurl = "http://www.omdbapi.com/?";
    private $params = array(
        'apikey' => 'b0d5ec5f',
        't'	     => 'Resident Evil',
    );

    function __construct(){}

    function getUrl() {
        return $this->baseurl . http_build_query($this->params);
    }

    function getData() {
        return $this->fetchJSON($this->getUrl());
    }

    function fetchJSON($apiUrl){
        $ch = curl_init($apiUrl);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $json = curl_exec($ch);
        $curl_errno = curl_errno($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);

        // Errors?
        if ($curl_errno > 0){
            return null;
        }
        else{
            return  json_decode($json);
        }
    }
}

?>