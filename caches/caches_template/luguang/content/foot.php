<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff3088f2b01d7f4641badb5ff777000b&action=lists&catid=26&num=1&moreinfo=1+order%3D&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<div class="footer fix">
    <div class="w1200">
        <div class="footer_top fix">
            <div class="footer_left">
                <img src="<?php echo $data['1']['thumb'];?>">
            </div>
            <div class="footer_main">
                <span>友情链接：</span>

                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3244aa3eeaa54b0456df16d44fbd5356&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>" style="display: block;color: #fff;"><?php echo $v['name'];?></a> </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </ul>
            </div>
            <div class="footer_right">
                <em>
                    <img src="<?php echo $data['1']['qrcode1'];?>">
                    <p>微信公众号</p>
                </em>
                <em>
                    <img src="<?php echo $data['1']['qrcode2'];?>">
                    <p>微信服务号</p>
                </em>
            </div>
        </div>
        <div class="footer_bom">
            <p style="color:#fff">版权所有：<?php echo $data['1']['copyright'];?>    备案号：<?php echo $data['1']['beian'];?>   网址：<?php echo $data['1']['web'];?></p>
        </div>
    </div>
</div>
<div class="function">

    <i class="t"><a href="#anchor" class="topLink"><img src="<?php echo IMG_PATH;?>top.png"></a></i>
    <div class="function_cn fix le">
        <div class="hd fix">
            <ul>
                <li><img src="<?php echo IMG_PATH;?>weix.png"></li>
                <li><img src="<?php echo IMG_PATH;?>qq.png"></li>
                <li class="on"><img src="<?php echo IMG_PATH;?>rex1.png"></li>
            </ul>
        </div>
        <div class="bd fix">
            <ul>
                <li>
                    <em><img src="<?php echo $data['1']['left_qrcode'];?>"></em>
                </li>
            </ul>
            <ul>
                <li>
                        <span>
                            <p>办公室：<?php echo $data['1']['qq1'];?></p>
                            <p>售后：<?php echo $data['1']['qq2'];?></p>
                            <p>销售：<?php echo $data['1']['qq3'];?></p>
                        </span>
                </li>
            </ul>
            <ul>
                <li>
                    <i>Tel：<?php echo $data['1']['right_tel'];?></i>
                </li>
            </ul>
        </div>
    </div>
    <strong><a href="<?php echo $data['1']['yuyue'];?>"><img src="<?php echo IMG_PATH;?>liuyan.png"><p>预约咨询</p></a></strong>
    <script>
        jQuery(".function_cn").slide({});
    </script>
</div>
</body>
</html>