<?php
class Account extends Database {
    public function SetAccount($Numberphone, $Username, $Password) {
        $sql = "INSERT INTO Account(Numberphone, Username, Password)
                VALUES ('$Numberphone', '$Username', '$Password')" ;
        return mysqli_query($this->connect, $sql) ;
    }
}
?>  