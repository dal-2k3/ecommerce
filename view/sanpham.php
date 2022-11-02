<div class="row mb">
    <div class="content-left mr">
        <div class="row mb">            
            <div class="boxtitle">SẢN PHẨM / <strong><?=$tendm?></strong></div>
            <div class="boxcontent row">
                <?php
                    $i = 0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                        if(($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                            $mr = "";
                        }else {
                            $mr = "mr";
                        }
                        echo '<div class="boxsp '.$mr.'">
                                <div class="img row"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" /></a></div>
                                <div class="boxduoi">
                                    <p>$'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>
                             </div>';
                    $i+=1;
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