		<div class="prolist_s2 list">
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_06854800_1494172650');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_06854800_1494172650']):
?>
<?php if ($this->_var['goods_0_06854800_1494172650']['goods_id']): ?>                
			<ul>
				<li class="img"><a href="<?php echo $this->_var['goods_0_06854800_1494172650']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods_0_06854800_1494172650']['name']; ?>"><img src="<?php echo $this->_var['goods_0_06854800_1494172650']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_06854800_1494172650']['name']; ?>" /></a></li>
				<li class="txt"><a href="<?php echo $this->_var['goods_0_06854800_1494172650']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods_0_06854800_1494172650']['name']; ?>"><?php echo $this->_var['goods_0_06854800_1494172650']['name']; ?></a></li>
				<li class="pri1"><p><a href="<?php echo $this->_var['goods_0_06854800_1494172650']['url']; ?>#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="<?php echo $this->_var['goods_0_06854800_1494172650']['comment_rank']; ?>分" class="star<?php echo $this->_var['goods_0_06854800_1494172650']['comment_rank_int']; ?>">&nbsp;</span></big></a></p>			</li>
				<li class="pri2"><em><a href="<?php echo $this->_var['goods_0_06854800_1494172650']['url']; ?>#comment" title="查看评论">(已有<?php echo $this->_var['goods_0_06854800_1494172650']['comment_count']; ?>人评论)</a></em>

                本店价：请询价
                </li>
			</ul>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     
		<div class="clear"></div>
		</div>