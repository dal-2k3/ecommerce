<div class="row">
            <div class="row frm-title mb">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frm-content">
                <div class="row mb10 from-dsloai">
                   <table>
                        <tr>

                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG</th>
                            <th>Giá CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                        </tr>
                        <?php
                            foreach($listthongke as $thongke) {
                                extract($thongke);
                                echo '<tr>

                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=bieudo"><input type="button" value="XEM BIỂU ĐỒ" /></a>
                </div>
            </div>
        </div>