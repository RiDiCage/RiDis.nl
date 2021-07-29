<?php
    // Namespace
    namespace Date;

    // Class
    class Date {
        // Properties or Attributes //
        private $Date;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $day = new Day();
            $day = $day->get_day();
            
            $month = new Month();
            $month = $month->get_month();

            $clock = new Clock();
            $clock = $clock->get_clock();

            $weeknumber = new Weeknumber();
            $weeknumber = $weeknumber->get_weeknumber();

            $this->Date = '<b class="vet">Datum:</b> ' . $day . ' ' . date('d') . ' ' . $month . ' ' . date('Y') . '.<br>
            <b class="vet">Week nr.: </b>' . $weeknumber . '.<br>
            <b class="vet">Tijd:</b> ' . $clock;
        }

        // Get Methodes //
        public function get_date( /* Parameters: */ )
        {
            return $this->Date;
        }
    }
?>