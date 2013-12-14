<div class="tb-module tshop-um tshop-um-sc-dapei">
    <div class="wrap_bd">
        <div class="bg_left">
        </div>
        <div class="main_left">
            <?
            $pro = getItems($_MODULE['items1'], 320, 'hotsell', 1)[0];
            echo '<div>
                        <a href="'.$pro['link'].'" class="alink" target="_blank"
                           style="'.bg_img($pro['pic']).'"></a>
                    </div>
                    <h3 class="pro_name">
                        '.$_MODULE['bt1'].'
                    </h3>

                    <div class="buy">
                        <p class="buy_rmb"><span>��</span>'.$pro['price'].'</p>
                        <a href="'.$pro['link'].'" target="_blank" class="buy_btn"></a>
                    </div>
                    <div class="ewm">
                        '.proewm(80, 80, $pro['id']).'
                    </div>';
            ?>
        </div>

        <div class="main_right">
            <div class="item_box">
                <ul>
                    <?
                    $items=getItems($_MODULE['items'],160,$_MODULE['px'],4);
                    foreach($items as $key => $item) {
                        echo '<li class="item_pro">
                                    <a href="'.$item['link'].'" target="_blank" class="alink" style="'.bg_img($item['pic']).'">
                                    </a>
                                    <p>'.$_MODULE['qz'].'��'.$item['price'].'Ԫ</p>
                                </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
