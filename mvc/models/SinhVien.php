<?php
class SinhVien extends DB{
    public function GetSV() {
        return "Pham Hoang Tuan" ;
    }
    
    public function tong($a, $b){
        
    }

    public function dsSinhVien() {
        $sql = "SELECT * FROM SinhVien" ;
        return mysqli_query($this->connect, $sql) ;
    }
}
