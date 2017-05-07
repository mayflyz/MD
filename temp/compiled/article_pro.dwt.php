<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>

<link href="themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="about/about.css" rel="stylesheet" type="text/css" />

<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/about/about.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/hechaV2.5/skin/tm6/js/jquery.libs-1.2.6pack.js"></script>
<script type="text/javascript" src="themes/hechaV2.5/skin/tm6/js/effect_commonv3.js"></script>
<script type="text/javascript" src="themes/hecha/js/index_url.js"></script>
</head>

<body>
<?php echo $this->fetch('library/page_header2.lbi'); ?>

<div class="ebody">
    <?php
    $GLOBALS['smarty']->assign('ad',get_adv('网店信息页_banner'));
    ?>
    <?php if ($this->_var['ad']['content']): ?>
    	<div class="ashow"><?php echo $this->_var['ad']['content']; ?></div>
    	<div class="line10"></div>
    <?php endif; ?>

	<div class="ab_left">
		<dl>
			<dt class="this"><p class="i1"><a href="#">网站信息</a></p></dt>
			<dd>
<?php
$GLOBALS['smarty']->assign('get_class_articles', get_class_articles(2,50));
?> 
<?php $_from = $this->_var['get_class_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_33645900_1494167918');$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from AS $this->_var['article_0_33645900_1494167918']):
        $this->_foreach['article']['iteration']++;
?>  
				<p><a href="<?php echo $this->_var['article_0_33645900_1494167918']['url']; ?>" title="<?php echo $this->_var['article_0_33645900_1494167918']['title']; ?>"><?php echo sub_str($this->_var['article_0_33645900_1494167918']['title'],12); ?></a></p>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                

			</dd>
		</dl>

        
	</div>
	<div class="ab_right">
		<div class="box">
		<div class="about">
				<div class="tx1">
					<p class="cn"><img src="themes/hecha/images/logo_about.png" width="235" height="49" align="absmiddle" /></p>
					<p style="text-align:right; padding:0 100px;"></p>
				<div class="line15"></div>
				<div class="atx" id="a2"><strong><?php echo htmlspecialchars($this->_var['article']['title']); ?></strong></div>
					<?php echo $this->_var['article']['content']; ?>	
				</div>
				
				</div>
	</div>
	</div>
	<div class="clear line15"></div>
</div>

<?php echo $this->fetch('library/page_footer2.lbi'); ?>

</body>
</html>