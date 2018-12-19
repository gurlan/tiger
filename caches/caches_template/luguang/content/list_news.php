<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="main w1200 fix">
        <?php include template("content","nav"); ?>
        <div class="news mian_right rt">
            <h3>公司动态</h3>
            <ul class="fix news_ul">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b66cb12b42594fc0174a70f5df215d0a&action=lists&catid=%24catid&num=4&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="fix">
                    <a href="<?php echo $r['url'];?>">
                        <div class="news_left le">
                            <b><?php echo date("d",$r[inputtime]);?></b>
                            <span><?php echo date("Y/m",$r[inputtime]);?></span>
                        </div>
                        <div class="news_main le">
                            <img src="<?php echo $r['thumb'];?>">
                        </div>
                        <div class="news_right le">
                            <h4><?php echo $r['title'];?></h4>
                            <p>
                                <?php echo $r['description'];?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <div class="link">
                <ul class="fix">
                <?php echo $pages;?>
                </ul>
            </div>
        </div>
    </div>
<?php include template("content","foot"); ?>