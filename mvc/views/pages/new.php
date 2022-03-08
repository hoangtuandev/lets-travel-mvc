<!-- NOT GO TRAVEL -->
<h2>NEW</h2>
<?php
    while($row = mysqli_fetch_array($data["SV"])) {
        echo $row['HoTen'] ;
    }
?>