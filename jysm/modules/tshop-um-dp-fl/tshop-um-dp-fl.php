
<div class="tb-module tshop-um tshop-um-dp-fl">
    <div class="warp_bd">
        <?
        $items_num=$_MODULE['items_num'];
        ?>
        <div class="bd_right" style="<? echo width($items_num*138) ?>">
            <?php
            for($i=0;$i<$items_num;$i++){
                $json = $_MODULE['category'.$i];		  /*通过PHP解析json数据生成JSON数组*/
                $jsonArray = json_decode($json);
                $fl_tb=explode('|',$_MODULE['fl_tb'.$i]);
                echo '<dl class="sy_shu'.$_MODULE['fl_style'].'">';
                if(count($jsonArray)==0){
                    $fl_sd=explode('|',$_MODULE['fl_sd'.$i]);
                    $fl_link=explode('|',$_MODULE['fl_link'.$i]);
                    $sub_num=count($fl_sd);

                    echo '<dt ><a target="_blank" href="'.$fl_link[0].'">'.$fl_sd[0].'</a></dt>';

                    for($m=1;$m<$sub_num;$m++){

                        echo '<dd class="item'.$fl_tb[$m].'"><a target="_blank" href="'.$fl_link[$m].'">'.$fl_sd[$m].'</a></dd>';
                    }
                }else {
                    foreach($jsonArray as $jsonObject){ /* 根据json对象获取rid属性的属性值即得到一级类目 */
                        $shopCategory = $shopCategoryManager->queryById($jsonObject->{rid});
                        echo '<dt ><a target="_blank" href="'.$uriManager->shopCategoryURI($shopCategory). '">'.$shopCategory->name.'</a></dt>';

                        $array = explode(",",$jsonObject->{childIds});   /*二级类目是通过','分隔的字符串 */
                        $j=1;
                        foreach($array as $id){
                            $subShopCategory = $shopCategoryManager->queryById($id);
                            echo '<dd class="item'.$fl_tb[$j].'"><a target="_blank" href="'.$uriManager->shopCategoryURI($subShopCategory).'">'.$subShopCategory->name.'</a></dt>';
                            $j++;
                        }
                    }
                }
                echo '</dl>';
            }
            ?>
        </div>
    </div>
</div>
