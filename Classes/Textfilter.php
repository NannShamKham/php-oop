<?php
class Textfilter{
 public $text;
    public function __construct($inputText)
    {
        $this->text = $inputText;
    }
// public function makeTrim($inputText){
//
//     $this->text = trim($this->text);
//     return $this;
// }
//
//
// public function makeEntity(){
//     $this->text = htmlentities($this->text,ENT_QUOTES);
//     return $this;
// }
//
//
//    public function makeStripSlash(){
//        $this->text = stripcslashes($this->text);
//        return $this;
//    }
}