<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<body>
<style>
 /*做地图时候去掉这行样式就行*/
 .map img{ display:block; width:100%; height:100%;}
</style>
<div class="map fix">
 <!-- <img src="images/map.jpg"/>-->

 <iframe width="100%"; height="100%"; src="https://apis.map.qq.com/tools/poimarker?type=0&marker=coord:39.147173,117.185001;title:小虎名品;addr:天街·古玩茶艺广场&key=UFWBZ-KYZWP-EKIDP-VTGUB-DMLKE-BQBCR&referer=myapp">

 </iframe>
</div>
</body>
</html>

