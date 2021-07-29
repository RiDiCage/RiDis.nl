<?php
    // Namespace
    namespace Date;

    // Class
    class Year {
        // Properties or Attributes //
        private $Year;
        private $Y10;
        private $Y20;
        private $Y30;
        private $Y40;
        private $Y50;
        private $Y60;
        private $Y70;
        private $Y80;
        private $Y90;
        private $Y00;

        // Constructor //
        public function __construct( /* Parameters: */ )
        {
            $this->Year = date('y');
            $this->Y10 = date('10');
            $this->Y20 = date('20');
            $this->Y30 = date('30');
            $this->Y40 = date('40');
            $this->Y50 = date('50');
            $this->Y60 = date('60');
            $this->Y70 = date('70');
            $this->Y80 = date('80');
            $this->Y90 = date('90');
            $this->Y00 = date('99');
        }

        // Get Methodes //
        public function get_year( /* Parameters: */ )
        {
            switch(true) {
                case $this->Year >= $this->Y10 && $this->Year < $this->Y20:
                    return 'Jaren 10';
                    break;
                case $this->Year >= $this->Y20 && $this->Year < $this->Y30:
                    return 'Jaren 20';
                    break;
                case $this->Year >= $this->Y30 && $this->Year < $this->Y40:
                    return 'Jaren 30';
                    break;
                case $this->Year >= $this->Y40 && $this->Year < $this->Y50:
                    return 'Jaren 40';
                    break;
                case $this->Year >= $this->Y50 && $this->Year < $this->Y60:
                    return 'Jaren 50';
                    break;
                case $this->Year >= $this->Y60 && $this->Year < $this->Y70:
                    return 'Jaren 60';
                    break;
                case $this->Year >= $this->Y70 && $this->Year < $this->Y80:
                    return 'Jaren 70';
                    break;
                case $this->Year >= $this->Y80 && $this->Year < $this->Y90:
                    return 'Jaren 80';
                    break;
                case $this->Year >= $this->Y90 && $this->Year < $this->Y00:
                    return 'Jaren 90';
                    break;
                default:
                    return "Millennials";
            }
        }
    }
?>