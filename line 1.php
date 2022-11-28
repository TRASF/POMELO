
    <section id="11" class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-6">
            <video controls autoplay class="img-fluid">
             <source src="img/2.mp4" type="video/mp4">
            Your browser does not support the video tag.
              </video>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="text-left heading-wrap">
              <h2 data-aos="fade-up">สั่งซื้อส้มโอหรือกิ่งพันธุ์</h2>
            </div>
      <form action="line-notify.php" method="post">
         <div class="item">
        <p>รายการสั่งซื้อ<span class="required">*</span></p>
        <div class="city-item">
          <input style="width: 100%;" type="text" name="name" placeholder="ชื่อ" required/>
          <input style="width: 100%;" type="text" name="where" placeholder="ที่อยู่" required/>
          <input style="width: 100%;" type="email" name="email" placeholder="Email(ถ้ามี)" />
          <input type="text" name="phone" placeholder="เบอร์โทร" required/>
          <input type="text" name="postnum" placeholder="รหัสไปรษณีย์" required/>
          <select name="select1" required>
            <option value="">ส้มโอ</option>
            <option value="ทองดี">ทองดี</option>
            <option value="ขาวน้ำผึ้ง">ขาวน้ำผึ้ง</option>
            <option value="ขาวหอม">ขาวหอม</option>
            <option value="ทับทิมสยาม">ทับทิมสยาม</option>
            <option value="สเปรย์เปลือกส้มโอ">สเปรย์เปลือกส้มโอ</option>
          </select><input type="text" name="num1" placeholder="จำนวน" required/>
          <select name="select2">
            <option value="">เพิ่มเติม</option>
            <option value="ทองดี">ทองดี</option>
            <option value="ขาวน้ำผึ้ง">ขาวน้ำผึ้ง</option>
            <option value="ขาวหอม">ขาวหอม</option>
            <option value="ทับทิมสยาม">ทับทิมสยาม</option>
            <option value="สเปรย์เปลือกส้มโอ">สเปรย์เปลือกส้มโอ</option>
          </select><input type="text" name="num2" placeholder="จำนวน"/>
          <input style="width: 100%;" type= "file" name="slip" accept="image/png, image/jpeg" required/>
        </div>
         <input style="width: 100%;" type="submit" name="submit" value="สั่ง">
      </div>
    </form>
        <br>
          <br><br>
          <br>
          </div>

        </div>
      </div>
    </section>