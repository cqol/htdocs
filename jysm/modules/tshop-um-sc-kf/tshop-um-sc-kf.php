<div class="tb-module tshop-um tshop-um-sc-kf">
    <a class="sc J_TokenSign" target="_blank" title="�ղص���" href="<? echo $uriManager->favoriteLink() ?>" style=" <? bg_img($_MODULE['sc']) ?>"></a>
    <p class="mk_hd">
        <span>
            �ͷ�����
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
                        echo '<li>'.$uriManager->supportTag($ww_id[$j],"�����ϵ��",2).'<span>'.$ww_name[$j].'</span></li>';
                    }
                }else{
                    $ww_id=$_user->nick;
                    for($j=0;$j<count($ww_name);$j++){
                        echo '<li>'.$uriManager->supportTag($ww_id,"�����ϵ��",2).'<span>'.$ww_name[$j].'</span></li>';
                    }
                }
                echo '	</ul>
                </div>';
            }
        }
        if($_MODULE['time']){
            echo '<p class="time"><strong>����ʱ��:</strong>'.$_MODULE['time'].'</p>';
        }
        ?>
    </div>
</div>
