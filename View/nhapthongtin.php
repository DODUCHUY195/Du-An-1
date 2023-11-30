<style>
form {
    width: 300px;
    margin: 200px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="text"],
input[type="email"],
input[type="submit"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}
</style>



<form method="post" action="">
    <label for="username">Tên người dùng:</label>
    <input type="text" name="username" id="username" value=""><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value=""><br>

    <label for="email">Số Điện Thoại:</label>
    <input type="email" name="email" id="email" value=""><br>

    <a href="index.php?act=thanhtoan">Đến Trang Thanh Toán</a>
</form>