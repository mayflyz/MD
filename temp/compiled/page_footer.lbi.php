<div class="footer7">
	<div class="abody">
	<div class="kfbox7 crz">
  <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['help_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_cat']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['help_cat']['iteration']++;
?>  
		<ul class="s<?php echo $this->_foreach['help_cat']['iteration']; ?>">
			<li class="t1 im<?php echo $this->_foreach['help_cat']['iteration']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></li>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<li><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" rel="nofollow"><?php echo $this->_var['item']['short_title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

		</ul>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
		<ul class="s6">
			<li class="t1 im6">联系客服</li>
			<li>订购热线</li>
			<li class="t2"><?php echo $this->_var['service_phone']; ?></li>
		</ul>
	</div>
	<div class="clear"></div>

	<div class="line15"></div>
	<p class="link">
   <?php if ($this->_var['navigator_list']['bottom']): ?>
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_46625600_1494167895');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_46625600_1494167895']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
    <a href="<?php echo $this->_var['nav_0_46625600_1494167895']['url']; ?>" target="_blank"><?php echo $this->_var['nav_0_46625600_1494167895']['name']; ?></a> | 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
   
    <a href="#">回顶部</a>
    </p>
	<p> 上海懋德电子科技有限公司 版权所有 并保留所有权利</p>
</div>

