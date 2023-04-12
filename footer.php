 <!-- Footer -->
 <div class="logo-page">
            <img src="./assets/img/mona.jpg" alt="">
        </div>
        <!-- quote -->
        <div class="qoute">
            <p class="margin-r20"> "Công ty Cổ Phần MONA Việt Nam Giấy phép kinh doanh số 0107875555 do sở kế hoạch và đầu tư thành phố Hồ Chí Minh cấp ngày 06/06/2016

Văn phòng HCM: 319 - C16 Lý Thường Kiệt, phường 15, quận 11, TP. HCM

Hotline :1900 636 648 | Email: mon@mona.media"

            </p>
            <!-- 
            <img src="./assets/img/mona.jpg" alt="" class="margin-r20" >
            <img src="./assets/img/mona.jpg" alt="" >
            -->
        </div>
<div id="footer">
            <div class="footer">
                <div class="footer-text margin-r20">
                    <h3>TẦM NHÌN & SỨ MỆNH</h3>
                    <p>Chúng tôi lựa chọn kinh doanh ở phân khúc Thực phẩm hữu cơ (Organic Foods) và Thực phẩm tự nhiên (Natural Foods) bởi chúng tôi thực sự đam mê với lĩnh vực này. Chúng tôi hoàn toàn tin tưởng rằng những sản phẩm tạo ra từ quá trình canh tác và sản xuất theo phương thức hữu cơ và tự nhiên tốt cho cơ thể mọi người, tốt hơn cho cộng đồng và tốt hơn cho hành tinh mà chúng ta đang sống.</p>
                    <p>
                        Chúng tôi cũng hiểu rằng, ăn thực phẩm sạch là quyền lợi của mỗi người tiêu dùng. Tuy nhiên trong điều kiện hiện tại của Việt Nam, thực phẩm an toàn đang là điều xa xỉ thì thực phẩm hữu cơ lại càng khó tiếp cận cả về nguồn cung cấp lẫn giá cả.
                    </p>
                </div>

                <div class="blog margin-r20 ">
                    <h4>THÔNG TIN CÔNG TY </h4>
                    <div class="callout ">
                        <ul>
                            <li>Công ty Cổ Phần MONA Việt Nam Giấy phép kinh doanh số 0107875555 do sở kế hoạch và đầu tư thành phố Hồ Chí Minh cấp ngày 06/06/2016</li>
                            <li>Văn phòng HCM: 319 - C16 Lý Thường Kiệt, phường 15, quận 11, TP. HCM</li>
                           
                        </ul>
                        
                        
                    </div>

                    <hr>
                    <h4>EMAIL</h4>
                    <div class="callout ">
                        <ul>
                            <li>Đặt hàng: <a href="mailto:sales@organica.vn"> mon@mona.media</a></li>
                            <li>Hợp tác: <a href="mailto:organica@organica.vn"> demonhunterg@gmail.com</a></li>
                        </ul>
                    </div>

                    <h4>ĐƯỜNG DÂY NÓNG</h4>
                    <div class="callout ">
                        <ul>
                            <li><span style="text-decoration: underline;"><span style="color: #0000ff; text-decoration: underline;">&nbsp;Hotline :1900 636 648</span></span>&nbsp;</li>
                        </ul>
                    </div>
                </div>

                <div class="popular">
                    <div>
                        <h3>Hệ Thống Cửa Hàng</h3>
                        <p>
                            <span class="item-popular">Số 1174 Đường Láng, P. Láng thượng, Q. Đống Đa, Tp. Hà Nội</span>
                            
                            <span class="item-popular">Số 159 Thái Hà, P. Láng Hạ, Q. Đống Đa, Tp. Hà Nội</span>
                            
                          <!--  <span class="item-popular">Chi nhánh 3 : Cách Mạng Tháng 8</span>
                            
                           <span class="item-popular">Chi nhánh 4 : Võ Văn Tần</span> -->
                           
                        </p>

                    </div>

                    <div class="login-free">
                        <p>Đăng kí nhận khuyến mãi</p>

                        <input type="email" name="email" placeholder="Nhập Email nhận thông tin khuyến mãi" value="">
                        <button>Gửi</button>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>

        <!--

 <section class="footer">
        <div class="footer-container">
            <div class="footer-items">
                <li><a href="https://www.facebook.com/Cs2Qt">Liên hệ</a></li>
                <li><a href="https://www.facebook.com/Cs2Qt">Tuyển dụng</a></li>
                <li><a href="https://www.facebook.com/Cs2Qt"><i class="fab fa-facebook-f"></i></a><a href=""><i class="fab fa-youtube"></i></a></li>
            </div>
            <div class="footer-text">
Địa chỉ đăng ký: Đường Đoàn Thi Điểm - Đông Hà - Quảng Trị - Liên Hệ : 098 778 8888 <br>
Đặt hàng online : 096 868 6868 .
            </div>
            <div class="footer-bottom">
                ©Vinamilk All rights reserved
            </div>
        </div>
    </section>


<script src="script.js"></script>
-->


</body>
    <script type="text/javascript">
 const imgItem = document.querySelectorAll(".aspect-ratio-169 img")
 const imgItemContainer = document.querySelector(".aspect-ratio-169")
 const dotItem = document.querySelectorAll(".dot")
 let index = 0;
 let imgLeng = imgItem.length
 imgItem.forEach(function(image,index){
     image.style.left = index*100 + "%"
     dotItem[index].addEventListener("click",function(){
     slideRun (index)
     })
 })
 function slider (){
     index++;
     if(index >= imgLeng){index=0}
   
     slideRun (index)
 }
 function slideRun (index) {
     imgItemContainer.style.left = "-" + index*100 + "%"
     const dotActive = document.querySelector(".active")
     dotActive.classList.remove("active")
     dotItem[index].classList.add("active");
 }
 
 setInterval (slider,5000)




const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
    const X = this.pageYOffset;
  if(X>1){toP.classList.add("active")}
  else {
      toP.classList.remove("active")
  }
}) 
                        
    </script>
</html>    