<?php
    $conn = connectdb();
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $min_price = $_GET['min_price'];
    $sql = "SELECT * FROM ve WHERE gia > $min_price";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // Lặp qua các dòng dữ liệu và hiển thị
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Tên sản phẩm: " . $row["name"] . " - Giá: " . $row["gia"] . "<br>";
    }
} else {
    echo "Không có sản phẩm nào có giá trên $min_price.";
}
    }
// Đóng kết nối
$conn->close();

?>