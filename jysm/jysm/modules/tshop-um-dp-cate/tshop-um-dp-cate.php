
<div class="tb-module tshop-um tshop-um-dp-cate">
    <div class="pop_nav J_TWidget" data-widget-type="Popup" data-widget-config="{
          'trigger':'.frist',
          'align':{
                  'node':'.frist',
                  'offset':[0,0],
                  'points':['bt','cc']
                  }
        }">

        <div class="J_TWidget pop_nav_wrap" data-widget-type="Accordion" data-widget-config="{
            'triggerType': 'click',

            'triggerType': 'mouse'
        }">
            <?php
            $subCategories = $shopCategoryManager->queryAll();
            $i=0;

            foreach($subCategories as $shopCategory){

                if ($i%2 == 0) {
                    if ($i==0) {
                        echo '<div class="ks-switchable-trigger ks-active pop_tab_hd">';
                    } else {
                        echo '<div class="ks-switchable-trigger pop_tab_hd">';
                    }
                } else {
                    echo '<div class="ks-switchable-trigger pop_tab_hd fushu">';
                }
                echo '<a target="_blank" href="'.$uriManager->shopCategoryURI ($shopCategory).'">'.$shopCategory->name.'</a>
                        </div>';


                if ($i==0) {
                    echo '<div class="ks-switchable-panel pop_tab_bd">';
                } else {
                    echo '<div class="ks-switchable-panel pop_tab_bd" style="display: none;">';
                }
                $cc = $shopCategoryManager->querySubCategories($shopCategory->id);
                foreach($cc as $subcc){
                    echo '<a href="'.$uriManager->shopCategoryURI($subcc).'" target="_blank">'.$subcc->name.'</a>';
                }

                echo '</div>';
                $i++;
            }
            ?>
        </div>
    </div>
</div>
