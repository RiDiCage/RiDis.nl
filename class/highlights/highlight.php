<?php
    // Namespace
    namespace Highlight;

    // Class
    class Highlight {
        // Properties or Attributes //
        private $ID;
        private $Image;
        private $Title;
        private $Subtitle;

        // Constructor
        public function __construct( /* Parameters: */ int $id, string $img, string $title, string $subtitle)
        {
            $this->ID = $id;
            $this->Image = './img/highlight/'.$img;
            $this->Title = $title;
            $this->Subtitle = $subtitle;
        }

        // Get Methode
        public function __tostring( /* Parameters: */ )
        {
            return "<br>
                <b>ID: </b>" . $this->ID . "<br>
                <b>Image: </b>" . $this->Image . "<br>
                <b>Title: </b>" . $this->Title . "<br>
                <b>Subtitle: </b>" . $this->Subtitle . "<br>
            ";
        }

        // Get Methode
        public function get_ID( /* Parameters: */ )
        {
            return $this->ID;
        }
    }
?>