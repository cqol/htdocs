<div class="tb-module tshop-um tshop-um-sc-kf">
    <a class="sc J_TokenSign" target="_blank" title="收藏店铺" href="<? echo $uriManager->favoriteLink() ?>" style=" <? bg_img($_MODULE['sc']) ?>"></a>
    <p class="mk_hd">
        <span>
            客服中心
        </span>
    </p>
    <div class="cont">
        <?php
        for($i=1;$i<=3;$i++){
            if($_MODULE['ww_bt'.$i]){
                echo '<div class="line">
                        <h3>'.$_MODULE['ww_bt'.$i].'</h3>
                        <ul>';
                $ww_name=explode('|',$_MODULE['ww_name'.$i]);
                if($_MODULE['ww_id'.$i]){
                    $ww_id=explode('|',$_MODULE['ww_id'.$i]);
                    for($j=0;$j<count($ww_name);$j++){
                        echo '<li>'.$uriManager->supportTag($ww_id[$j],"点击联系我",2).'<span>'.$ww_name[$j].'</span></li>';
                    }
                }else{
                    $ww_id=$_user->nick;
                    for($j=0;$j<count($ww_name);$j++){
                        echo '<li>'.$uriManager->supportTag($ww_id,"点击联系我",2).'<span>'.$ww_name[$j].'</span></li>';
                    }
                }
                echo '	</ul>
                </div>';
            }
        }
        if($_MODULE['time']){
            echo '<p class="time"><strong>工作时间:</strong>'.$_MODULE['time'].'</p>';
        }
        ?>
    </div>
</div>
