
<div class="tb-module tshop-um tshop-um-pd-ft">
    <div class="wrap_hd">
        <ul>
            <li class="ser_item">
                <span class="icon icon1"></span>
                <p class="msg">
                    ���ŵ���<br>ֵ������
                </p>
            </li>
            <li class="ser_item">
                <span class="icon icon2"></span>
                <p class="msg">
                    Ʒ����Ʒ<br>�������
                </p>
            </li>
            <li class="ser_item">
                <span class="icon icon3"></span>
                <p class="msg">
                    �����ʵ<br>Ʒ����һ
                </p>
            </li>
            <li class="ser_item">
                <span class="icon icon4"></span>
                <p class="msg">
                    ��������<br>���ƿͷ�
                </p>
            </li>
            <li class="ser_item">
                <span class="icon icon5"></span>
                <p class="msg">
                    <a class="sc J_TokenSign" target="_blank" title="�ղص���" href="<? echo $uriManager->favoriteLink() ?>"></a>
                </p>
            </li>
        </ul>
    </div>
    <div class="wrap_bd">
        <div class="dp_active">
            <ul>
                <?
                    if($_MODULE['name']){

                        $name=explode('|',$_MODULE['name']);
                        $link=explode('|',$_MODULE['link']);
                        for($i=0;$i<count($name);$i++){
                            echo '<li>
                                    <a href="'.$link[$i].'" target="_blank">'.$name[$i].'</a>
                                </li>';
                        }

                    }
                ?>
            </ul>
            <ul>
                <?
                if($_MODULE['name']){

                    $name=explode('|',$_MODULE['name1']);
                    $link=explode('|',$_MODULE['link1']);
                    for($i=0;$i<count($name);$i++){
                        echo '<li>
                                    <a href="'.$link[$i].'" target="_blank">'.$name[$i].'</a>
                                </li>';
                    }

                }
                ?>
            </ul>
            <ul>
                <?
                if($_MODULE['name']){

                    $name=explode('|',$_MODULE['name2']);
                    $link=explode('|',$_MODULE['link2']);
                    for($i=0;$i<count($name);$i++){
                        echo '<li>
                                    <a href="'.$link[$i].'" target="_blank">'.$name[$i].'</a>
                                </li>';
                    }

                }
                ?>
            </ul>
        </div>
        <div class="dp_ww">
            <ul>
                <?php
                for($i=1;$i<3;$i++){
                    if($i==1){
                        echo '<li>��ǰ:</li>';
                    }else{
                        echo '<li>�ۺ�:</li>';
                    }
                    if($_MODULE['ww_id'.$i]){
                        $ww_id=explode('|',$_MODULE['ww_id'.$i]);
                        for($j=0;$j<count($ww_id);$j++){
                            echo '<li>'.$uriManager->supportTag($ww_id[$j],"????????",2).'</li>';
                        }
                    }else{
                        $ww_id=$_user->nick;
                        for($j=0;$j<5;$j++){
                            echo '<li>'.$uriManager->supportTag($ww_id,"????????",2).'</li>';
                        }
                    }
                }
                ?>
            </ul>
            <p class="ts"><? echo $_MODULE['ts'] ?></p>

        </div>
        <div class="lebo">
            <a href="<? echo $_MODULE['lebolink']?>" target="_blank" style="<? bg_img($_MODULE['lebo'])?>"></a>
        </div>
        <div class="ewm">
            <span>
                <? echo ewm('85', '85', $_shop->id, '') ?>
            </span>
            <p>��ע����<br> ��ע�ֻ����߶�</p>
        </div>
    </div>
</div>
