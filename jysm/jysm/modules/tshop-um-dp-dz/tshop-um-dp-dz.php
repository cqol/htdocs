<div class="tb-module tshop-um tshop-um-dp-dz">
    <div class="wrap_hd" style="<? bg_img($_MODULE['dz_pic'])?>">
    </div>
    <div class="hd_nav">
        <ul>
            <li class="frist"><a target="_blank" href="http://shop<? echo $_shop->id ?>.taobao.com/search.htm?search=y">所有分类</a></li>
            <? if ($_MODULE['dh_nav']) {?>
                <?
                $dh_nav=explode('|',$_MODULE['dh_nav']);
                $dh_link=explode('|',$_MODULE['dh_link']);
                $dh_tb=explode('|',$_MODULE['dh_tb']);
                $nav_num=count($dh_nav);
                for($i=0;$i<$nav_num;$i++){
                    echo '<li class="item'.$dh_tb[$i].'"><a target="_blank" href="'.$dh_link[$i].'">'.$dh_nav[$i].'</a></li>';
                }
                ?>
            <? } ?>
        </ul>
        <div class="hd_search">
            <div class="words">
                <a href="#" target="_blank">htc</a>
                <a href="#" target="_blank">小米</a>
                <a href="#" target="_blank">魅族</a>
            </div>
            <form method="get" action="http://shop<? echo $_shop->id ?>.taobao.com/" name="SearchForm">
                <input type="hidden" value="" name="userId">
                <input type="hidden" value="<? echo $_shop->id ?>" name="shopId">
                <input type="hidden" value="" name="view_type">
                <input type="hidden" value="" name="order_type">
                <input type="hidden" value="y" name="search">
                <input type="text" value="" name="keyword" class="keyword" size="12">
                <button type="submit" title="搜索" class="button"></button>
            </form>
        </div>
    </div>



</div>
