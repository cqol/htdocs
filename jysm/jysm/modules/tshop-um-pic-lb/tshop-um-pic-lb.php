<?php
if($_MODULE['mk_region']){
    $region=$_MODULE['mk_region'];
}else{
    $region=$regionWidth;
}
?>
<div class="tb-module tshop-um tshop-um-pic-lb" style=" <? width($region) ?>">
    <div class="mk_bd J_TWidget mk_<? echo $region ?> " data-widget-type="Carousel" data-widget-config="{'effect':'<?php echo $_MODULE["effect"];?>','easing':'<?php echo $_MODULE["easing"];?>','autoplay': <?php echo $_MODULE["autoplay"];?>,'duration':<?php echo $_MODULE["duration"];?>,'interval':<?php echo $_MODULE["interval"];?>,'navCls':'lb_nav','contentCls':'lb_bd' }" style=" <? height($_MODULE['pic_h']) ?>" >
        <div class="main"  style=" <? height($_MODULE['pic_h']) ?>">
            <ul class="lb_bd">
                <?php
                $num = $_MODULE['num'];
                for($i=1;$i<=$num;$i++){
                    echo '<li><a target="_blank" href="'.$_MODULE['link'.$i].'" style="'.width($region).height($_MODULE['pic_h']).bg_img($_MODULE['pic'.$i]).'"></a></li>';
                }
                ?>
            </ul>
        </div>
        <? if($_MODULE['nav_ms']==1){
            $pic_bt=explode('|',$_MODULE['pic_bt']);
            ?>
            <div class="nav1">
                <ul class="lb_nav">
                    <?php

                    for($n=0;$n<$num;$n++){
                        if($n==0){
                            echo '<li class="ks-active" style="width:'.ceil(($region)/$num).'px;">'.$pic_bt[$n].'</li>';
                        }else{
                            echo '<li style="width:'.ceil(($region)/$num).'px;">'.$pic_bt[$n].'</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        <? }else if($_MODULE['nav_ms']==2){ ?>
            <div class="nav2">

                <ul class="lb_nav" style="width:<? echo ($num*34)+20 ?>px;">
                    <?php
                    for($n=1;$n<=$num;$n++){
                        if($n==1){
                            echo '<li class="ks-active">'.$n.'</li>';
                        }else{
                            echo '<li>'.$n.'</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        <? }else if($_MODULE['nav_ms']==3){ ?>
            <ul class="nav3 lb_nav">
                <?php
                for($n=1;$n<=$num;$n++){
                    echo '<li></li>';
                }
                ?>
            </ul>
        <? } ?>
    </div>
</div>
