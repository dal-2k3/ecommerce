<div class="row">
            <div class="row frm-title">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row frm-content">
                <div class="row mb10 from-dsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Iduser</th>
                            <th>Idpro</th>
                            <th>Ngày bình luận</th>                       
                            <th></th>
                            
                        </tr>
                        <?php 
                            foreach($listbinhluan as $binhluan) {
                                extract($binhluan);
                                $suabl = "index.php?act=suabl&id=".$id;
                                $xoabl = "index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id="" /></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>                       
                                <td>
                                    <a href="'.$suabl.'"><input type="button" value="Sửa"/></a>
                                    <a href="'.$xoabl.'"><input type="button" value="Xóa" /></a>
                                    
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
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a>
                </div>
            </div>
        </div>