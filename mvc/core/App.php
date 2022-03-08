<?php
    class App{
        protected $controller = 'Home' ;
        protected $action = '' ;
        protected $params = [] ;

        // Cat theo dau / xuat ra mang
        function urlProcess(){
            if(isset($_GET['url'])){
                // Loai bo ki tu la filter_var(trim()) 
                return explode('/', filter_var(trim($_GET['url'], "/"))) ;
            }
        }

        function __construct(){
            $arrUrl = $this->urlProcess() ;
            
            // Xu li Controller
            if( file_exists("./mvc/controllers/".$arrUrl[0].".php")){
                $this->controller = $arrUrl[0] ;
                unset($arrUrl[0]) ;
            }
            require_once "./mvc/controllers/".$this->controller.".php"  ;
            $this->controller = new $this->controller ;
            // Xu li Action
            if(isset($arrUrl[1])) {
                if(method_exists($this->controller, $arrUrl[1]))
                    $this->action = $arrUrl[1] ;
                unset($arrUrl[1]) ;
            }

            // Xu li Param
            $this->params = $arrUrl?array_values($arrUrl):[] ;

            call_user_func_array([$this->controller, $this->action], $this->params) ;
        }
    }
?>