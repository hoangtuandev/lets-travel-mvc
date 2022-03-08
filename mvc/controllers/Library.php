<?php
class Library extends Controller {
    public function Library() {
        $this->view_file_master("Header") ;
        $this->view_file_detail("Library") ;
        $this->view_file_master("Footer") ;
    }
}
?>  