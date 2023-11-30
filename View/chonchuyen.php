 <?php
                        foreach($dstt as $ct){
                            echo '
                             <main class="containe">
    <section class="pickup-dropoff">
      <div class="pickup">
        <h2>Điểm đón</h2>
        <label>
          <input type="radio" name="pickup" value="123 ABC Street " checked>
          Giờ đi: '.$ct['gio_di'].'
          Địa chỉ: '.$ct['diem_di'].'
        </label>
    
      </div>

      <div class="dropoff">
        <h2>Điểm trả</h2>
        <label>
          <input type="radio" name="pickup-add" value="123 ABC Street">
          Giờ đến: '.$ct['gio_den'].'
          Địa chỉ: '.$ct['diem_den'].'
        </label>
        
      </div>
    </section>
    <a href="index.php?act=nhapthongtin"><button type="submit">Tiếp Tục</button></a>
    <a href="index.php?act=chitietve"><button type="submit">Quay Lại</button></a>
  </main>
                            ';}
?>