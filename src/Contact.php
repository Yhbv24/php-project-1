<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone_number;
        private $street;
        private $city;
        private $state;
        private $zip;

        function __construct($first_name, $last_name, $phone_number, $street, $city, $state, $zip)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone_number = $phone_number;
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->zip = $zip;
        }

        function setFirstName($newFirstName)
        {
            $this->first_name = (string) $newFirstName;
        }

        function setLastName($newLastName)
        {
            $this->last_name = (string) $newLastName;
        }

        function getFullName()
        {
            return $this->first_name . " " . $this->last_name;
        }

        function setPhoneNumber($newPhoneNumber)
        {
            $this->phone_number = (string) $newPhoneNumber;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function setStreet($newStreet)
        {
            $this->street = (string) $newStreet;
        }

        function getStreet()
        {
            return $this->street;
        }

        function setCity($newCity)
        {
            $this->city = (string) $newCity;
        }

        function getCity()
        {
            return $this->city;
        }

        function setState($newState)
        {
            $this->state = (string) $newState;
        }

        function getState()
        {
            return $this->state;
        }

        function setZip($newZip)
        {
            $this->zip = (integer) $newZip;
        }

        function getZip()
        {
            return $this->zip;
        }

        function saveContact()
        {
            array_push($_SESSION["list_of_contacts"], $this);
        }

        static function showAll()
        {
            return $_SESSION["list_of_contacts"];
        }

        static function deleteAll()
        {
            $_SESSION["list_of_contacts"] = array();
        }
    }
?>
