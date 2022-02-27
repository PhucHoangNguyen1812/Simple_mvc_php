<?php
    class StudentModel extends DBContext {
        public function GetStudent() {
            return "Nguyen Hoang Phuc";
        }
        public function TinhTong($a , $b) {
            return $a + $b;
        }
        public function StudentList() {
            $qr = "SELECT * FROM student";
            return mysqli_query($this -> connect, $qr);
        }
    }
?>