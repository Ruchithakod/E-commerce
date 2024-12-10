<?php
// Database details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "zouk_db";

// Create a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Ensure connection is established
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted and handle the respective operation
if (isset($_POST['action'])) {
    
    // inserting
    if ($_POST['action'] == 'insert') {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_category = $_POST['product_category'];
        $product_quantity = $_POST['product_quantity'];
        
        $sql = "INSERT INTO product(id,name, price, category, quantity) VALUES ('$product_id','$product_name', '$product_price', '$product_category', '$product_quantity')";
         
        if (mysqli_query($con, $sql)) {
            echo "Product added successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    // updating
    if ($_POST['action'] == 'update') {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_category = $_POST['product_category'];
        $product_quantity = $_POST['product_quantity'];

        $sql = "UPDATE product SET name='$product_name', price='$product_price', category='$product_category', quantity='$product_quantity' WHERE id='$product_id'";
        
        if (mysqli_query($con, $sql)) {
            echo "Product updated successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    // deleting
    if ($_POST['action'] == 'delete') {
        $product_id = $_POST['product_id'];

        $sql = "DELETE FROM product WHERE id='$product_id'";
        
        if (mysqli_query($con, $sql)) {
            echo "Product deleted successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}

mysqli_close($con);
?>
