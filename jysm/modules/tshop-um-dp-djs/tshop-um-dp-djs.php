
<div class="tb-module tshop-um tshop-um-dp-djs">
    <div class="wrap_hd">
        <h3 class="hd_title">
            <?
            echo $_MODULE['head'];
            ?>
        </h3>
        <p class="hd_info">
            <?
            echo $_MODULE['text'];
            ?>
        </p>
        <?
        echo '<a href="'. $_MODULE['link'].'" target="_blank" class="hd_more">
                    '. $_MODULE['more'].'
                </a>';
        ?>

    </div>

    <div class="wrap_bd">
        <ul>
            <li class="item_box">
                <div class="img_warp">
                    <a href="#" class="alink">

                    </a>
                </div>


                <div class="J_TWidget item_time" data-widget-type="Countdown"  data-widget-config="{
                         'endTime': '2013-12-21 11:01:01',
                         'interval': 1000,
                         'timeRunCls': '.ks-countdown-run',
                         'timeUnitCls':{
                            'd': '.ks-d',
                            'h': '.ks-h',
                            'm': '.ks-m',
                            's': '.ks-s',
                            'i': '.ks-i'
                         },
                         'minDigit': 1,
                         'timeEndCls': '.ks-countdown-end'
                    }">
                    <div class="ks-countdown-run">
                        <span class="ks-d"></span>天
                        <span class="ks-h"></span>小时
                        <span class="ks-m"></span>分
                        <!-- 如果有0.1秒级别的变化建议以gif背景图片的形式变化 -->
                        <span class="ks-s"></span>秒
                    </div>
                    <div class="ks-countdown-run"></div>

                    <!-- 倒计时结束时显示-->
                    <!--可以写多个 -->
                    <div class="ks-countdown-end">
                        倒计时结束了,干点什么吧
                        把什么隐藏起来，或者把什么显示出来
                    </div>
                    <div class="ks-countdown-end">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
