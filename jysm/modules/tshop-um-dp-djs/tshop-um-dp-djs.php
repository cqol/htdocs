
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
                        <span class="ks-d"></span>��
                        <span class="ks-h"></span>Сʱ
                        <span class="ks-m"></span>��
                        <!-- �����0.1�뼶��ı仯������gif����ͼƬ����ʽ�仯 -->
                        <span class="ks-s"></span>��
                    </div>
                    <div class="ks-countdown-run"></div>

                    <!-- ����ʱ����ʱ��ʾ-->
                    <!--����д��� -->
                    <div class="ks-countdown-end">
                        ����ʱ������,�ɵ�ʲô��
                        ��ʲô�������������߰�ʲô��ʾ����
                    </div>
                    <div class="ks-countdown-end">
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
