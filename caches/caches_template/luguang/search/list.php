<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="main w1200 fix">
        <div class="main_nav le">
            <em>
                <h3>搜索结果</h3>
                <span></span>
            </em>
            <ul>

            </ul>
        </div>
        <div class="news mian_right rt">
            <h3>获得约 <?php echo $totalnums; ?> 条结果 （用时<?php echo sprintf("%01.2f", $execute_time);?> 秒）</h3>

            <ul class="fix news_ul">
                <?php $n=1; if(is_array($datas)) foreach($datas AS $i => $r) { ?>
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
                <?php if(empty($datas)) { ?>未找到结果<?php } ?>
            </ul>

        </div>
    </div>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_history.js"></script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<?php include template("content","foot"); ?>