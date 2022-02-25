<?php 
    class Home extends Controller {
        function SayHi()  {
            $a = $this-> model("StudentModel");
            echo $a -> GetStudent();
        }
        function Show($a, $b) {
            $t = $this -> model("StudentModel");
            echo $t ->TinhTong($a, $b);
        }
    }
?>