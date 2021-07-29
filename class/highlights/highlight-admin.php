<?php
    // Namespace
    namespace Highlight;

    // Class
    class Highlightadmin {

        // Properties or Attributes //
        private $Highlights = [];

        // Constructor
        public function Add( /* Parameters: */ object $highlight)
        {
            array_push($this->Highlights, $highlight);

            if ($this->Find($highlight->get_ID()))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        // Get Methode
        public function Find( /* Parameters: */ $id)
        {
            foreach ($this->Highlights as $index => $value)
            {
                if ($id == $value->get_ID())
                {
                    return $value;
                }
            }
            
        }

        // Get Methode
        public function Overview ( /* Parameters: */ )
        {
            return implode("<br>", $this->Highlights);
        }

        // Destructor
        public function Remove( /* Parameters: */ int $registrationid)
        {
            foreach ($this->Highlights as $index => $value)
            {
                if ($id == $value->get_ID())
                {
                    unset($this->Highlights[$index]);
                }
            }
        }
    }
?>