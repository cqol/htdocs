<div class="tb-module tshop-um tshop-um-sc-sp">
    <div class="wrap_bd">
        <div class="vido">
            <embed allowscriptaccess="never" flashvars="scene=taobao_shop" height="225"
                   src="<? echo $_MODULE['sp']?>"
                   type="application/x-shockwave-flash" width="345"/>
        </div>
        <div class="img">
            <ul>
                <?

            for ($i=1; $i<2; $i++) {
                echo '<li>
                                <a href="'. $_MODULE['link'.$i].'" class="alink">
                                    <strong>'. $_MODULE['yw'.$i].'</strong>
                                    <em>'. $_MODULE['zw'.$i].'</em>
                                    <img src="'. $_MODULE['img'.$i].'"/>
                                </a>
                            </li>';
            }
            ?>
            </ul>
        </div>
    </div>
</div>
