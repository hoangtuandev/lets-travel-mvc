<?php
class Controller {
    public function models($model){
        require_once "./mvc/models/".$model.".php" ;
        return new $model ;
    }

    public function views($view, $data=[]) {
        require_once "./mvc/views/".$view.".php" ;
    
    }

    // GO Travel
    public function view_file_detail($file) {
        require_once "./mvc/views/pages/".$file.".php" ;
    }

    public function view_file_master ($file) {
        require_once "./mvc/views/".$file.".php" ;
    }

    public function get_model($model) {
        require_once "./mvc/models/".$model.".php" ;
        return new $model ;
    }
}
