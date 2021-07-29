<?php
    // Namespace
    namespace Date;

    // Class
    class Clock {
        // Properties or Attributes //
        private $Clock;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Clock = "<span id='klok'>".date('H:i:s')."</span>";
        }

        // Get Methodes //
        public function get_clock( /* Parameters: */ )
        {
            return $this->Clock;
        }
    }
?>