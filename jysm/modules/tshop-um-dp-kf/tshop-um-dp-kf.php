
<div class="tb-module tshop-um tshop-um-dp-kf">
    <div class="wrap_bd">
        <div class="ke_logo">
        </div>

        <div class="ww_box">
            <ul class="ww_sq">
                <li class="ww_font">��ǰ:</li>
                <?
                    $ww_name=explode('|',$_MODULE['ww_name1']);
                    $ww_pic=explode('|',$_MODULE['ww_pic1']);
                    if($_MODULE['ww_id1']){
                        $ww_id=explode('|',$_MODULE['ww_id1']);
                        for($j=0;$j<count($ww_name);$j++){
                            echo '<li><span>'.$ww_name[$j].'</span>'.$uriManager->supportTag($ww_id[$j],"�����ϵ��",2).'
                                </li>';

                        }
                    }else{
                        $ww_id=$_user->nick;
                        for($j=0;$j<count($ww_name);$j++){
                            echo '<li><span>'.$ww_name[$j].'</span>'.$uriManager->supportTag($ww_id,"�����ϵ��",2).'
                                </li>';
                        }
                    }
                ?>
            </ul>
            <ul class="ww_sq">
                <li class="ww_font">�ۺ�:</li>
                <?
                $ww_name=explode('|',$_MODULE['ww_name2']);
                $ww_pic=explode('|',$_MODULE['ww_pic2']);
                if($_MODULE['ww_id2']){
                    $ww_id=explode('|',$_MODULE['ww_id2']);
                    for($j=0;$j<count($ww_name);$j++){
                        echo '<li><span>'.$ww_name[$j].'</span>'.$uriManager->supportTag($ww_id[$j],"�����ϵ��",2).'
                            </li>';
                    }
                }else{
                    $ww_id=$_user->nick;
                    for($j=0;$j<count($ww_name);$j++){
                        echo '<li><span>'.$ww_name[$j].'</span>'.$uriManager->supportTag($ww_id,"�����ϵ��",2).'
                            </li>';
                    }
                }
                ?>
            </ul>
        </div>
        <div class="wk_time">
            <?
                if($_MODULE['time']){
                    echo '<p>����ʱ�䣺</p>
                        <span>'.$_MODULE['time'].'</span>';
                }
            ?>
        </div>
    </div>
</div>
