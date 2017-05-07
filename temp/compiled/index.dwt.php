<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/hecha/js/index_url.js"></script>
<script type="text/javascript" src="themes/hecha/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/jquery.plus.js"></script>
<script src="themes/hecha/themes/hechaV2.5/skin/tm5/js/lazyload.js" type="text/javascript"></script>

<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>

<!--<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("body").find("img").not(".hd_img,.brandlist_img").lazyload({threshold : 200,effect : "fadeIn",placeholder : "http://www.hecha.cn/themes/hechaV2.5/skin/tm5/images/grey.gif",failurelimit : 10});
});
</script>-->
<script  type="text/javascript">
var _bdhm_top = 0;
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
var _bdhm_tim = new Image(1,1);
_bdhm_tim.id = "bdhmPerimg";
_bdhm_tim.src = _bdhmProtocol + "hm.baidu.com/_tt.gif?si=5929d4f83ef0b1fad3dd9365bf2c00b4&rnd=" + Math.round(Math.random()*2147483647);
_bdhm_tim.onload=function(){_bdhm_top = 1;}
</script>
</head>

<body class="hchstw1">

<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/index_menu.lbi'); ?>

<div class="slidebox">

<?php echo $this->fetch('library/index_category_tree.lbi'); ?>

<?php echo $this->fetch('library/index_ad.lbi'); ?>

<?php echo $this->fetch('library/brands.lbi'); ?>

</div>
<div class="clear line15"></div>


<div class="abody">

    <script type="text/javascript">
	jQuery(".newprobox").slide({titCell:".title_h5 li",mainCell:".hotprox",delayTime:0,delayTime:500,interTime:5000,autoPlay:true});
    </script>


<?php $this->assign('cat_goods',$this->_var['cat_goods_15']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_15']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_30']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_30']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_22']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_22']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_25']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_25']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_32']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_32']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

<div class="abody">
	<div class="row7">
<p>

<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</p>
	<div class="line15"></div>
        <div class="fnav">
		<div class="title">
		<p><a href="#" target="_blank">查看所有商品分类</a></p>
		</div>
		<ul>
        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
           <?php if ($this->_foreach['cat']['iteration'] <= 6): ?>
			<li><em>
			<a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank">更多 »</a></em><strong><?php echo htmlspecialchars($this->_var['cat']['name']); ?>：</strong>
            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
               <?php if ($this->_foreach['cat']['iteration'] <= 8): ?>
			<a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> |
               <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
           <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

			<!--<li><em><a href="http://www.hecha.cn/wulong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>乌 龙 茶：</strong><a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">铁 观 音</a> |  <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">大 红 袍</a> |  <a href="http://www.hecha.cn/shuixian_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">水　　仙</a> |  <a href="http://www.hecha.cn/rougui_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">肉　　桂</a> |  <a href="http://www.hecha.cn/qitawulong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">其他岩茶</a></li>
			<li><em><a href="http://www.hecha.cn/hongcha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>红　　茶：</strong><a href="http://www.hecha.cn/xiaozhong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">正山小种</a> |  <a href="http://www.hecha.cn/qimen_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">祁门红茶</a> |  <a href="http://www.hecha.cn/dianhong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">云南滇红</a> |  <a href="http://www.hecha.cn/rougui_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">坦洋工夫</a> |  <a href="http://www.hecha.cn/zhenghe_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">政和工夫</a> |  <a href="http://www.hecha.cn/bailin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白琳功夫</a> |  <a href="http://www.hecha.cn/jinjunmei_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">金骏眉</a> |  <a href="http://www.hecha.cn/qitahongcha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">其他红茶</a></li>
			<li><em><a href="http://www.hecha.cn/baicha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>福鼎白茶：</strong><a href="http://www.hecha.cn/baihaoyinzhen_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白毫银针</a> |  <a href="http://www.hecha.cn/baimudan_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白 牡 丹</a> |  <a href="http://www.hecha.cn/shoumei_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">寿　　眉</a> |  <a href="http://www.hecha.cn/xinbaicha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">新工艺白茶</a></li>
			<li><em><a href="http://www.hecha.cn/sitemap.php" target="_blank" onclick="return gourl(this.href,'?hra=81',this.target);">更多 »</a></em><strong>其他茗茶：</strong><a href="http://www.hecha.cn/puer_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">普 洱 茶</a> |  <a href="http://www.hecha.cn/molihuacha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">茉莉花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">玫瑰花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">大麦茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">菊花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">苦荞茶</a></li>
			<li><em><a href="http://www.hecha.cn/chaju_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>精品茶具：</strong><a href="http://www.hecha.cn/gongfuchaju_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">功夫茶具</a> |  <a href="http://www.hecha.cn/dianzichaju_list.html" target="_blank">电子茶具</a> |  <a href="http://www.hecha.cn/chahuchabei_list.html" target="_blank">茶杯茶壶</a> |  <a href="http://www.hecha.cn/shipin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">茶 配 饰</a></li>-->

		</ul>
		<div class="clear"></div>
	</div>
	</div>
	<div class="row8">
