<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
        <h1>ADD PRODUCT</h1>
        <form method="POST" action="">
            Name <br>
            <input type="text" name="pname" required><br><br>
            Buying Price <br>
            <input type="number" step="0.01" name="buying_price" required><br><br>
            Selling Price <br>
            <input type="number" step="0.01" name="selling_price" required><br><br>
            <input type="checkbox" name="display" value="Yes"> Display <br><br>
            <input type="submit" name="save" value="SAVE">
        </form>
 

    <?php
    if(isset($_POST['save'])){
        $conn = new mysqli("localhost", "root", "", "product_db");

        
        $pname = $_POST['pname'];
        $buying = $_POST['buying_price'];
        $selling = $_POST['selling_price'];
        $display = isset($_POST['display']) ? "Yes" : "No";

        $sql = "INSERT INTO products (pname, buying_price, selling_price, display) 
                VALUES ('$pname', '$buying', '$selling', '$display')";

        if($conn->query($sql)){
        } else {
            echo "<p> Error: ".$conn->error."</p>";
        }
    }
    ?>
</body>
</html>
