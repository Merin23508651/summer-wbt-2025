<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $row = $result->fetch_assoc();
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $buying = $_POST['buying_price'];
    $selling = $_POST['selling_price'];
    $display = isset($_POST['display']) ? "Yes" : "No";

    $sql = "UPDATE products 
            SET pname='$pname', buying_price='$buying', selling_price='$selling', display='$display' 
            WHERE id=$id";

    if($conn->query($sql)){
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>EDIT PRODUCT</h2>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name <br>
    <input type="text" name="pname" value="<?php echo $row['pname']; ?>"><br><br>
    Buying Price <br>
    <input type="number" name="buying_price" value="<?php echo $row['buying_price']; ?>"><br><br>
    Selling Price <br>
    <input type="number" name="selling_price" value="<?php echo $row['selling_price']; ?>"><br><br>
    <input type="checkbox" name="display" value="Yes" <?php if($row['display']=="Yes") echo "checked"; ?>> Display <br><br>
    <input type="submit" name="update" value="SAVE">
</form>
</body>
</html>
