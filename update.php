<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="orders"; // Database name
$tbl_name="products"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$id=$_GET['id'];

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>

    <table width="400" border="0" cellspacing="1" cellpadding="0">
        <tr>
            <form name="form1" method="post" action="update_ac.php">
                <td>
                    <table width="100%" border="0" cellspacing="1" cellpadding="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="3"><strong>Update data in mysql</strong> </td>
                        </tr>
                        <tr>
                            <td align="center">&nbsp;</td>
                            <td align="center">&nbsp;</td>
                            <td align="center">&nbsp;</td>
                            <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="center">&nbsp;</td>
                            <td align="center"><strong>Name</strong></td>
                            <td align="center"><strong>productLine</strong></td>
                            <td align="center"><strong>productCode</strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="center">
                                <input name="name" type="text" id="name" value="<? echo $rows['name']; ?>">
                            </td>
                            <td align="center">
                                <input name="productLine" type="text" id="productLine" value="<? echo $rows['productLine']; ?>" size="15">
                            </td>
                            <td>
                                <input name="productCode" type="text" id="productCode" value="<? echo $rows['productCode']; ?>" size="15">
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>">
                            </td>
                            <td align="center">
                                <input type="submit" name="Submit" value="Submit">
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>

<?php
// close connection 
mysql_close();
?>