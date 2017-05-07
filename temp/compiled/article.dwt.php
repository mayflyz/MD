<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>

<link href="themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/home6x.css" rel="stylesheet" type="text/css" />
<link href="style/css/home_pr.css" rel="stylesheet" type="text/css">

<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/home6x.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/style/css/home_pr.css" rel="stylesheet" type="text/css">
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/commentv5.2.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="themes/hecha/style/js/ad.js"></script>
<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
</head>
<body youdao="bind">
<?php echo $this->fetch('library/page_header2.lbi'); ?>

<div class="body3">
  <div class="show1" style="margin:8px 0px 8px 0px;">

<?php $this->assign('ads_id','13'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

  </div>
</div>

<div class="cbody">
	<div class="lbox1">
		<div class="line">
		<?php echo $this->fetch('library/ur_here.lbi'); ?>
		</div>
		<div class="box1">
			<div class="title1"><h1><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1></div>
			<div class="info">
				发布时间：<?php echo $this->_var['article']['add_time']; ?>&nbsp;&nbsp;
				来源：<?php echo htmlspecialchars($this->_var['article']['author']); ?>&nbsp;&nbsp;
			</div>
			<div class="txt1">
			<div id="con_image_sty" class="con_image_sty">

<?php $this->assign('ads_id','15'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

            </div>
            
            <?php echo $this->_var['article']['content']; ?>
            
			<div class="arc_sc_1"><script type="text/javascript">sc_1();</script></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="txt2">
        <?php if ($this->_var['prev_article']): ?>
        上一篇：<a href='<?php echo $this->_var['prev_article']['url']; ?>'><?php echo $this->_var['prev_article']['title']; ?></a>
        <?php endif; ?>
        &nbsp;&nbsp;下一篇：<a href='<?php echo $this->_var['next_article']['url']; ?>'><?php echo $this->_var['next_article']['title']; ?></a> 
        
		</div>
			
	

	</div>
	
	<div class="rbox1">
      
      
	      <div class="title1">品牌信息</div>
      <div class="li1">
        <div class="box1">
<?php $_from = get_cat_brands(0,category,12); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand']['iteration']++;
?>       
			<p><a href="search.php?brand=<?php echo $this->_var['brand']['brand_id']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></p>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                       
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>

<?php
$GLOBALS['smarty']->assign('get_new_articles', get_new_articles());
?>      
	  <div class="title1">热点资讯</div>
	  <div class="li3">
		<div class="dl2">
			<dl>
				<dt>
<?php $_from = $this->_var['get_new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new_articles');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['new_articles']):
        $this->_foreach['new_articles']['iteration']++;
?>        
  <?php if (($this->_foreach['new_articles']['iteration'] - 1) == 0): ?>          
                <a href="<?php echo $this->_var['new_articles']['url']; ?>" title="<?php echo $this->_var['new_articles']['title']; ?>"><img src="<?php echo $this->_var['new_articles']['file_url']; ?>" width="89" height="89" align="absmiddle" /></a>
					<p><a href="<?php echo $this->_var['new_articles']['url']; ?>" title="<?php echo $this->_var['new_articles']['title']; ?>"><?php echo $this->_var['new_articles']['title']; ?></a></p>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>               
				</dt>

<dd>
<?php $_from = $this->_var['get_new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new_articles');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['new_articles']):
        $this->_foreach['new_articles']['iteration']++;
?>        
  <?php if (($this->_foreach['new_articles']['iteration'] - 1) > 1 && ($this->_foreach['new_articles']['iteration'] - 1) < 20 && ($this->_foreach['new_articles']['iteration'] - 1) % 2 == 0): ?>               
<p><a href="<?php echo $this->_var['new_articles']['url']; ?>" title="<?php echo $this->_var['new_articles']['title']; ?>"><?php echo $this->_var['new_articles']['title']; ?></a></p>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 


				</dd>
			</dl>
            
			<dl>
				<dt>
<?php $_from = $this->_var['get_new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new_articles');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['new_articles']):
        $this->_foreach['new_articles']['iteration']++;
?>        
  <?php if (($this->_foreach['new_articles']['iteration'] - 1) == 1): ?>          
                <a href="<?php echo $this->_var['new_articles']['url']; ?>" title="<?php echo $this->_var['new_articles']['title']; ?>"><img src="<?php echo $this->_var['new_articles']['file_url']; ?>" width="89" height="89" align="absmiddle" /></a>
					<p><a href="<?php echo $this->_var['new_articles']['url']; ?>" title="<?php echo $this->_var['new_articles']['title']; ?>"><?php echo $this->_var['new_articles']['title']; ?></a></p>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</dt>

				<dd>
<?php $_from = $this->_var['get_new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new_articles');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['new_articles']):
        $this->_foreach['new_articles']['iteration']++;
?>        
  <?php if (($this->_foreach['new_articles']['iteration'] - 1) > 1 && ($this->_foreach['new_articles']['iteration'] - 1) < 20 && ($this->_foreach['new_articles']['iteration'] - 1) % 2 == 1): ?>                    
<p><a href="<?php echo $this->_var['new_articles']['url']; ?>" title="<?php echo $this->_var['new_articles']['title']; ?>"><?php echo $this->_var['new_articles']['title']; ?></a></p>
  <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

				</dd>
			</dl>
            
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	  </div>
      
      
	</div>
</div>
<div class="clear"></div>

<?php echo $this->fetch('library/page_footer2.lbi'); ?>


<div style="display:none;"><script type="text/javascript">tj();</script></div>
<script type="text/javascript">scRight();</script>
<script type=text/javascript src="http://www.hecha.cn/themes/hechaV2.5/skin/green/js/jquery.libs-1.2.6pack.js"></script>
<script language="javascript">
jQuery.post("/img/get_ad.php",{id:"0"}, function(data){
	img_array	= new Array();
	img_array	= data.split('|||');
	jQuery("#con_image_sty").html(img_array[0]);
	jQuery("#img_right1").html(img_array[1]);
	jQuery("#img_right2").html(img_array[2]);
	jQuery("#img_right3").html(img_array[3]);
});
</script>

</body>
</html>