
<?php
    include "includes/connect.php";
    if (isset($_POST["submit"])) {
    echo "<table border='1'>
    
    <tr>
        <th style='padding:7px; width:500px;'>Property Name</th>
        <th style='padding:7px; width:500px;'>Porperty Owner</th>
        <th style='padding:7px; width:500px;'>Location</th>
        <th style='padding:7px; width:500px;'>Status</th>
</tr>";
    # ------ Query from the search field
            $q = $_POST["query"];
            echo "<p>Search results for: $q </p>";
            $sq = "SELECT * FROM property WHERE prop_name='$q'";
           $query =  mysqli_query($conn , $sq);
        
           while ($row = mysqli_fetch_assoc($query)) {
               # 
               echo "<tr>";
               echo "<td>".$row["prop_name"]."</td>";
               echo "<td>".$row["prop_owner"]."</td>";
               echo "<td>".$row["location"]."</td>";
               echo "<td>".$row["Status"]."</td>";
               echo "</tr>";
           }
           echo "</table>";
          mysqli_close($conn);

    }

    echo "<button style='padding:10px; width:120px;'><a href='./propertymanagement.php' style='text-decoration:none;'>Back To Home</a></button>";
?>


