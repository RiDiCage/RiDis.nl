<?php
    // Namespace
    namespace Date;

    // Class
    class Daypart {
        // Properties or Attributes //
        private $Time;
        private $Morning;
        private $Noon;
        private $Evening;
        private $Midnight;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Time = date('H:i:s.u');
            $this->Morning = date('06:00:00.000000');
            $this->Noon = date('12:00:00.000000');
            $this->Evening = date('18:00:00.000000');
            $this->Midnight = date('23:59:59.000000');
        }

        // Get Methodes //
        public function get_daypart( /* Parameters: */ )
        {
            switch(true) {
                case $this->Time >= $this->Morning && $this->Time < $this->Noon:
                    return 'morgen';
                    break;
                case $this->Time >= $this->Noon && $this->Time < $this->Evening:
                    return 'middag';
                    break;
                case $this->Time >= $this->Evening && $this->Time < $this->Midnight:
                    return 'avond';
                    break;
                default:
                    return 'nacht';
            }
        }
    }
?>