<?php
function ewm($width,$height,$url,$xs) { //****��ά��****
    echo '<img src="http://chart.apis.google.com/chart?chs='.$width.x.$height.'&cht=qr&chl='.$url.'" style="'.$xs.'" />';
}
function proewm($width,$height,$id) {
    echo '<img src="http://gqrcode.alicdn.com/img?type=ci&item_id='.$id.'&v=1&w='.$width.'&h='.$height.'" />';
}

function margin_b($h){//****ģ����*****
    if($h !== null){
        if($h==0){
            echo 'margin-bottom:0;';
        }else if($h){
            echo 'margin-bottom:'.$h.'px;';
        }
    }
}
function height($h){//****�߶�*****
    if($h !== null){
        if($h==0){
            echo 'height:0;';
        }else if($h){
            echo 'height:'.$h.'px;';
        }
    }
}
function width($w){//****���*****
    if($w !== null){
        if($w==0){
            echo 'width:0;';
        }else if($w){
            echo 'width:'.$w.'px;';
        }
    }
}
function bg_c($bg){//****������ɫ*****
    if($bg){
        echo 'background-color:'.$bg.';';
    }
}
function bg_img($bg_img,$type){//****����ͼƬ*****
    if($bg_img){
        if($type==0){
            echo 'background:url('.$bg_img.') no-repeat center center;';
        }else{
            echo 'background:url('.$bg_img.') no-repeat;';
        }
    }
}
function bk_c($bk){//****�߿���ɫ*****
    if($bk){
        echo 'border-color:'.$bk.';';
    }
}
function font_c($color){//****������ɫ*****
    if($color){
        echo 'color:'.$color.';';
    }
}
function font_s($size){//****���ִ�С*****
    if($size){
        echo 'font-size:'.$size.'px;';
    }
}
function font_w($weight){//****���ִ�ϸ*****
    if($weight){
        echo 'font-weight:'.$weight.';';
    }
}
function font_f($family){//****��������*****
    if($family){
        echo 'font-family:'.$family.';';
    }
}
function filter($num){//****͸����*****
    if($num){
        echo 'filter:progid:DXImageTransform.Microsoft.Alpha(opacity='.$num.');opacity:'.($num/100).';-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity='.$num.')"'.';';
    }
}


/*** ϲ������   $lk_xsΪ�Ƿ���ʾ����  $idΪ����id  ****/
function gd_like($id){
    echo '<div class="gd_like sns-widget" data-like=\'{"skinType":2,"type":2,"key":"'.$id.'","comment":"�ף��������Ŷ..."}\'></div>';
}
/*** ϲ������   $lk_xsΪ�Ƿ���ʾ����  $idΪ����id  ****/
function c_lick($id,$ms){
    echo '<span class="like sns-widget" data-like=\'{"skinType":2,"type":2,"key":"'.$id.'","comment":"�ף��������Ŷ..."}\'>'.$ms.'</span>';
}

/*** ������   $sh_xsΪ�Ƿ���ʾ����  $idΪ����id  $titleΪ��������  ****/
function gd_share($sh_xs,$type,$title,$id,$ms,$bg_pic,$bg_c,$font_c){
    if($sh_xs==0){
        echo '<div class="gd_share sns-widget" title="���������" data-sharebtn=\'{"type":"'.$type.'","title":"'.$title.'","key":"'.$id.'","comment":"��,�������Ŷ...","client_id":"68","skinType":"1"}\' style="'.bg_img($bg_pic,0).bg_c($bg_c).font_c($font_c).'"><span>'.$ms.'</span></div>';
    }
}
/*** ������   $sh_xsΪ�Ƿ���ʾ����  $idΪ����id  $titleΪ��������  ****/
function c_share($sh_xs,$type,$title,$id,$ms){
    if($sh_xs==0){
        echo '<span class="share sns-widget" title="�������" data-sharebtn=\'{"type":"'.$type.'","title":"'.$title.'","key":"'.$id.'","comment":"��,�������Ŷ...","client_id":"68","skinType":"1"}\'>'.$ms.'</span>';
    }
}

/*** ϲ���ղ�   $lk_xsΪ�Ƿ���ʾ����  $idΪ����id  ****/
function gd_sc($sc_xs,$id,$ms,$bg_pic,$bg_c,$font_c){
    if($sc_xs==0){
        echo '<a class="gd_sc" title="�ղر���" href="http://favorite.taobao.com/popup/add_collection.htm?id='.$id.'&amp;itemtype=1" target="_blank" style="'.bg_img($bg_pic,0).bg_c($bg_c).font_c($font_c).'"><span>'.$ms.'</span></a>';
    }
}

/*** ϲ���ղ�   $lk_xsΪ�Ƿ���ʾ����  $idΪ����id  ****/
function c_sc($sc_xs,$id,$ms){
    if($sc_xs==0){
        echo '<a class="mark" title="�ղر���" href="http://favorite.taobao.com/popup/add_collection.htm?id='.$id.'" target="_blank">'.$ms.'</a>';
    }
}

/*** ���ﳵ   $car_xsΪ�Ƿ���ʾ����  $idΪ����id  ****/
function gd_car($car_xs,$link,$ms,$bg_pic,$bg_c,$font_c){
    if($car_xs==0){
        echo '<a href="'.$link.'" title="���빺�ﳵ" target="_blank" class="gd_car J_CartPluginTrigger" style="'.bg_img($bg_pic,0).bg_c($bg_c).font_c($font_c).'"><span>'.$ms.'</span></a>';
    }
}

/*** �ۿۼ� $qzΪ�۸�ǰ׺  $discountPriceΪ�ۿۼ�  $price�ּ�   ****/
function price_zk($qz,$discountPrice,$price,$color1,$color2){
    if($discountPrice==$price) {	//�ۿۼ۲�����
        echo '<span class="rmb" style="'.font_c($color1).'">'.$qz.'</span><em class="yuanjia" style="'.font_c($color1).'">'.$price.'</em>';
    }else{
        echo '<span class="rmb" style="'.font_c($color1).'">'.$qz.'</span><em class="yuanjia" style="'.font_c($color1).'">'.number_format($discountPrice,0).'.00'.'</em><i style="'.font_c($color2).'">ԭ��:</i><del style="'.font_c($color2).'">'.$price.'</del>';
    }
}
function price_cqol($qz,$discountPrice,$price){
    if($discountPrice==$price) {	//�ۿۼ۲�����
        echo '<span class="price" style="">'.$qz.'��<span>'.$price.'</span></span>';
    }else{
        echo '<span class="price" style="">'.$qz.'��<span>'.$discountPrice.'</span></span><del class="del" style="">RMB '.$price.'</del>';

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
/*** ����ѡ����  $ids����id,$imgSizeΪͼƬ��С,$sortType�������$numûѡ�񱦱�ʱ��ʾ����  ****/
function getItems($ids,$imgSize,$sortType,$num){
    global $itemManager, $uriManager;
    $arrayIds = is_string($ids) ? explode(',',$ids) : (array) $ids; //$idsת��������
    $itemsObj = !empty($ids) ? $itemManager->queryByIds($arrayIds,$sortType) : $itemManager->queryByKeyword(' ',$sortType,$num);
    $items = array();	//�������飬���ڴ洢�����������Ϣ
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


