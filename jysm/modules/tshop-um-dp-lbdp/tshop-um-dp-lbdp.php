
<div class="tb-module tshop-um tshop-um-dp-lbdp">
    <div class="wrap_bd" data-widget-type="Carousel" data-widget-config="{'effect':'<?php echo $_MODULE["effect"];?>','easing':'<?php echo $_MODULE["easing"];?>','autoplay': <?php echo $_MODULE["autoplay"];?>,'duration':<?php echo $_MODULE["duration"];?>,'interval':<?php echo $_MODULE["interval"];?>,'navCls':'lb_nav','contentCls':'lb_bd' }">
        <div class="nav">
            <ul class="lb_nav">
                <?php
                for($i=1;$i<=3;$i++){
                    if($i==1){
                        echo '<li class="ks-active">'.$_MODULE['title'.$i].'<span class="jt"></span></li>';
                    }else{
                        echo '<li>'.$_MODULE['title'.$i].'<span class="jt"></span></li>';
                    }
                }
                ?>
            </ul>
        </div>
        <div class="main">
            <ul class="lb_bd">
                <?php
                for($i=1;$i<=3;$i++){
                    echo '<li class="item_box"><div class="big_img">
                            <a href="'. $_MODULE['dlink'.$i].'" target="_blank" class="alink" style="'.bg_img($_MODULE['dt'.$i]).'"></a>
                        </div><ul class="s_item">';
                    $items=getItems($_MODULE['items'.$i],190,$_MODULE['px'.$i],6);
                    foreach($items as $item ){
                        echo '<li>
                                <a href="'.$item['link'].'" class="alink" style="'.bg_img($item['pic']).'">

                                </a>
                                <div class="pop">
                                    <div class="mark"></div>
                                    <p class="price">
                                        促销价：'.$item['price'].'元
                                    </p>
                                    <p class="msg">
                                        '.gd_car(0, $item['link'], '购物车').'
                                        '. gd_sc(0, $item['id'],'收藏') .'
                                    </p>
                                </div>
                            </li>';
                    }
                    echo '</ul></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
