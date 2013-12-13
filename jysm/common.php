<?php
function ewm($width,$height,$url,$xs) { //****二维码****
    echo '<img src="http://chart.apis.google.com/chart?chs='.$width.x.$height.'&cht=qr&chl='.$url.'" style="'.$xs.'" />';
}
function proewm($width,$height,$id) {
    echo '<img src="http://gqrcode.alicdn.com/img?type=ci&item_id='.$id.'&v=1&w='.$width.'&h='.$height.'" />';
}

function margin_b($h){//****模块间距*****
    if($h !== null){
        if($h==0){
            echo 'margin-bottom:0;';
        }else if($h){
            echo 'margin-bottom:'.$h.'px;';
        }
    }
}
function height($h){//****高度*****
    if($h !== null){
        if($h==0){
            echo 'height:0;';
        }else if($h){
            echo 'height:'.$h.'px;';
        }
    }
}
function width($w){//****宽度*****
    if($w !== null){
        if($w==0){
            echo 'width:0;';
        }else if($w){
            echo 'width:'.$w.'px;';
        }
    }
}
function bg_c($bg){//****背景颜色*****
    if($bg){
        echo 'background-color:'.$bg.';';
    }
}
function bg_img($bg_img,$type){//****背景图片*****
    if($bg_img){
        if($type==0){
            echo 'background:url('.$bg_img.') no-repeat center center;';
        }else{
            echo 'background:url('.$bg_img.') no-repeat;';
        }
    }
}
function bk_c($bk){//****边框颜色*****
    if($bk){
        echo 'border-color:'.$bk.';';
    }
}
function font_c($color){//****文字颜色*****
    if($color){
        echo 'color:'.$color.';';
    }
}
function font_s($size){//****文字大小*****
    if($size){
        echo 'font-size:'.$size.'px;';
    }
}
function font_w($weight){//****文字粗细*****
    if($weight){
        echo 'font-weight:'.$weight.';';
    }
}
function font_f($family){//****文字字体*****
    if($family){
        echo 'font-family:'.$family.';';
    }
}
function filter($num){//****透明度*****
    if($num){
        echo 'filter:progid:DXImageTransform.Microsoft.Alpha(opacity='.$num.');opacity:'.($num/100).';-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity='.$num.')"'.';';
    }
}


/*** 喜欢宝贝   $lk_xs为是否显示参数  $id为宝贝id  ****/
function gd_like($id){
    echo '<div class="gd_like sns-widget" data-like=\'{"skinType":2,"type":2,"key":"'.$id.'","comment":"亲，这个很赞哦..."}\'></div>';
}
/*** 喜欢宝贝   $lk_xs为是否显示参数  $id为宝贝id  ****/
function c_lick($id,$ms){
    echo '<span class="like sns-widget" data-like=\'{"skinType":2,"type":2,"key":"'.$id.'","comment":"亲，这个很赞哦..."}\'>'.$ms.'</span>';
}

/*** 分享宝贝   $sh_xs为是否显示参数  $id为宝贝id  $title为宝贝名称  ****/
function gd_share($sh_xs,$type,$title,$id,$ms,$bg_pic,$bg_c,$font_c){
    if($sh_xs==0){
        echo '<div class="gd_share sns-widget" title="分享给好友" data-sharebtn=\'{"type":"'.$type.'","title":"'.$title.'","key":"'.$id.'","comment":"亲,这个很赞哦...","client_id":"68","skinType":"1"}\' style="'.bg_img($bg_pic,0).bg_c($bg_c).font_c($font_c).'"><span>'.$ms.'</span></div>';
    }
}
/*** 分享宝贝   $sh_xs为是否显示参数  $id为宝贝id  $title为宝贝名称  ****/
function c_share($sh_xs,$type,$title,$id,$ms){
    if($sh_xs==0){
        echo '<span class="share sns-widget" title="分享给好" data-sharebtn=\'{"type":"'.$type.'","title":"'.$title.'","key":"'.$id.'","comment":"亲,这个很赞哦...","client_id":"68","skinType":"1"}\'>'.$ms.'</span>';
    }
}

