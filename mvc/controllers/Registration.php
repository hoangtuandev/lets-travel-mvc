<?php
GLOBAL $username ;
GLOBAL $numberphone ;
GLOBAL $password ;
if (isset($_POST['username']))
    $username = $_POST['username'];
if (isset($_POST['numberphone']))
    $numberphone = $_POST['numberphone'];
if (isset($_POST['password']))
    $password = $_POST['password'];


class Registration extends Controller
{
    public function Registration()
    {
        $this->view_file_master("Header");
        $this->view_file_detail("Registration");
        $this->view_file_master("Footer");
    }

    public function CreateAccount($numberphone, $username, $password)
    {
        $con = $this->get_model("Account");
        $account = $con->SetAccount($numberphone, $username, $password) ;
        return $account ;
    }
}
