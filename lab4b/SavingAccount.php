<?php
class SavingAccount extends Account {
    public $accountno;
    public $balance;

    public function __construct($accountno, $balance) {
        $this->accountno = $accountno;
        $this->balance = $balance;
    }
}

?>