/*** 喜欢收藏   $lk_xs为是否显示参数  $id为宝贝id  ****/
function gd_sc($sc_xs,$id,$ms,$bg_pic,$bg_c,$font_c){
    if($sc_xs==0){
        echo '<a class="gd_sc" title="收藏宝贝" href="http://favorite.taobao.com/popup/add_collection.htm?id='.$id.'&amp;itemtype=1" target="_blank" style="'.bg_img($bg_pic,0).bg_c($bg_c).font_c($font_c).'"><span>'.$ms.'</span></a>';
    }
}

/*** 喜欢收藏   $lk_xs为是否显示参数  $id为宝贝id  ****/
function c_sc($sc_xs,$id,$ms){
    if($sc_xs==0){
        echo '<a class="mark" title="收藏宝贝" href="http://favorite.taobao.com/popup/add_collection.htm?id='.$id.'" target="_blank">'.$ms.'</a>';
    }
}

/*** 购物车   $car_xs为是否显示参数  $id为宝贝id  ****/
function gd_car($car_xs,$link,$ms,$bg_pic,$bg_c,$font_c){
    if($car_xs==0){
        echo '<a href="'.$link.'" title="加入购物车" target="_blank" class="gd_car J_CartPluginTrigger" style="'.bg_img($bg_pic,0).bg_c($bg_c).font_c($font_c).'"><span>'.$ms.'</span></a>';
    }
}

/*** 折扣价 $qz为价格前缀  $discountPrice为折扣价  $price现价   ****/
function price_zk($qz,$discountPrice,$price,$color1,$color2){
    if($discountPrice==$price) {	//折扣价不存在
        echo '<span class="rmb" style="'.font_c($color1).'">'.$qz.'</span><em class="yuanjia" style="'.font_c($color1).'">'.$price.'</em>';
    }else{
        echo '<span class="rmb" style="'.font_c($color1).'">'.$qz.'</span><em class="yuanjia" style="'.font_c($color1).'">'.number_format($discountPrice,0).'.00'.'</em><i style="'.font_c($color2).'">原价:</i><del style="'.font_c($color2).'">'.$price.'</del>';
    }
}
function price_cqol($qz,$discountPrice,$price){
    if($discountPrice==$price) {	//折扣价不存在
        echo '<span class="price" style="">'.$qz.'￥<span>'.$price.'</span></span>';
    }else{
        echo '<span class="price" style="">'.$qz.'￥<span>'.$discountPrice.'</span></span><del class="del" style="">RMB '.$price.'</del>';

    }
}
function pop_str($weight){//****pop_str*****
    $popleft = -(246+$weight*239);
    if($weight){
        echo "{'trigger':'.a".$weight."','align':{'node':'.a".$weight."','offset':['".$popleft."',58],'points':['lb','lb']}}";
    }
}
function getItem($id, $imgSize) {

}
/*** 宝贝选择器  $ids宝贝id,$imgSize为图片大小,$sortType排序规则，$num没选择宝贝时显示个数  ****/
function getItems($ids,$imgSize,$sortType,$num){
    global $itemManager, $uriManager;
    $arrayIds = is_string($ids) ? explode(',',$ids) : (array) $ids; //$ids转换成数组
    $itemsObj = !empty($ids) ? $itemManager->queryByIds($arrayIds,$sortType) : $itemManager->queryByKeyword(' ',$sortType,$num);
    $items = array();	//建立数组，用于存储宝贝的相关信息
    $n=0;
    foreach ($itemsObj as $item) {
        if($item->exist){
            $heya['id'] = $item->id;
            $heya['title'] = $item->title;
            $heya['price'] = $item->price;
            $heya['discountPrice'] = $item->discountPrice;
            $heya['soldCount'] = $item->soldCount;
            $heya['collectedCount'] = $item->collectedCount;
            $heya['commentCount'] = $item->commentCount;
            $heya['pic'] = $item->getPicUrl($imgSize);
            $heya['link'] = $uriManager->detailURI($item);
        }
        $items[]=$heya;
        $n++;
    }
    return $items;
}
?>


