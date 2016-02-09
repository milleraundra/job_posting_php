<?php
    class Contact
    {
        private $name;
        private $email;
        private $phone_numba;

        function __construct($poster_name, $poster_email, $poster_numba)
        {
            $this->name = $poster_name;
            $this->email = $poster_email;
            $this->phone_numba = $poster_numba;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setEmail($new_email)
        {
            $this->email = $new_email;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setPhoneNumba($new_phone_numba)
        {
            $this->phone_numba = $new_phone_numba;
        }

        function getPhoneNumba()
        {
            return $this->phone_numba;
        }

    }



 ?>
