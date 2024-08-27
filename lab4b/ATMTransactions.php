<?php 
class ATMTransactions{
    public $transactionid;
    public $date;
    public $type;
    public $amount;
    public $postbalance;

    public function __construct($transactionid, $date, $type, $amount, $postbalance){
        $this->transactionid = $transactionid;
        $this->date = $date;
        $this->type = $type;
        $this->amount = $amount;
        $this->postbalance = $postbalance;
    }
}
    function modifies (){
        return false;
    }
?>