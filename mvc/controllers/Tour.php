<?php
class Tour extends Controller {
    public function National() {
        $this->view_file_master("Header") ;
        $this->views("Tour", ["page"=>"National"]) ;
        $this->view_file_master("Footer") ;
    }

    public function International () {
        $this->view_file_master("Header") ;
        $this->views("Tour", ["page"=>"International"]) ;
        $this->view_file_master("Footer") ;
    }

    public function Discount() {
        $this->view_file_master("Header") ;
        $this->views("Tour", ["page"=>"Discount"]) ;
        $this->view_file_master("Footer") ;
    }

    public function Favorite() {
        $this->view_file_master("Header") ;
        $this->views("Tour", ["page"=>"Favorite"]) ;
        $this->view_file_master("Footer") ;
    }
}
