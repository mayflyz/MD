<?php if ($this->_var['txt_links']): ?>
<div class="abody">
	<div class="flink">
		<div class="title"><strong>友情链接</strong></div>
		<div class="list">
		<ul class="crz">
        <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
      <li><a href="<?php echo $this->_var['link']['url']; ?>" title="<?php echo $this->_var['link']['name']; ?>" target="_blank"><?php echo $this->_var['link']['name']; ?></a></li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                                   

		</ul>
		</div>
	</div>
	<div class="clear line10"></div>
</div>
<?php endif; ?>