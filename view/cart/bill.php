<div class="row mb">
    <div class="content-left mr">
        <form action="index.php?act=billconfirm" method="POST">
            <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="boxcontent row formtk">
                    <table>
                        <?php
                            if(isset($_SESSION['user'])) {
                                $name = $_SESSION['user']['name'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            }else {
                                $name ="";
                                $address = "";
                                $email ="";
                                $tel = "";
                            }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input  type="text" name="name" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>                
                </div>
            </div>
            <div class="row mb">
            <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="boxcontent row formtk">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked>Trả tiền khi thanh toán</td>
                            <td><input type="radio" name="pttt" >Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt" >Thanh toán online</td>
                        </tr>
                    </table>
                    
                </div>
            </div>
            <div class="row mb">
            <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="boxcontent row formtk">
                    <div class="row mb10 from-dsloai">
                        <table>
                            <!-- <tr>
                                <th>Hình</th>
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Thao tác</th>
                            </tr> -->
                           <?php viewcart(0);?>
                        </table>
                    </div>
                    
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="content-right">
        <?php include "view/boxright.php";?>
    </div>
</div>