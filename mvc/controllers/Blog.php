<?php
class Blog extends Controller {
    public function Blog() {
        $this->view_file_master("Header") ;
        $this->view_file_detail("Blog") ;
        $this->view_file_master("Footer") ;
    }
}
?>