<html>
    <body>
        <?php
            $con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));
            mysqli_select_db( $con,"cse") or die(mysqli_error($con));

            $sql = "select * from book where title = '$_POST[Title]'";

            if($res = mysqli_query($con, $sql)) {
                echo"Successfully connected to database";
            }
            else{
                die('Error: ' . (mysqli_error($con)));
            }
            
            echo "<table border = '1'>

            <tr>
            <th> ISBN </th>
            <th> Title </th>
            <th> Authors </th>
            <th> Edition </th>
            <th> Publisher </th>
            </tr>";

            while($row = mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>" . $row['ISBN'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Authors'] . "</td>";
                echo "<td>" . $row['Edition'] . "</td>";
                echo "<td>" . $row['Publisher'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
        ?> <br><br>
        <a href="index.html">Home</a>
    </body>
</html>