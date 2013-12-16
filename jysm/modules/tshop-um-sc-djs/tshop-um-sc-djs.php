<?php
if($_MODULE['mk_region']){
    $region=$_MODULE['mk_region'];
}else{
    $region=$regionWidth;
}
?>
<div class="tb-module tshop-um tshop-um-sc-djs">
    <div class="wrap_hd">
        <h3 class="hd_title">
            <?
            echo $_MODULE['head'];
            ?>
        </h3>
        <p class="hd_info">
            <?
            echo $_MODULE['text'];
            ?>
        </p>
        <?
        echo '<a href="'. $_MODULE['link'].'" target="_blank" class="hd_more">
                    '. $_MODULE['more'].'
                </a>';
        ?>

    </div>

    <div class="wrap_bd mk_<? echo $region ?>" >
        <ul>
            <?
            $gd_num=$_MODULE['gd_num'];
            for($i=1;$i<=$gd_num;$i++){
                $items=getItems($_MODULE['items'.$i],210,'hotsell',1);

                foreach($items as $key => $item){
                    if($_MODULE['pic'.$i]){
                        $pic=$_MODULE['pic'.$i];
                    }else{
                        $pic=$item['pic'];
                    }
                    $isDjs = $_MODULE['time'.$i];
                    if ($isDjs) {
                        $dis = 'display: block;';
                    } else {
                        $dis = 'display: none;';
                    }
                    $djs = "{'endTime':'". $_MODULE['time'.$i]."','interval':1000,'timeRunCls':'.ks-countdown-run','timeUnitCls':{'d':'.ks-d','h':'.ks-h','m':'.ks-m','s':'.ks-s','i':'.ks-i'},'minDigit':1,'timeEndCls':'.ks-countdown-end'}";

                    echo '<li class="item_box">
                                <div class="img_warp">
                                    <a href="'.$item['link'].'" class="alink" style="'.bg_img($pic).'">
                                    </a>
                                </div>
                                <p class="pro_price">
                                    '.price_cqol('', $item['discountPrice'], $item['price']).'
                                </p>
                                <p class="pro_title">
                                    <a href="'.$item['link'].'" class="alink" target="_blank">
                                        '.$item['title'].'
                                    </a>
                                </p>
                                <div class="btn">
                                    '.gd_sc(0, $item['id']) . gd_share(0, 1, 'cq', $item['id']).'
                                    <div class="ww">
                                        '.$uriManager->supportTag($_user->nick,"请点击直接访问",2,true).'
                                    </div>
                                </div>


                                <div class="J_TWidget item_time" data-widget-type="Countdown" style="'.$dis.'"  data-widget-config="'.$djs.'">
                                    <div class="ks-countdown-run">
                                        <span class="ks-d"></span>天
                                        <span class="ks-h"></span>:
                                        <span class="ks-m"></span>:
                                        <!-- 如果有0.1秒级别的变化建议以gif背景图片的形式变化 -->
                                        <span class="ks-s"></span>
                                    </div>

                                    <!-- 倒计时结束时显示-->
                                    <!--可以写多个 -->
                                    <div class="ks-countdown-end">
                                        <div>
                                            活动结束
                                        </div>
                                    </div>
                                </div>
                            </li>';
                }
            }
            ?>
        </ul>
    </div>
</div>
