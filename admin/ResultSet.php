
<?php
    include "includes/connect.php";
    if (isset($_POST["submit"])) {
    echo "<table>
    
    <tr>
        <th>Property Name</th>
        <th>Porperty Owner</th>
        <th>Location</th>
        <th>Status</th>
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

    echo "<button><a href='./propertymanagement.php'>Back To Home</a></button>";
?>


