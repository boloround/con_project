<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address;

        function __construct($name, $phone, $address)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setAddress($new_address)
        {
            $this->address = (string) $new_address;
        }

        function getAddress()
        {
            return $this->address;
        }
//Adds each new contact entry to the SESSION array list_of_contacts
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }
//Static because it returns all objects of the class
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        //Deletes all the entries in the list by re-setting the SESSION array to an empty array
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
 ?>
