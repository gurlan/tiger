<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="main w1200 fix">
        <div class="main_nav le">
            <em>
                <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>
                <span></span>
            </em>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a4a7291a866f66781d17f65896e5e85&action=category&catid=22&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                <li <?php if($CATEGORYS[$catid][parentid]==$k) { ?> class="on"<?php } ?>><a class="xiagao <?php if($CATEGORYS[$catid][parentid]==$k) { ?>currentDd currentDt <?php } ?>"><?php echo $r['catname'];?><i></i></a>
                <ul class="xiao" <?php if($CATEGORYS[$catid][parentid]==$k) { ?>style="display: block;" <?php } ?>>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c5796102fc450f9052b61ce2eb23536&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $l=>$v) { ?>
                <li <?php if($l==$catid) { ?> class="on"<?php } ?>><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <script type="text/javascript">
                $(function(){
                    $(".xiagao").click(function(){
                        $(this).toggleClass("currentDd").siblings(".xiagao").removeClass("currentDd")
                        $(this).toggleClass("currentDt").siblings(".xiagao").removeClass("currentDt")
                        $(this).next(".xiao").slideToggle(300).siblings(".xiao").slideUp(500)
                    })
                })
            </script>
        </div>
        <div class="productxq mian_right rt">
            <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>
            <div class="productxq_top fix">
                <div class="game163 fl">
                    <ul class="bigImg">
                    <?php $n=1;if(is_array($gallery)) foreach($gallery AS $v) { ?>
                        <li >
                            <img src="<?php echo $v['url'];?>" />
                        </li>
                    <?php $n++;}unset($n); ?>
                    </ul>
                    <div class="smallScroll">
                        <div class="smallImg">
                             <ul>
                                 <?php $n=1;if(is_array($gallery)) foreach($gallery AS $v) { ?>
                                <li><a><img src="<?php echo $v['url'];?>" /></a></li>
                                 <?php $n++;}unset($n); ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="productxq_topLeft rt">
                    <b>产品简介</b>
                    <p><?php echo $introuce;?></p>
                    <!-- 跳留言板 -->
                    <a href="speech.html">在线咨询</a>
                </div>
            </div>
            <div class="productxq_bottom">
                <b>功能特点</b>
                <p><?php echo $content;?></p>
                <b>技术参数</b>
                <p><?php echo $parm;?></p>
            </div>
        </div>
    </div>
<?php include template("content","foot"); ?>
<script type="text/javascript">
    jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,    delayTime       :200,
        startFun:function(i,p){
            //控制小图自动翻页
            if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%4==0 ){ jQuery(".game163 .sNext").click(   )}
        }
    });
    jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:4,scroll:4,effect:"left",autoPage:  true,     prevCell:".sPrev",nextCell:".sNext",pnLoop:false });
</script>