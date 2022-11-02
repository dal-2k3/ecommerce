<div class="row mb">
    <div class="content-left mr">
        <div class="row mb">
            <?php 
                extract($onesp); 
            ?>
            <div class="boxtitle"><?=$name?></div>
            <div class="boxcontent row">
                <?php
                    $img = $img_path.$img;
                    echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                    echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id ?>});
            });
        </script>
        <div class="row" id="binhluan">
           
        </div>
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="boxcontent row">
                <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href = "'.$linksp.'">'.$name.'</a> </li>'; 
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="content-right">
        <?php
            include "boxright.php";
        ?>
    </div>
</div>