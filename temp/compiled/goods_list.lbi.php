		<div class="prolist_s2 list">
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
<?php if ($this->_var['goods']['goods_id']): ?>                
			<ul>
				<li class="img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" /></a></li>
				<li class="txt"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['name']; ?>"><?php echo $this->_var['goods']['name']; ?></a></li>
				<li class="pri1"><p><a href="<?php echo $this->_var['goods']['url']; ?>#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="<?php echo $this->_var['goods']['comment_rank']; ?>分" class="star<?php echo $this->_var['goods']['comment_rank_int']; ?>">&nbsp;</span></big></a></p> 市场价：<small>￥<?php echo $this->_var['goods']['market_price']; ?></small>				</li>
				<li class="pri2"><em><a href="<?php echo $this->_var['goods']['url']; ?>#comment" title="查看评论">(已有<?php echo $this->_var['goods']['comment_count']; ?>人评论)</a></em>
                
                
            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
        活动价：<span>￥</span><strong><?php echo $this->_var['goods']['promote_price']; ?></strong>
            <?php else: ?>
        本店价：<span>￥</span><strong>
                <?php echo $this->_var['goods']['shop_price']; ?>
        </strong>
            <?php endif; ?>
                </li>
			</ul>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     
		<div class="clear"></div>
		</div>