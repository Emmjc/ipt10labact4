<?php
/**
 * This class is intenionally written as incomplete, students should be able to provide the missing properties and methods to this class
 */
class Profile
{
    protected $first_name;
    protected $middle_name;
    protected $last_name;
    protected $email;
    protected $contact_number;
    protected $address;
    protected $quote;

    public function __construct ($last_name,$first_name,$middle_name){
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
    }
    public function getCompleteName($format = '{last}, {first} {middle}')
    {
        $full_name = $format;
        $full_name = str_replace('{last}', $this->getLastName(), $full_name);
        $full_name = str_replace('{first}', $this->getFirstName(), $full_name);
        $full_name = str_replace('{middle}', $this->getMiddleName(), $full_name);
        
        return $full_name;
    }

    protected function getLastName()
    {
        return $this->last_name;
    }

    public function setFavoriteQuote($quote)
    {
        $this->quote = $quote;
    }

    public function getEmail (){
        return $this->email;
    }

    public function setAddress ($address){
        $this->address = $address;
    }

    public function getAddress (){
        return $this->address;
    }

    public function setEmail ($email){
        $this->email = $email;
    }

    public function getFavoriteQuote(){
        return $this->quote;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function getMiddleName(){
        return $this->middle_name;
    }

}