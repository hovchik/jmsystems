<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="orders"; // Database name
$tbl_name="products"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// update data in mysql database 
$sql="UPDATE $tbl_name SET name='$name', productLine='$productLine', productCode='$productCode' WHERE id='$id'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
    echo "Successful";
    echo "<BR>";
    echo "<a href='list_records.php'>View result</a>";
}

else {
    echo "ERROR";
}

?>