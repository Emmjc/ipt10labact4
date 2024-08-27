<?php 

class ATM {
    public $location;
    public $managedby; 

    public function __construct($location, $managedby) {
        $this->location = $location;
        $this->manageby = $managedby;
    }
    function identifies(){
        return false;
    }

    function transactions(){
        return false;
    }
}

?>