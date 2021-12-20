<?php
    $sql_query = "SELECT * FROM property";
   $query = mysqli_query($conn,$sql_query);
   if(mysqli_num_rows($query) > 1){
       while ($row = mysqli_fetch_assoc($query)) {
           # c`prop_name`,`prop_owner`,`location`,`Status`,`property_type`
                echo "<option value='".$row['prop_name']."' >".$row['prop_name']."</option>";
       }
   }
        mysqli_close($conn);

?>