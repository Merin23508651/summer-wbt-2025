
<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "product_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $row = $result->fetch_assoc();
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<p>Product Deleted!</p>";
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>DELETE PRODUCT</h2>
<p><b>Name:</b> <?php echo $row['pname']; ?></p>
<p><b>Buying Price:</b> <?php echo $row['buying_price']; ?></p>
<p><b>Selling Price:</b> <?php echo $row['selling_price']; ?></p>
<p><b>Displayable:</b> <?php echo $row['display']; ?></p>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="submit" name="delete" value="Delete">
</form>

</body>
</html>
