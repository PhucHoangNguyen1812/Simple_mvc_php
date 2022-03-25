<?php
class Controller {
    public function model($model) {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    } 
    public function view ($view,$data=[]) {
        require_once "./mvc/views/".$view.".php";
    }

    public function sendOutput($data, $httpHeaders=array()) {
        header_remove('Set-Cookie');
        // if (is_array($httpHeaders) && count($httpHeaders)) {
        //     foreach ($httpHeaders as $httpHeader) {
        //         header($httpHeader);
        //     }
        // }
        return $data;

    }
}
?>