<?php
    // Namespace
    namespace Date;

    // Class
    class Weeknumber {
        // Properties or Attributes //
        private $Week;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Week = date('W');
        }

        // Get Methodes //
        public function get_weeknumber( /* Parameters: */ )
        {
            return 'Week ' . $this->Week;
        }
    }
?>