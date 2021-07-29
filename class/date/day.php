<?php
    // Namespace
    namespace Date;

    // Class
    class Day {
        // Properties or Attributes //
        private $Day;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Day = date('D');
        }

        // Get Methodes //
        public function get_day( /* Parameters: */ )
        {
            switch(true)
            {
                case $this->Day == 'Mon':
                    return 'Maandag';
                    break;
                case $this->Day == 'Tue':
                    return 'Dinsdag';
                    break;
                case $this->Day == 'Wed':
                    return 'Woensdag';
                    break;
                case $this->Day == 'Thu':
                    return 'Donderdag';
                    break;
                case $this->Day == 'Fri':
                    return 'Vrijdag';
                    break;
                case $this->Day == 'Sat':
                    return 'Zaterdag';
                    break;
                case $this->Day == 'Sun':
                    return 'Zondag';
                    break;
                default:
                    return 'Dag';
            }
        }
    }
?>