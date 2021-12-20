
<?php
    if (isset($_GET["submit"])) {
        ?>
    <table>
    <!-- `prop_name`,`prop_owner`,`location`,`Status`,`property_type` -->
    <tr>
        <th>Property Name</th>
        <th>Porperty Owner</th>
        <th>Location</th>
        <th>Status</th>
</tr>

<?php
            # ------ Query from the search field
            $searchQ = $_GET["search"];
            $sqlQuery = "SELECT * FROM property WHERE prop_name='$searchQ'";
           $searched =  mysqli_query($conn , $sqlQuery);

           while ($r = mysqli_fetch_assoc($searched)) {
               # 
               echo "<tr>";
               echo "<td>".$r["prop_name"]."</td>";
               echo "<td>".$r["prop_owner"]."</td>";
               echo "<td>".$r["location"]."</td>";
               echo "<td>".$r["Status"]."</td>";
               echo "</tr>";
           }
    }
    mysqli_close($conn);
?>
</table>