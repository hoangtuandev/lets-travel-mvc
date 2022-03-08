<?php
class Contact extends Controller {
    public function Contact () {
        $this->view_file_master("Header") ;
        $this->view_file_detail("Contact") ;
        $this->view_file_master("Footer") ;
    }
}

?>