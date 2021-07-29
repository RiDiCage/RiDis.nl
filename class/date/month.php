<?php
    // Namespace
    namespace Date;

    // Class
    class Month {
        // Properties or Attributes //
        private $Month;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Month = date('M');
        }

        // Get Methodes //
        public function get_month( /* Parameters: */ )
        {
            switch(true)
            {
                case $this->Month == 'Jan':
                    return 'Januari';
                    break;
                case $this->Month == 'Feb':
                    return 'Februari';
                    break;
                case $this->Month == 'Mar':
                    return 'Maart';
                    break;
                case $this->Month == 'Apr':
                    return 'April';
                    break;
                case $this->Month == 'May':
                    return 'Mei';
                    break;
                case $this->Month == 'Jun':
                    return 'Juni';
                    break;
                case $this->Month == 'Jul':
                    return 'Juli';
                    break;
                case $this->Month == 'Aug':
                    return 'Augustus';
                    break;
                case $this->Month == 'Sep':
                    return 'September';
                    break;
                case $this->Month == 'Oct':
                    return 'Oktober';
                    break;
                case $this->Month == 'Nov':
                    return 'November';
                    break;
                case $this->Month == 'Dec':
                    return 'December';
                    break;
                default:
                    return 'Maand';
            }
        }
    }
?>