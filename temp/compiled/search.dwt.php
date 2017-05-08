<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>

<link href="themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/goods6.css" rel="stylesheet" type="text/css" />

<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/home6.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/goods6.css" rel="stylesheet" type="text/css" />

<script type=text/javascript src="themes/hecha/themes/hechaV2.5/skin/tm5/js/jquery.libs-1.2.6pack.js"></script>
<script type=text/javascript src="themes/hecha/themes/hechaV2.5/skin/tm5/js/effect_commonv1.1.js"></script>
<script type=text/javascript src="themes/hecha/themes/hechaV2.5/skin/tm5/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/js/generalt.js"></script>

<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
</head>

<body>

<?php echo $this->fetch('library/page_header2.lbi'); ?>


<div class="ebody">
	<div class="lbox_s1">
    
	<div class="lnav6">

        <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>   
		<dl <?php if (($this->_foreach['cat']['iteration'] - 1) == 0): ?>class="ot"<?php endif; ?>>
			<dt><a href="<?php echo $this->_var['cat']['url']; ?>"><big><?php echo htmlspecialchars($this->_var['cat']['name']); ?></big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
							<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
                          <?php if (($this->_foreach['child']['iteration'] - 1) < 2): ?>
                        <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> 
                          <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        
                        </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </dt>
			<dd>
            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
             <?php if (($this->_foreach['child']['iteration'] - 1) < 2): ?>
            <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
             <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
            </dd>
		</dl>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		

			<div class="clear"></div>
			<div id="navtitle" class="title"><a href="catalog.php" title="点击查看全部分类">热门分类</a></div>
	</div>	
    
    <div class="clear line15"></div>
    
<?php echo $this->fetch('library/top10.lbi'); ?> 
        
        <div class="clear line10"></div>
	<div class="title_h3"><p>我浏览过的商品</p></div>
	<div class="prolist_s1" id="show_history_goods">
    
<?php 
$k = array (
  'name' => 'goods_history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 

	</div>

	</div>
	<div class="rbox_s1">
		<div class="path_s1"><?php echo $this->fetch('library/ur_here.lbi'); ?></div>
		<a name="order" id="order"></a>
		<div class="clear line10"></div>
		<div class="ordbar">
 <form action="search.php" method="post" name="listform" id="form">
	<script language="javascript">
function display_order(sort, order){
	document.listform.sort.value = sort;
	document.listform.order.value = order;
	document.listform.submit();
}

</script>
			<div class="box">
			<ol>
				<li class="tx">排序方式</li>
				<li class="lx">
                
					<p <?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'DESC'): ?>class="asc"<?php elseif ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'ASC'): ?>class="desc"<?php endif; ?>>
<a href="javascript:display_order('shop_price', '<?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>');">价格</a>
                    </p>
                    
					<p <?php if ($this->_var['pager']['search']['sort'] == 'sell_number' && $this->_var['pager']['search']['order'] == 'DESC'): ?>class="asc"<?php elseif ($this->_var['pager']['search']['sort'] == 'sell_number' && $this->_var['pager']['search']['order'] == 'ASC'): ?>class="desc"<?php endif; ?>>
<a href="javascript:display_order('sell_number', '<?php if ($this->_var['pager']['search']['sort'] == 'sell_number' && $this->_var['pager']['search']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>');">销量</a>
					</p>
                                            
					<p <?php if ($this->_var['pager']['search']['sort'] == 'goods_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>class="asc"<?php elseif ($this->_var['pager']['search']['sort'] == 'goods_id' && $this->_var['pager']['search']['order'] == 'ASC'): ?>class="desc"<?php endif; ?>>
<a href="javascript:display_order('goods_id', '<?php if ($this->_var['pager']['search']['sort'] == 'goods_id' && $this->_var['pager']['search']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>');">上架时间</a>
					</p>
                    
					<div class="clear"></div>
				</li>
				<li class="rx">
                <?php if ($this->_var['pager']['page_next']): ?>
					<p class="next"><a href="<?php echo $this->_var['pager']['page_next']; ?>">下一页</a></p>
                <?php endif; ?>
                <?php if ($this->_var['pager']['page_prev']): ?>
                    <p class="prev"><a href="<?php echo $this->_var['pager']['page_prev']; ?>">上一页</a></p>
                <?php endif; ?>   
                    <p class="info"><?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></p>
				</li>
				<div class="clear"></div>
			</ol>
			</div>
            
<input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
             
                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>
             
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</form>
            
		</div>

		<div class="clear line10"></div>
        
		<?php echo $this->fetch('library/goods_list.lbi'); ?>
        
		<div class="clear line15"></div>
        
		<?php echo $this->fetch('library/pages.lbi'); ?>
                    
	</div>
	<div class="clear line15"></div>
</div>

<?php echo $this->fetch('library/page_footer2.lbi'); ?>
</body>
</html>