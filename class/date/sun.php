<?php
    // Namespace
    namespace Date;

    // Class
    class Sun {
        // Properties or Attributes //
        private $Longitude;
        private $Latitude;
        private $Time;
        private $Stand;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Longitude = '52.1589302';
            $this->Latitude = '5.3077835';
            $this->Time = time();
            $this->Stand = 'light';
        }

        // Get Methodes //
        public function set_nightmode( /* Parameters: */ bool $stand)
        {
            if ($stand == true)
            {
                $this->Stand = 'donker';
                return $this->Stand;
            }
            else
            {
                $this->Stand = 'light';
                return $this->Stand;
            }
        }

        // Get Methodes //
        public function get_long( /* Parameters: */ )
        {
            return $this->Longitude;
        }

        // Get Methodes //
        public function get_lat( /* Parameters: */ )
        {
            return $this->Latitude;
        }

        // Get Methodes //
        public function get_stand( /* Parameters: */ )
        {
            return $this->Stand;
        }

        // Get Methodes //
        public function get_sunrise( /* Parameters: */ )
        {
            $opkomst = date_sunrise($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 90, 2);
            $ondergang = date_sunset($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 90, 2);

            switch(true) {
                case $this->Time >= $opkomst && $this->Time < $ondergang:
                    return $this->Stand = 'licht';
                    break;
                default:
                    return $this->Stand = 'donker';
            }
        }

        // Get Methodes //
        public function get_civil_twilight( /* Parameters: */ )
        {
            $opkomst = date_sunrise($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 96, 2);
            $ondergang = date_sunset($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 96, 2);

            switch(true) {
                case $this->Time >= $opkomst && $this->Time < $ondergang:
                    return $this->Stand = 'licht';
                    break;
                default:
                    return $this->Stand = 'donker';
            }
        }

        // Get Methodes //
        public function get_nautical_twilight( /* Parameters: */ )
        {
            $opkomst = date_sunrise($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 102, 2);
            $ondergang = date_sunset($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 102, 2);

            switch(true) {
                case $this->Time >= $opkomst && $this->Time < $ondergang:
                    return $this->Stand = 'licht';
                    break;
                default:
                    return $this->Stand = 'donker';
            }
        }

        // Get Methodes //
        public function get_Astronomical_twilight( /* Parameters: */ )
        {
            $opkomst = date_sunrise($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 108, 2);
            $ondergang = date_sunset($this->Time, SUNFUNCS_RET_STRING, $this->Longitude, $this->Latitude, 108, 2);

            switch(true) {
                case $this->Time >= $opkomst && $this->Time < $ondergang:
                    return $this->Stand = 'licht';
                    break;
                default:
                    return $this->Stand = 'donker';
            }
        }

        // Get Methodes //
        public function get_nightmode( /* Parameters: */ )
        {
            if ($this->Stand === 'donker')
            {
                return '<b class="vet">Nachtmode:</b> Aan.';
            }
            else
            {
                return '<b class="vet">Nachtmode:</b> Uit.';
            }
        }
    }
?>