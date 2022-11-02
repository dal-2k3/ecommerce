<div class="row mb">
    <div class="content-left mr">
        <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
            <div class="row frm-content">
            <div class="row mb10 from-dsloai"> 
           <table>
                <tr>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT</th>
                    <th>SỐ LƯỢNG ĐẶT HÀNG</th>
                    <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>               
                </tr>
                <?php 
                    if(is_array($listbill)) {
                        foreach($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '<tr>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                </tr>';
                        }
                    }
                ?>
                    <!-- <tr>
                    <td>1</td>
                    <td><img src="images/7.jpg" alt="" height="80px"></td>
                    <td>Tai nghe</td>
                    <td>50</td>
                    <td>2</td>
                    <td>100vnd</td>
                    <td><input type="button" value="xoá"</td>
                </tr> -->
           </table>
           </div>
           </div>
        </div>
    </div>
    <div class="content-right">
        <?php include "view/boxright.php";?>
    </div>
</div>