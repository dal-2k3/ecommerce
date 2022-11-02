<div class="row">
            <div class="row frm-title mb">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <form action="index.php?act=listbill" method="POST">
                        <input type="text" name="kyw" id="" placeholder="Nhập mã đơn hàng">
                        <input type="submit" name="listok" value="GO">
             </form>
            <div class="row frm-content">
                <div class="row mb10 from-dsloai">
                   <table>
                        <tr>
                            <th></th>
                            <th>Mã đơn hàng</th>
                            <th>Khách hàng</th>
                            <th>Số lượng hàng</th>
                            <th>Giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php 
                            foreach($listbill as $bill) {
                                extract(($bill));
                                $suadh = "index.php?act=suadh&id=".$id;
                                $xoadh = "index.php?act=xoadh&id=".$id;
                                // $hinhpath = "../upload/".$img;
                                // if(is_file($hinhpath)) {
                                //     $hinh = "<img src='".$hinhpath."' height='80'>";
                                // }else {
                                //     $hinh = "no photo";
                                // }
                                $kh = $bill["bill_name"].'
                                <br> '.$bill["bill_email"].'
                                <br> '.$bill["bill_address"].'
                                <br> '.$bill["bill_tel"];
                                $countsp =loadall_cart_count($bill["id"]);
                                $ttdh = get_ttdh($bill["bill_status"]);
                                echo '<tr>
                                    <td><input type="checkbox" name="" id="" /></td>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>
                                    <a href="'.$suadh.'"><input type="button" value="Sửa"/></a>
                                    <a href="'.$xoadh.'"><input type="button" value="Xóa" /></a>
                                    
                                </td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="chọn tất cả" />
                    <input type="button" value="Bỏ chọn tất cả" />
                    <input type="button" value="Xóa các mục đã chọn" />
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
                </div>
            </div>
        </div>