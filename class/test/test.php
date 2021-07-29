<?php
    // Namespace
    namespace Test;

    // Class
    class Test {
        // Properties or Attributes //
        private $Return;

        // Constructor //
        public function __construct( /* Parameters: */ string $input)
        {
            $this->Return = $input;
        }

        // Set Methodes //
        public function set_function( /* Parameters: */ string $input)
        {
            $this->Return = $input;
        }

        // Get Methodes //
        public function get_function( /* Parameters: */ )
        {
            return $this->Return;
        }

        // Destructor //
        public function __destruct( /* Parameters: */ )
        {
            unset($this->Return);
        }
    }
?>