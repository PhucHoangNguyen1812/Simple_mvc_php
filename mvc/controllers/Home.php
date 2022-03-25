<?php 
    class Home extends Controller {
        function SayHi()  {
            $a = $this-> model("StudentModel");
            echo $a -> GetStudent();
        }
        function Show($a, $b) {
            $t = $this -> model("StudentModel");
            $tong = $t ->TinhTong($a, $b);
            $this->view("StudentView",
            [   
                "Page" => "dashboard",
                "Number" => $tong,
                "Stu" => $t -> Student(),
            ]);
        }
    }
?>