<div class="img">

<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
		</div>
	</div>
	<div class="clear line15"></div>
</div>
<div class="abody">
	<div class="line15"></div>
		<div class="txtli_b">


<?php $this->assign('articles',$this->_var['articles_10']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_10']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
<?php $this->assign('articles',$this->_var['articles_11']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_11']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>




<?php
$GLOBALS['smarty']->assign('get_class_articles', get_class_articles(2,20));
?>
        <dl class="st2">
			<div class="title_h2"><strong>网店信息</strong><em><a href="article.php?id=5" target="_blank">更多»</a></em></div>
			<dd class="box1">


<?php $_from = $this->_var['get_class_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article']['iteration']++;
?>
  <?php if (($this->_foreach['article']['iteration'] - 1) < 10): ?>
<p><a rel="nofollow" href="<?php echo $this->_var['article']['url']; ?>" target="_blank" title="<?php echo $this->_var['article']['title']; ?>" ><?php echo $this->_var['article']['title']; ?></a></p>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

								<!--<p><a rel="nofollow" href="http://www.hecha.cn/about/hc-about.html" title="和茶网简介" target="_blank">和茶网简介</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_experts.html" title="和茶网产品质量评审委员会介绍 " target="_blank">和茶网产品质量评审委员会介绍 </a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_experts.html" title="评审委员会成员介绍" target="_blank">评审委员会成员介绍</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc-about.html#a1" title="和茶网价值观" target="_blank">和茶网价值观</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_supplier.html" title="和茶网原产地供货商" target="_blank">和茶网原产地供货商</a></p>
								<p><a rel="nofollow" href="http://info.hecha.cn/9/show_27732.html" target="_blank" title="中国首家茶行业中的'国美'和茶匯落户福州" >中国首家茶行业中的"国美"和茶匯落户福州</a></p>
				<p><a rel="nofollow" href="http://info.hecha.cn/8/show_26372.html" target="_blank" title="【媒体报道】和茶网借力世博会成为茶电子商务领跑者">【媒体报道】和茶网借力世博会成为...</a></p>
				<p><a rel="nofollow" href="http://info.hecha.cn/8/show_25924.html" target="_blank" title="【媒体报道】和茶网参展世博会 引领中国茶叶风靡全球">【媒体报道】和茶网参展世博会 引...</a></p>-->

			</dd>
		</dl>
		<div class="row8">
		</div>
		<div class="clear line15"></div>
	</div>
</div>

<?php echo $this->fetch('library/link.lbi'); ?>

<?php echo $this->fetch('library/page_footer.lbi'); ?>


<?php
$_CFG = load_config();
$qq=$_CFG['qq'];
?>
<div class="rnavx">
	<ul id="floarrnav">
	    <li class="slix"><a href="javascript:void(0);" onclick="AddFavorite();" class="st1">收藏我</a></li>
		<li class="slix"><a href="javascript:;" class="st4" id="backtotop">回顶部</a></li>
	</ul>
</div>


<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=right&amp;uid=66616" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
</body>
</html>