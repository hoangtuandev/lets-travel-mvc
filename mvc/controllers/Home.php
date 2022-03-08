<?php
class Home extends Controller{
    public function Home() {
        $this->view_file_master(("Header")) ;
        $this->view_file_detail("Home");
        $this->view_file_master("Footer") ;
    }   
}
?>