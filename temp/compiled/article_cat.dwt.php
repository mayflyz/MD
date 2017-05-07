<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>

<link href="themes/hechaV2.5/style/style_new.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/style/promain.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/home6x.css" rel="stylesheet" type="text/css" />

<link href="themes/hecha/themes/hechaV2.5/style/style_new.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/style/promain.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/home6x.css" rel="stylesheet" type="text/css" />

<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/goods6.css" rel="stylesheet" type="text/css" />

<script type=text/javascript src="themes/hecha/themes/hechaV2.5/skin/green/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm6/js/jquery.libs-1.2.6pack.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm6/js/effect_commonv3.js"></script>
<script type="text/javascript" src="themes/hecha/js/index_url.js"></script>
</head>
<body>

<?php echo $this->fetch('library/page_header2.lbi'); ?>

<?php

$GLOBALS['smarty']->assign('helps', get_shop_help2());
?>

<div class="cbody">
<div class="helpleft">

<?php if ($this->_var['article_categories']): ?>
					<div class="columnbd">
						<h1 class="ctitle els" >文章分类</h1>
<ul class="helptree">

<?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
<li class="tree2"><span style="cursor:pointer" ><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></span></li>


  <?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
<li class="tree3"><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></li>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</ul>
					</div>
<?php endif; ?>

				</div>
				<div class="helpright">
					<h3 class="h_title" style="margin-bottom:28px; margin-right:0;">
						文章列表
				  </h3>
<style>
.artlist table th{background-color:#79b812; padding:5px; color:#ffffff;}
.artlist table td{padding:5px;}
</style>
<div class="artlist">											
      <table width="100%" border="0" cellspacing="1" bgcolor="#9ccb3b">
      <tr>
        <th><?php echo $this->_var['lang']['article_title']; ?></th>
          <th><?php echo $this->_var['lang']['article_author']; ?></th>
          <th><?php echo $this->_var['lang']['article_add_time']; ?></th>
        </tr>
      <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
      <tr>
        <td bgcolor="#ffffff"><a href="<?php echo $this->_var['article']['url2']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="f6"><?php echo $this->_var['article']['short_title']; ?></a></td>
          <td bgcolor="#ffffff"><?php echo $this->_var['article']['author']; ?></td>
          <td bgcolor="#ffffff" align="center"><?php echo $this->_var['article']['add_time']; ?></td>
        </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>	
</div>																
<?php echo $this->fetch('library/pages.lbi'); ?>
  </div>
				
			<div class="clear"></div>
			<div class="line8"></div>
	</div>
    
<?php echo $this->fetch('library/page_footer2.lbi'); ?>
</body>
</html>
