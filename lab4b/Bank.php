<?php
class Bank {
    public $code;
    public $address;

    public function __construct($code, $address) {
        $this->code = $code;
        $this->address = $address;
    }

    function manages(){
        return false;
    }

    function maintains(){
        return false;
    }
}
?>