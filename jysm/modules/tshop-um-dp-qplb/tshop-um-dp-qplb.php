<?
if($_MODULE['pic_h']){
    $top='top:'.(($_MODULE["pic_h"]-80)/2).'px';
}
?>
<div class="tb-module tshop-um tshop-um-dp-qplb">
    <? if($_MODULE['lb_ys']==0){ ?>
        <div class="mk_bd J_TWidget" data-widget-type="Carousel" data-widget-config="{'effect':'<?php echo $_MODULE["effect"];?>','easing':'<?php echo $_MODULE["easing"];?>','autoplay': <?php echo $_MODULE["autoplay"];?>,'duration':<?php echo $_MODULE["duration"];?>,'interval':<?php echo $_MODULE["interval"];?>,'navCls':'lb_nav','contentCls':'lb_bd','prevBtnCls':'prev','nextBtnCls':'next' }" style=" <?php height($_MODULE["pic_h"]) ?>">
            <div class="main" style=" <?php height($_MODULE["pic_h"]) ?>">
                <ul class="lb_bd">
                    <?php
                    $pic=explode("|",$_MODULE['pic']);
                    $link=explode("|",$_MODULE['link']);
                    if($_MODULE['pic']){
                        $num = count($pic);
                    }else{
                        $num=4;
                    }
                    for($i=0;$i<$num;$i++){
                        echo '<li><a target="_blank" href="'.$link[$i].'" style="'.height($_MODULE["pic_h"]).bg_img($pic[$i]).'"></a></li>';
                    }
                    ?>
                </ul>
            </div>

            <div class="nav">
                <ul class="lb_nav" style="width:<? echo $num*20 ?>px;">
                    <?php
                    for($n=0;$n<$num;$n++){
                        if($n==0){
                            echo '<li class="ks-active"></li>';
                        }else{
                            echo '<li></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <?
                echo '<a title="上一张" class="prev" style="'.$top.'"></a>
        	        <a title="下一张" class="next" style="'.$top.'"></a>';
            ?>

        </div>
    <? }
        if($_MODULE['zdy_html']){
        echo '<div class="zdy_html">'.$_MODULE['zdy_html'].'</div>';
    }
    ?>

    <!--全频背景-->
    <?
    if($_MODULE['bg_off']==0){
        echo '<div class="gd_bg" style="'.bg_img($_MODULE["bg_pic"],1).'background-repeat:'.$_MODULE["bg_repeat"].';background-position:'.$_MODULE["bg_fs"].';background-attachment:'.$_MODULE["bg_att"].'; top:0px;left:50%;margin-left:-953px;width:2500px;height:100000px; position: absolute;"></div>';
    }
    ?>
</div>
