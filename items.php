<?php

include('connect_to_mysql.php');

$query = "SELECT * FROM items"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name']. "</td><td>" . $row['price'] . "</td></tr>";  //$row['index'] the index here is a field name
}


echo "</table>"; //Close the table in HTML
echo "kr";

mysql_close(); //Make sure to close out the database connection

?>
