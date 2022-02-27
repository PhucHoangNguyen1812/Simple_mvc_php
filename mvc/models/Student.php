<?php
class Student {
    public $ID;
    public $NAME;
    public $DATE;
    public function __construct($id , $name, $date)
    { 
        $this -> ID = $id;
        $this -> NAME = $name;
        $this -> DATE = $date;
    }
}
?>
