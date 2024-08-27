<?php 
class Account {
    public $number;
    public $balance;

    public function __construct($number, $balance) {
        $this->number = $number;
        $this->balance = $balance;
    }
    function deposit(){
        return false;
    }

    function withdraw(){
        return false;
    }

    function createTransactions(){
        return false;
    }
}
?>