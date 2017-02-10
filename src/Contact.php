<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone_number;
        private $address;

        function __construct($first_name, $last_name, $phone_number, $address)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->phone_number = $phone_number;
            $this->address = $address;
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

        function setAddress($newAddress)
        {
            $this->address = (string) $newAddress;
        }

        function getAddress()
        {
            return $this->address;
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
