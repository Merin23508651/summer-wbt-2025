<!DOCTYPE html>
<html>
<head>
    <title>Product Display</title>
</head>
<body>
    <h3>DISPLAY</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th></th>
        </tr>
        <?php
        $conn = new mysqli("localhost", "root", "", "product_db");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, pname, buying_price, selling_price 
                FROM products 
                WHERE display='Yes'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $profit = $row['selling_price'] - $row['buying_price'];
                echo "<tr>
                        <td>".$row['pname']."</td>
                        <td>".$profit."</td>
                        <td>
                            <a href='editproduct.php?id=".$row['id']."'>edit</a> 
                            <a href='deletproduct.php?id=".$row['id']."'>delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No products to display</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
