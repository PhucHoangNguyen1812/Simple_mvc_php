<?php



class Api_Student extends Controller
{
    public function ListStudent() {
        
        require_once "./mvc/models/Student.php";

        //call model
        $student = $this -> model("StudentModel");
        $stu = $student -> StudentList();

        $mang = [];

        while($m = mysqli_fetch_array($stu)) {
            $list = array ('id' => $m["ID"], 'name' => $m["NAME"], 'date' => $m["DATE"]);
            print_r($list) ;
            array_push($mang, $list);
        }

        echo json_encode($mang);
    }
}
?>