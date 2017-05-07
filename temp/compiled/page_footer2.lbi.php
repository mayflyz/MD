<div class="ebody">
		<div class="line10"></div>
	<div class="kfbox6 crz">
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['help_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_cat']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['help_cat']['iteration']++;
?>
		<ul class="s1">
			<li class="t1"><?php echo $this->_var['help_cat']['cat_name']; ?></li>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<li><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" rel="nofollow" ><?php echo $this->_var['item']['short_title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		</ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<ul class="s1">
			<li class="t2"><?php echo $this->_var['service_phone']; ?></li>
			<li class="t3"><a href="#" target="_blank" rel="nofollow" >点击这里进入</a></li>
		</ul>
               
	</div>
	<div class="clear line10"></div>
</div>
<div class="ebody">
		<div class="footer6">

		<div class="line15"></div>
		<p class="link">
        
        <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav']['url']; ?>" target="_blank"><?php echo $this->_var['nav']['name']; ?></a> | 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <a href="#">回顶部</a>
               
        </p>
                    <p> 上海懋德电子科技有限公司 版权所有 并保留所有权利</p>
                    <div class="line10"></div>
	</div>
</div>
<script type="text/javascript" src="js/cookies.js"></script>
<div class="totop">
<div style="display:block" id="show_ke_ol"><a href="#">在线客服</a></div>
<div style="clear:both"></div>
<a onClick="javascript:scroll(0,0)" href="javascript:;"><img src="themes/hecha/themes/hechaV2.5/skin/tm5/images/totop.gif" /></a></div>
<span style="display:none"><img src="http://www.hecha.cn/cart_save_show.php" width=1 height=1></span>

<?php
$_CFG = load_config();
$qq=$_CFG['qq'];
?>

<SCRIPT type=text/javascript>
var verticalpos="frombottom"
function JSFX_FloatTopDiv()
{i
var startX =0,
startY = 459;
var ns = (navigator.appName.indexOf("Netscape") != -1);
var d = document;
function ml(id)
{
  var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.divs[id];
  if(d.divs)el.style=el;
  el.sP=function(x,y){this.style.right=x;this.style.top=y;};
  el.x = startX;
  if (verticalpos=="fromtop")
  el.y = startY;
  else{
  el.y = ns ? pageYOffset + innerHeight : document.documentElement.scrollTop + 
document.documentElement.clientHeight;
  el.y -= startY;
  }
  return el;
}
window.stayTopright=function()
{
  if (verticalpos=="fromtop"){
  var pY = ns ? pageYOffset : document.documentElement.scrollTop;
  ftlObj.y += (pY + startY - ftlObj.y)/8;
  }
  else{
  var pY = ns ? pageYOffset + innerHeight : document.documentElement.scrollTop + 
document.documentElement.clientHeight;
//alert(pY);
  ftlObj.y += (pY - startY - ftlObj.y)/8;
  }
  ftlObj.sP(ftlObj.x, ftlObj.y+"px");
  setTimeout("stayTopright()", 10);
}
ftlObj = ml("kfimg");
stayTopright();
}
JSFX_FloatTopDiv();
</SCRIPT>




