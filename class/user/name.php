<?php
    // Namespace
    namespace User;

    // Class
    class Name {
        // Properties or Attributes //
        private $Fullname;
        private $Firstname;
        private $Middlename;
        private $Familyname;

        // Constructor //
        public function __construct( /* Parameters: */ string $firstname, string $middlename, string $familyname)
        {
            $this->Fullname = $firstname . ' ' . $middlename . ' ' . $familyname;
            $this->Firstname = $firstname;
            $this->Middlename = $middlename;
            $this->Familyname = $familyname;
        }

        // Get Methodes //
        public function get_fullname( /* Parameters: */ )
        {
            return $this->Fullname;
        }

        // Get Methodes //
        public function get_firstname( /* Parameters: */ )
        {
            return $this->Firstname;
        }

        // Get Methodes //
        public function get_middlename( /* Parameters: */ )
        {
            return $this->Middlename;
        }

        // Get Methodes //
        public function get_familyname( /* Parameters: */ )
        {
            return $this->Familyname;
        }
    }
?>