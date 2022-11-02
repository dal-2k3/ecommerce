<div class="row mb">
    <div class="content-left mr">
        <div class="row mb">
            <div class="boxtitle">Giỏ hàng</div>
            <div class="row frm-content">
            <div class="row mb10 from-dsloai"> 
           <table>
                
                <?php
                    viewcart(1);
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
        <div class="row mb bill">
        <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"> </a>
        <a href="index.php?act=delcart"> <input type="button" value="Xóa giỏ hàng"> </a>
        </div>
    </div>
    <div class="content-right">
        <?php include "view/boxright.php";?>
    </div>
</div>