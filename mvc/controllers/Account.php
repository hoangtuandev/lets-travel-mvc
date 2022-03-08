<?php
class Account extends Controller{
    public function Home() {
        $this->view_file_master("Header") ;
        $this->view_file_detail("Account") ;
        $this->view_file_master("Footer") ;
    }
}
?>