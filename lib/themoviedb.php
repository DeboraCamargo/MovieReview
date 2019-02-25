<?php
/**
 * Created by PhpStorm.
 * User: debby
 * Date: 2019-02-23
 * Time: 9:37 AM
 */

class TheMovieDB {

    private $baseurl = "https://api.themoviedb.org/3";
    private $basePostarUrl= "https://image.tmdb.org/t/p/w185_and_h278_bestv2";
    private $params = array(
        'api_key' => '91b94ee5558da55a0c2a936526d4b553',
    );
    function __construct(){}

    function getUrl($route, $extra_params = null) {
        $urlParam = $this->params;
        if ($extra_params != null) {
            $urlParam = array_merge($urlParam, $extra_params);
        }

        return $this->baseurl . $route ."?". http_build_query($urlParam);
    }

    function getMovie($name) {
        return $this->fetchJSON($this->getUrl("/search/movie", array('query' => $name)))->{"results"};
    }
    function getPosterUrl($poster_path) {
        return $this->basePostarUrl . $poster_path;
    }

    function getMovieById($id){
        return $this->fetchJSON($this->getUrl("/movie/".$id));
    }

    function findMovieByIMDBId($id){
        return $this->fetchJSON($this->getUrl("/find/".$id,  array('external_source' =>'imdb_id')))->{"movie_results"}[0];
    }

    function fetchJSON($apiUrl){
        $ch = curl_init($apiUrl);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $json = curl_exec($ch);
        $curl_errno = curl_errno($ch);
        //$curl_error = curl_error($ch);
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