<div class="tb-module tshop-um tshop-um-dc-dclb">
    <div class="wrap_bd J_TWidget" data-widget-type="Carousel" data-widget-config="{'effect':'<?php echo $_MODULE["effect"];?>','easing':'<?php echo $_MODULE["easing"];?>','autoplay': <?php echo $_MODULE["autoplay"];?>,'duration':<?php echo $_MODULE["duration"];?>,'interval':<?php echo $_MODULE["interval"];?>,'navCls':'lb_nav','contentCls':'lb_bd' }">
        <div class="main">
            <ul class="lb_bd">
                <?php
                for ($j = 1; $j < 5; $j++) {
                    $items = getItems($_MODULE['items' . $j], 200, 'hotsell', 1);
                    foreach ($items as $item) {
                        if ($_MODULE['pic' . $j]) {
                            $pic = $_MODULE['pic' . $j];
                        } else {
                            $pic = $item['pic'];
                        }
                        echo '<li>
                            <div class="big_img">
                                <a href="' . $item['link'] . '" target="_blank"
                                   style="' . bg_img($pic) . '"></a>
                            </div>
                            <div class="pri_info">
                                <div class="info_buy">
                                    <a href="' . $item['link'] . '" target="_blank" class="alink">
                                        ' . $_MODULE['bt' . $j] . '
                                    </a>

                                    <div class="pri_box">
                                        <div class="price">
                                            <span>￥</span>' . $item['price'] . '
                                        </div>
                                        <div class="mark_box">
                                            <p>已售出： <span>' . $item['soldCount'] . '</span> 笔</p>

                                            <p>收藏人数： <span>' . $item['collectedCount'] . '</span> 人</p>
                                        </div>
                                    </div>
                                    <div class="btn">' . gd_sc(0, $item['id']) . gd_share(0, 1, 'cq', $item['id']) . gd_like($item['id']) . '
                                        <a href="#" target="_blank" class="gd_buy"> </a>
                                    </div>
                                </div>
                                <div class="info_msg">
                                    <h3>看大家这么说</h3>

                                    <ul>';
                        $rates = $rateManager->queryAuctionRates(1);
                        if ($rates) {
                            foreach ($rates as $rate) {
                                echo '<li class="msg_item">
                                    <div class="tx" style="' . bg_img($rate->getRaterAvatar('60')) . '">
                                    </div>
                                    <p class="msg">
                                        ' . $rate->feedback . '
                                    </p>

                                    <p class="name">
                                        ' . $rate->raterNick . '
                                    </p>
                                </li>';
                            }
                        }else {
                            echo '<div style="font-size: 20px; text-align: center;">
                                暂无评价
                            </div>';
                        }

                        echo '</ul>
                            </div>
                                </div>
                            </li> ';
                    }
                }
                ?>

            </ul>
        </div>
        <div class="nav">

            <ul class="lb_nav">
                <?php
                for ($i = 1; $i < 5; $i++) {
                    $items = getItems($_MODULE['items' . $i], 180, 'hotsell', 1);
                    foreach ($items as $item) {
                        if ($_MODULE['spic' . $i]) {
                            $spic = $_MODULE['spic' . $i];
                        } else {
                            $spic = $item['pic'];
                        }
                        if($i==1){
                            echo '<li class="ks-active">';
                        }else{
                            echo '<li>';
                        }
                        echo ' <a href="'.$item['link'].'" target="_blank" style="'.bg_img($spic).'"></a>
                            <span class="jt">
                            </span>
                        </li>';
                    }
                }
                ?>

            </ul>
        </div>
    </div>

</div>
