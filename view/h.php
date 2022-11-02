<?php
                        
                            if(isset($_SESSION['user'])) {
                                extract($_SESSION['user']); 
                        ?>
                            <div class="row mb10">
                                Xin chào <br />
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=quenmk">Quên Mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>

                            <?php } ?>