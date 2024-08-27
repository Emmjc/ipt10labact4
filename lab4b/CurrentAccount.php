<?php
class CurrentAccount extends Account {
    public $accountno;
    public $balance;
    public function __construct($accountno, $balance) {
        $this->accountno = $accountno;
        $this->balance = $balance;
    }
    public function withdraw(){
        return false;
    }
}

?>