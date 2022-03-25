<?php
class Api_Student extends Controller
{
    public function ListStudent() {

        //call model
        $student = $this -> model("StudentModel");
        $arr = $student -> ApiStudent();
        $this -> view("StudentView",[
            
            "Page" => "dashboard",
            "Api"  =>  $this -> sendOutput($arr, array('Content-Type: application/json', 'HTTP/1.1 200 OK'))
        ]);
    }
}
?>