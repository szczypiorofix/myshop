<?php


namespace Templates\Components;

class Button {
   private $content = null;
   private $name = null;
   private $link = null;
   private $class = null;
   
   public function __construct($name, $link, $class) {
       $this->name = $name;
       $this->link = $link;
       $this->class = $class;
       $this->content = '';
   }
}
