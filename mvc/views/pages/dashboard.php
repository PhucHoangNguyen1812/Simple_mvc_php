<?php
 $arr =  json_decode($data["Api"], true);
?>
<h4>Dashboard</h4>
<table>

    <head>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Môn</th>
            <th>Điểm</th>
        </tr>
    </head>
    <tbody>
        <tr>
            <?php 
                foreach($arr as $key){

                    echo "<td>".$key."</td>";

            }
            ?>

        </tr>
    </tbody>

</table>
<!-- <?php
        // while($row = mysqli_fetch_array($data["Stu"])) {
        //     echo $row["name"];
        // }
        ?> -->

<hr />

