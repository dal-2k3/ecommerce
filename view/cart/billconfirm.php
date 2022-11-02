<div class="row mb">
    <div class="content-left mr">
        <form action="index.php?act=billconfirm" method="POST">
            <div class="row mb">
            <div class="boxtitle">CẢM ƠN</div>
            <div class="boxcontent row">
                <h2 text>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
            </div>
            
            <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <div class="boxcontent row"> 
                    <li>-Mã đơn hàng: DAM-<?=$bill['id'];?></li> 
                    <li>-Ngày đặt hàng-<?=$bill['ngaydathang'];?></li> 
                    <li>-Tổng đơn hàng-<?=$bill['total'];?></li> 
                    <li>-Phương thức thanh toán-<?=$bill['bill_pttt'];?></li> 
                    

                </div>
            </div>
            <div class="row mb">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="boxcontent row formtk">
                    <table>
                    <?php 
                if(isset($bill) && (is_array($bill))) {
                    extract($bill);
                }
            ?>
                    <tr>
                            <td>Người đặt hàng</td>
                            <td><?=$bill['bill_name'];?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?=$bill['bill_address'];?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?=$bill['bill_email'];?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><?=$bill['bill_tel'];?></td>
                        </tr>
                    </table>
                    
                </div>
            </div>
            <div class="row mb">
            <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
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
                           <?php bill_chi_tiet($billct);?>
                        </table>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
    <div class="content-right">
        <?php include "view/boxright.php";?>
    </div>
</div>