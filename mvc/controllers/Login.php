<?php
class Login extends Controller {
    public function Login () {
        $this->view_file_master("Header") ;
        $this->view_file_detail("Login") ;
        $this->view_file_master("Footer") ;
    }
}
?>