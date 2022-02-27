<h4>Dashboard</h4>
<?php
    while($row = mysqli_fetch_array($data["Stu"])) {
        echo $row["name"];
    }
?>
