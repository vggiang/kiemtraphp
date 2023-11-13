Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp.<br>
Tạo một mảng kết hợp chứa thông tin về sản phẩm với các khóa như name, price, và quantity.<br>
Hiển thị thông tin của tất cả sản phẩm trong mảng.<br>
Viết hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity).<br> 
<?php
// mảng chứa thông tin về sản phẩm với các khóa như name, price, và quantity
$products = array(
    array("name" => "Product 1", "price" => 10, "quantity" => 5),
    array("name" => "Product 2", "price" => 20, "quantity" => 10),
    array("name" => "Product 3", "price" => 30, "quantity" => 15)
);

// Hiển thị thông tin của tất cả sản phẩm trong mảng.
foreach ($products as $product) {
    echo "Name: " . $product["name"] . "<br>";
    echo "Price: $" . $product["price"] . "<br>";
    echo "Quantity: " . $product["quantity"] . "<br><br>";
}

// hàm để tính tổng giá trị của tất cả sản phẩm (price * quantity)
function calculateTotal($products)
{
    $total = 0;
    foreach ($products as $product) {
        $total += $product["price"] * $product["quantity"];
    }
    return $total;
}

echo "Total value of all products: $" . calculateTotal($products);



?>

