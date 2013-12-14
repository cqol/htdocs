<div class="tb-module tshop-um tshop-um-dp-ys">
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

    <div class="wrap_bd">
        <ul>
            <?
                $items=getItems($_MODULE['items'],300,$_MODULE['px'],6);
                $j = 0;
                foreach($items as $key => $item) {
                         $popconfig = "{'trigger':'.img_pop".$j."','align':{'node':'.img_pop".$j."','offset':[0,0],'points':['lt','rb']}}";

                        echo '<li class="pro_list">
                        <div class="pro_item">
                            <div class="img_warp">
                                <a href="'.$item['link'].'" target="_blank" class="alink img_pop'.$j.'" style="'.bg_img($item['pic']).'"></a>
                                <div class="mark_box J_TWidget"  data-widget-type="Popup" data-widget-config="'.$popconfig.'">
                                    <div class="mark"></div>
                                    <div class="ewm"">
                                        '.proewm(80,80,$item['id']).'
                                    </div>
                                    <div class="msg">
                                        <span class="sale">已售：<s>'.$item['soldCount'].'</s>件</span>
                                        '. gd_like($item['id']) .'
                                        '.gd_car(0, $item['link'], '购物车').'
                                    </div>
                                </div>
                            </div>
                            <p class="pro_price">
                                '.price_cqol('',$item['discountPrice'],$item['price']).'
                            </p>
                            <a href="'.$item['link'].'" class="alink" target="_blank">
                                '.$item['title'].'
                            </a>
                            <div class="btn">
                                '.gd_sc(0, $item['id']) . gd_share(0, 1, 'cq', $item['id']).'
                                <a href="'.$item['link'].'" class="gd_buy" target="_blank">
                                    点击进入
                                </a>
                            </div>
                        </div>
                    </li>';
                    $j++;
                }
            ?>
        </ul>
    </div>
</div>
