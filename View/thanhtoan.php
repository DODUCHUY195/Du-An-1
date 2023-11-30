<main class="containertt">
    <section class="order-summary">
        <h2>Tóm tắt đơn hàng</h2>
        <!-- Thông tin đơn hàng -->
        <div class="product">
            <span>Tên sản phẩm</span>
            <span>$99.00</span>
        </div>
        <div class="product">
            <span>Tên sản phẩm khác</span>
            <span>$59.00</span>
        </div>
        <div class="total">
            <span>Tổng cộng</span>
            <span>$158.00</span>
        </div>
    </section>

    <section class="payment-details">
        <h2>Chi tiết thanh toán</h2>
        <!-- Form thông tin thanh toán -->
        <form class="payment-form">
            <div class="form-group">
                <label for="card-number">Số thẻ:</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456">
            </div>
            <div class="form-group">
                <label for="expiry">Hạn sử dụng:</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY">
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
            </div>
        </form>
        <a href="#" class="ttt"><button class="btn-t" type="submit">Thanh Toán</button></a>
    </section>
</main>