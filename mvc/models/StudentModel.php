<?php
    class StudentModel extends DBContext {
        public function GetStudent() {
            return "Nguyen Hoang Phuc";
        }

        public function TinhTong($a , $b) {
            return $a + $b;
        }

        public function Student() {
            $qr = "SELECT * FROM student";
            return mysqli_query($this -> connect, $qr);
        }

        public function ApiStudent() {
            $qr = "SELECT * FROM student";
            $result = mysqli_query($this->connect, $qr);
            $mang = $result -> fetch_all(MYSQLI_ASSOC);
            return json_encode($mang);
        }
    }
?>