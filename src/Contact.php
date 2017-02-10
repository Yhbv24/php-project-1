<?php
    class Contact
    {
        private $first_name;
        private $last_name;
        private $phone_number;
        private $address;

        function __construct()
        {
            $this->first_name = $first_name;
            $thss->last_name = $last_name;
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
            $this->phone_number = $newPhoneNumber;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function setAddress($newAddress)
        {
            $this->address = $newAddress;
        }

        function getAddress()
        {
            return $this->address;
        }
    }
?>
