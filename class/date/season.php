<?php
    // Namespace
    namespace Date;

    // Class
    class Season {
        // Properties or Attributes //
        private $Today;
        private $Spring;
        private $Summer;
        private $Autumn;
        private $Winter;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Today = date('Y-m-d h:i:s.u');
            $this->Spring = date('Y-03-21 00:00:00.000000');
            $this->Summer = date('Y-06-21 00:00:00.000000');
            $this->Autumn = date('Y-09-21 00:00:00.000000');
            $this->Winter = date('Y-12-21 00:00:00.000000');
        }

        // Get Methodes //
        public function get_season( /* Parameters: */ )
        {
            switch(true) {
                case $this->Today >= $this->Spring && $this->Today < $this->Summer:
                    return 'Lente';
                    break;
                case $this->Today >= $this->Summer && $this->Today < $this->Autumn:
                    return 'Zomer';
                    break;
                case $this->Today >= $this->Autumn && $this->Today < $this->Winters:
                    return 'Herfst';
                    break;
                default:
                    return 'Winter';
            }
        }
    }
?>