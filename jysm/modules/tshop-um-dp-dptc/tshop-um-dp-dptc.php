<div class="tb-module tshop-um tshop-um-dp-dptc">
    <?
    if ($_MODULE['sc_show'] == 0) {?>
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
    <?}
    ?>

    <div class="wrap_bd">
        <?
        $gd_num=$_MODULE['gd_num'];
        for($i=1;$i<=$gd_num;$i++){
            $items=getItems($_MODULE['items'.$i],230,'hotsell',5);
            $zw = $_MODULE['zw'.$i];
            $yw = $_MODULE['yw'.$i];
            $bz=rand(0,1000);
            echo '<dl>
                    <dt class="bd_title">
                        <p class="zw">'.$zw.'</p>
                        <p class="yw">'.$yw.'</p>
                    </dt>';
            $j=0;
            foreach($items as $key => $item){
                if($_MODULE['pic'.$i]){
                    $pic=$_MODULE['pic'.$i];
                }else{
                    $pic=$item['pic'];
                }
                if($_MODULE['bt'.$i]){
                    $title=$_MODULE['bt'.$i];
                }else{
                    $title=$item['title'];
                }
                $djs = "{'endTime':'". $_MODULE['time'.$j]."','interval':1000,'timeRunCls':'.ks-countdown-run','timeUnitCls':{'d':'.ks-d','h':'.ks-h','m':'.ks-m','s':'.ks-s','i':'.ks-i'},'minDigit':1,'timeEndCls':'.ks-countdown-end'}";
                echo '<dd class="bd_item gd_fdj'.$bz.'cq'.$j.'">
                            <img width="135" height="135" src="'.$pic.'" />
                        </dd>';
                echo '<div class="J_TWidget item_pop" data-widget-type="Popup" data-widget-config="{
                      \'trigger\':\'.gd_fdj'.$bz.'cq'.$j.'\',
                      \'align\':{
                              \'node\':\'.gd_fdj'.$bz.'cq'.$j.'\',
                              \'offset\':[0,0],
                              \'points\':[\'cc\',\'cc\']
                              }
                        }"><a href="'.$item['link'].'" class="alink" target="_blank" style="'.bg_img($item['pic']).'">
                            </a>
                            <a href="'.$item['link'].'" class="title" target="">
                                '.$title.'
                            </a>
                            <p class="pro_price">
                                '.price_cqol('',$item['discountPrice'],$item['price']).'
                            </p>
                            <div class="btn">
                                '.gd_sc(0, $item['id']) .'
                                <a href="'.$item['link'].'" class="gd_buy" target="_blank">
                                    点击进入
                                </a>
                            </div>
                            <div class="msg">';
                            $rates = $rateManager->queryAuctionRates($item);
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
                                    echo '<p class="msg_wrods">
                                            ' . $rate->feedback . '
                                            </p><p class="msg_name">' . $rate->raterNick . '</p>';
                                }
                            }else {
                                echo '<p class="msg_wrods" style="font-size: 20px; text-align: center;">
                                            暂无评价
                                            </p>';
                            }
                            echo '</div></div>';
                $j++;
            }
            echo '</dl>';
        }
        ?>
    </div>
</div>
