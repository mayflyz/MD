<?php exit;?>a:3:{s:8:"template";a:7:{i:0;s:54:"/Applications/MAMP/htdocs/MD/themes/hecha/category.dwt";i:1;s:65:"/Applications/MAMP/htdocs/MD/themes/hecha/library/page_header.lbi";i:2;s:67:"/Applications/MAMP/htdocs/MD/themes/hecha/library/category_tree.lbi";i:3;s:59:"/Applications/MAMP/htdocs/MD/themes/hecha/library/top10.lbi";i:4;s:64:"/Applications/MAMP/htdocs/MD/themes/hecha/library/goods_list.lbi";i:5;s:59:"/Applications/MAMP/htdocs/MD/themes/hecha/library/pages.lbi";i:6;s:65:"/Applications/MAMP/htdocs/MD/themes/hecha/library/page_footer.lbi";}s:7:"expires";i:1494172629;s:8:"maketime";i:1494169029;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>天平_天平衡器_计量仪器_上海懋德电子科技有限公司</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/goods6_test.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/goods6_test.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/hecha/js/jquery-1.7.2.js"></script>
<script src="themes/hecha/themes/hechaV2.5/skin/tm5/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/js/generalt.js"></script>
<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
</head>
<script language="javascript">
	function add_to_cart_4(goodsId, number, parentId, doitem, fromother, activities_id, is_mother, child_good_id)
	{
		var goods        = new Object();
		var spec_arr     = new Array();
		var fittings_arr = new Array();
  
		cart_step		 = doitem;
		goods.spec     = spec_arr;
		goods.goods_id = goodsId;
		goods.number   = number;
		goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
		goods.activities_id         = (typeof(activities_id) == "undefined") ? 0 : activities_id;
		goods.is_mother         = (typeof(is_mother) == "undefined") ? 0 : is_mother;
		goods.child_good_id   = child_good_id;
  
		goods.sendstr	 = '{"spec":['+goods.spec+'],"goods_id":'+goods.goods_id+',"number":'+goods.number+',"parent":'+goods.parent+',"activities_id":'+goods.activities_id+',"is_mother":'+goods.is_mother+',"child_good_id":'+goods.child_good_id+'}';
		
		jQuery.post("http://"+document.domain+"/cartt.php",{step:"add_to_cart", goods:goods.sendstr}, function(data){	
				addToCartResponse(data, cart_step);
		});
	}	
</script>
<body class="hchstw1">
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
    <script type="text/javascript" src="js/vist.js"></script>
    <script language="javascript">
	jQuery.post("http://"+document.domain+"/index7_ajax.php",{act:'loginInfoNew'}, function(dealstr){
				var allArrN			=new Array();
				allArrN				= dealstr.split("|||***|||");
		
				var allArr			=new Array();
				
				
				var returnstrarray	= new Array();
				var loginInfo='';
				var cartInfo='';
		
				returnstrarray		= allArrN[0].split("||*||");
				loginInfo			= returnstrarray[0];
				cartInfo			= returnstrarray[1];
				cartInfo_detail		= returnstrarray[2];
				qq_cb_str			= returnstrarray[3];
//                                new_cartInfo_detail     = returnstrarray[4];
//                                totel_num_price         = returnstrarray[5];
                                
				document.getElementById('loginInfo').innerHTML=loginInfo;
				document.getElementById('cart').innerHTML=cartInfo;
				document.getElementById('cart_detail').innerHTML=cartInfo_detail;
//                                jQuery('#new_cart_detail').append(new_cartInfo_detail);
//                                jQuery('#new_cart_detail').after(totel_num_price);
                                
				if( qq_cb_str != '' && qq_cb_str != '-1' )
				{
					document.getElementById('qq_cb').innerHTML='<div class="top6"><div class="ebody"><div style="float:left">'+qq_cb_str+'</div><div style="float:right;cursor:hand; color:#FF0000; text-decoration:underline" onclick="qqcb_close()">关闭</div></div></div>';
				}	
			});
	
	function qqcb_close()
	{
		document.getElementById('qq_cb').innerHTML='';
	}
			
	var keywords_array = new Array();
	var is_show_keywords	= 0;
	var now_keywords_num	= 0;
	function go_show_key_words()
	{
		if( event.keyCode == 38 || event.keyCode == 40 )
		{
			if( keywords_array.length > 0 )
			{
				total_keywords_num	= keywords_array.length - 1;
				if( event.keyCode == 38 )
				{
					now_keywords_num	= now_keywords_num - 1;
					if( now_keywords_num < 1 )
					{
						now_keywords_num = total_keywords_num;
					}
				}
				
				if( event.keyCode == 40 )
				{
					now_keywords_num	= now_keywords_num + 1;
					if( now_keywords_num > total_keywords_num )
					{
						now_keywords_num = 1;
					}
				}
				
				document.searchForm.keywords.value = keywords_array[now_keywords_num];
				focus_key_words(now_keywords_num);
			}
			return false
		}
		//return false;
		keywords_value	= document.searchForm.keywords.value;
		if( keywords_value != ''  )
		{
			jQuery.post("http://"+document.domain+"/get_show_key_words.php",{keywords:keywords_value}, function(dealstr)
			{
				//alert(dealstr);
				//return false;
				
				eval(dealstr);
				if( keywords_array['show_str'] != '' )
				{
					jQuery("#show_key_words").html(keywords_array['show_str']);
					document.getElementById('show_key_words').className = "block";
				}	
				else
				{
					jQuery("#show_key_words").html('');
					document.getElementById('show_key_words').className = "none";
				}
				now_keywords_num	= 0;
			});
		}
		else
		{
			document.getElementById('show_key_words').className = "none";
			now_keywords_num	= 0;
		}
	}
	
	function focus_key_words(focus_num)
	{
		if( keywords_array.length > 0 )
		{
			total_keywords_num	= keywords_array.length - 1;
			for( i=1; i<=total_keywords_num; i++ )
			{
				if( i == focus_num )
				{
					document.getElementById('show_key_words_col_'+i).className='hover';
				}
				else
				{
					document.getElementById('show_key_words_col_'+i).className='';
				}
			}
		}
	}
	
	function hidden_key_words()
	{
		if( is_show_keywords == 0 )
		{
			document.getElementById('show_key_words').className='none';
		}
	}		
</script>
<div class="top7">
	<div class="abody">
		<p class="left">
		<span id="J_TaobaoBar">
		</span>
		<span id="is_show_login_out">
		</span>
		<span id="loginInfo">
        <a href="javascript:void(0);" onclick="AddFavorite();" >收藏</a><small>|</small>
        554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca
		</span>
		</p>
 		<p class="rlink">
		<small>|</small>
        <a href="article_cat.php?id=3" >关于我们</a>
		<small>|</small>
        <a href="article.php?id=4" >联系我们</a>
		</p>
		<div class="clear"></div>
	</div>
</div>
<div class="header7">
<div class="abody">
	<div class="header6">
			<div class="logo"><a href="index.php"><img src="themes/hecha/images/logo_index.png"/></a></div>
			<div class="newtea">
                
            </div>
			<div class="tel">
			<p>021-67885523</p>
			</div>
		<div class="search">
			<dl>
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
				<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
				<dt><input name="keywords" id="keyword" type="text" class="inp2" value="" onfocus="search_key_focus(this)" onblur="search_key_blur(this)"/>
				  <ul id="show_key_words" class='none' onmousemove="is_show_keywords=1" onMouseOut="is_show_keywords=0">
				  </ul>
				</dt>
				<dd><input name="imageField" type="image" src="themes/hecha/themes/hechaV2.5/skin/tm7/images/header/search_sub.jpg"/></dd>
				</form>
			</dl>
			<p>
   热门搜索 ：
   <a href="search.php?keywords=%E6%98%BE%E5%BE%AE%E9%95%9C" title="显微镜">显微镜</a>
   <a href="search.php?keywords=%E5%A4%A9%E5%B9%B3" title="天平">天平</a>
   <a href="search.php?keywords=%E6%B8%85%E6%B4%97%E6%B6%88%E6%AF%92%E8%AE%BE%E5%A4%87" title="清洗消毒设备">清洗消毒设备</a>
   <a href="search.php?keywords=%E8%80%97%E6%9D%90" title="耗材">耗材</a>
   			</p>
		</div>
            <div class="clear"></div>
	</div>
</div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<div class="menu7">
	<div class="abody">
	<div class="mxal">
		<p class="til">所有商品分类</p>
        <div class="lnav7 list">
        		<dl >
			<dt><a href="category.php?id=1"><big>分析仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=1">分析仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=2">色谱</a>
                         							<a href="category.php?id=3">光谱</a>
                         							<a href="category.php?id=4">质谱</a>
                         							<a href="category.php?id=5">电化学仪器</a>
                         							<a href="category.php?id=14">元素分析仪</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=2">色谱</a> 
                                                                                                    <a href="category.php?id=3">光谱</a> 
                                                                                                                                                                                                        
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=2">色谱</a>
                                                  <a href="category.php?id=3">光谱</a>
                                                                                                                </dd>
		</dl>
				<dl class="xc1">
			<dt><a href="category.php?id=6"><big>光学仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=6">光学仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=7">光学测量仪</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=7">光学测量仪</a> 
                                                  
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=7">光学测量仪</a>
                                     </dd>
		</dl>
				<dl >
			<dt><a href="category.php?id=10"><big>环境监测仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=10">环境监测仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=38">水质分析仪</a>
                         							<a href="category.php?id=39">气体检测仪</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=38">水质分析仪</a> 
                                                                                                    <a href="category.php?id=39">气体检测仪</a> 
                                                  
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=38">水质分析仪</a>
                                                  <a href="category.php?id=39">气体检测仪</a>
                                     </dd>
		</dl>
				<dl class="xc1">
			<dt><a href="category.php?id=11"><big>生命科学</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=11">生命科学</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=40">生化分子生物</a>
                         							<a href="category.php?id=41">生物工程设备</a>
                         							<a href="category.php?id=80">电泳成像</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=40">生化分子生物</a> 
                                                                                                    <a href="category.php?id=41">生物工程设备</a> 
                                                                                                    
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=40">生化分子生物</a>
                                                  <a href="category.php?id=41">生物工程设备</a>
                                                              </dd>
		</dl>
				<dl >
			<dt><a href="category.php?id=15"><big>耗材配件</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=15">耗材配件</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=52">色谱柱</a>
                         							<a href="category.php?id=55">定氮仪</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=52">色谱柱</a> 
                                                                                                    <a href="category.php?id=55">定氮仪</a> 
                                                  
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=52">色谱柱</a>
                                                  <a href="category.php?id=55">定氮仪</a>
                                     </dd>
		</dl>
				<dl class="xc1">
			<dt><a href="category.php?id=22"><big>行业专用仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=22">行业专用仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=53">药物检测仪器</a>
                         							<a href="category.php?id=54">农业和食品专用仪器</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=53">药物检测仪器</a> 
                                                                                                    <a href="category.php?id=54">农业和食品专用仪器</a> 
                                                  
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=53">药物检测仪器</a>
                                                  <a href="category.php?id=54">农业和食品专用仪器</a>
                                     </dd>
		</dl>
				<dl >
			<dt><a href="category.php?id=25"><big>计量仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=25">计量仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=9">温度计量仪器</a>
                         							<a href="category.php?id=31">天平衡器</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=9">温度计量仪器</a> 
                                                                                                    <a href="category.php?id=31">天平衡器</a> 
                                                  
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=9">温度计量仪器</a>
                                                  <a href="category.php?id=31">天平衡器</a>
                                     </dd>
		</dl>
				<dl class="xc1">
			<dt><a href="category.php?id=30"><big>实验室仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=30">实验室仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=42">清洗消毒设备</a>
                         							<a href="category.php?id=43">制样消解设备</a>
                         							<a href="category.php?id=44">分离萃取设备</a>
                         							<a href="category.php?id=45">纯化设备</a>
                         							<a href="category.php?id=46">混合分散设备</a>
                         							<a href="category.php?id=47">恒温加热干燥设备</a>
                         							<a href="category.php?id=48">粉碎设备</a>
                         							<a href="category.php?id=49">泵</a>
                         							<a href="category.php?id=50">液体处理设备</a>
                         							<a href="category.php?id=51">气体发生器</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=42">清洗消毒设备</a> 
                                                                                                    <a href="category.php?id=43">制样消解设备</a> 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=42">清洗消毒设备</a>
                                                  <a href="category.php?id=43">制样消解设备</a>
                                                                                                                                                                                                                                             </dd>
		</dl>
				<dl >
			<dt><a href="category.php?id=32"><big>物性测试仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=32">物性测试仪器</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        							<a href="category.php?id=33">粒度仪</a>
                         							<a href="category.php?id=34">热分析仪器</a>
                         							<a href="category.php?id=35">流变仪</a>
                         							<a href="category.php?id=36">环境试验箱</a>
                         							<a href="category.php?id=37">其他</a>
                            
							<div class="clear"></div>
						</li>
						<li class="def">
                                                                          <a href="category.php?id=33">粒度仪</a> 
                                                                                                    <a href="category.php?id=34">热分析仪器</a> 
                                                                                                                                                                                                        
                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=33">粒度仪</a>
                                                  <a href="category.php?id=34">热分析仪器</a>
                                                                                                                </dd>
		</dl>
					            
			<div class="clear"></div>
			<!--<div id="navtitle" class="title"><a href="http://www.hecha.cn/sitemap.php" title="点击查看全部分类" target="_blank">热门分类</a></div>-->
	</div>
	</div>
    
	<div class="mxnx">
	<ul>
   
		<li ><a href="index.php"><span title="首页">首页</span></a></li>
        
		<li ><a href="category.php?id=11"><span title="生命科学">生命科学</span></a></li>
       
		<li ><a href="category.php?id=12"><span title="实验室仪器">实验室仪器</span></a></li>
       
		<li ><a href="category.php?id=14"><span title="耗材配件">耗材配件</span></a></li>
       
		<li class="this"><a href="category.php?id=59"><span title="计量仪器">计量仪器</span></a></li>
       
		<li ><a href="category.php?id=9"><span title="物性测试仪器">物性测试仪器</span></a></li>
       
		<li ><a href="article_cat.php?id=11"><span title="行业新闻">行业新闻</span></a></li>
       
		<li ><a href="article_cat.php?id=10"><span title="技术应用">技术应用</span></a></li>
		<div class="clear"></div>
	</ul>
	</div>
    
	<div class="clear"></div>
	</div>
</div>
<script type="text/javascript" src="themes/hecha/js/banner4.0.js"></script>
<div class="abody">
	<div class="lbox_s1">
	<div class="mylnav7">&nbsp;</div>
	<div class="title_h3"><p>天平热销TOP5</p></div><div class="prolist_s1">
    
    
        <ul>
			<li class="img"><a href="goods.php?id=105"><img alt="testo 826-T2食品用红外测温仪" src="images/201705/thumb_img/105_thumb_G_1493855672047.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=105">testo 826-T2食品用红外测温仪</a></p>
				<p>市场价：<small>￥0.0</small></p>
				<p class="pri">本店价：￥
                                0.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=104"><img alt="NewClassic MS系列半微量天平" src="images/201705/thumb_img/104_thumb_G_1493855627457.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=104">NewClassic MS系列半微量天平</a></p>
				<p>市场价：<small>￥0.0</small></p>
				<p class="pri">本店价：￥
                                0.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=103"><img alt="AL104 分析天平" src="images/201705/thumb_img/103_thumb_G_1493855585231.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=103">AL104 分析天平</a></p>
				<p>市场价：<small>￥0.0</small></p>
				<p class="pri">本店价：￥
                                0.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=102"><img alt="分析天平ATX/ATY系列" src="images/201705/thumb_img/102_thumb_G_1493855494416.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=102">分析天平ATX/ATY系列</a></p>
				<p>市场价：<small>￥0.0</small></p>
				<p class="pri">本店价：￥
                                0.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=101"><img alt=" testo 810红外测温仪" src="images/201705/thumb_img/101_thumb_G_1493855435849.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=101">testo 810红外测温仪</a></p>
				<p>市场价：<small>￥0.0</small></p>
				<p class="pri">本店价：￥
                                0.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
      
      
      
      
          
       
        </div>    
        
            
	<div class="clear line10"></div>
	<div class="title_h3"><p>我浏览过的商品</p></div>
	<div class="prolist_s1" id="show_history_goods">
554fcae493e564ee0dc75bdf2ebf94cagoods_history|a:1:{s:4:"name";s:13:"goods_history";}554fcae493e564ee0dc75bdf2ebf94ca 
                       
                       
	</div>
    
    
                                     
                                                           
        <div class="clear line10"></div>
                <div class="title_h3"><p>最新评论</p></div>
                <div class="prolist_s1">
                    <div class="ncom">
            
            
            </div>
            
            </div>	
            
          </div>
            
	<div class="rbox_s1">
		<div class="line10"></div>
		<a name='goods_list'></a>
		<div class="pnav6">
			<div class="title"><em><a href="category.php?id=59">重置筛选条件</a></em><strong>天平-商品筛选</strong></div>
			<div class="clear line5"></div>
            			<dl>
				<dt><strong>品牌</strong></dt>
				<dd>
                                  					<p class="this"><a href="category.php?id=59&amp;price_min=0&amp;price_max=0" class="all">全部</a></p>
                                                                                                          
					<div class="lix">
                                                                                    					<p ><a href="category.php?id=59&amp;brand=12&amp;price_min=0&amp;price_max=0">岛津(Shimadzu)</a></p>
                                                                					<p ><a href="category.php?id=59&amp;brand=16&amp;price_min=0&amp;price_max=0">梅特勒(Mettler Toledo)</a></p>
                                           					  <div class="clear"></div>
					</div>
                    
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
            		</div>
		<div class="clear line10"></div>
		<div class="ordbar">
			<div class="box">
			<ol>
				<li class="tx">排序方式</li>
				<li class="lx">
                
					<p >
<a href="category.php?category=59&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格</a>
                    </p>
                    
					<p >
<a href="category.php?category=59&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sell_number&order=ASC#goods_list">销量</a>
					</p>
                                            
					<p class="asc">
<a href="category.php?category=59&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list">上架时间</a>
					</p>
                    
					<div class="clear"></div>
				</li>
				<li class="rx">
                                   
                    <p class="info">1/1</p>
				</li>
				<div class="clear"></div>
			</ol>
			</div>
		</div>
		<div class="clear line10"></div>
        
				<div class="prolist_s2 list">
                
			<ul>
				<li class="img"><a href="goods.php?id=104" target="_blank" title="NewClassic MS系列半微量天平"><img src="images/201705/thumb_img/104_thumb_G_1493855627457.jpg" alt="NewClassic MS系列半微量天平" /></a></li>
				<li class="txt"><a href="goods.php?id=104" target="_blank" title="NewClassic MS系列半微量天平">NewClassic MS系列半微量天平</a></li>
				<li class="pri1"><p><a href="goods.php?id=104#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="5.00分" class="star5">&nbsp;</span></big></a></p> 市场价：<small>￥0.0</small>				</li>
				<li class="pri2"><em><a href="goods.php?id=104#comment" title="查看评论">(已有0人评论)</a></em>
                
                
                    本店价：<span>￥</span><strong>
                0.0        </strong>
                            </li>
			</ul>
                
			<ul>
				<li class="img"><a href="goods.php?id=103" target="_blank" title="AL104 分析天平"><img src="images/201705/thumb_img/103_thumb_G_1493855585231.jpg" alt="AL104 分析天平" /></a></li>
				<li class="txt"><a href="goods.php?id=103" target="_blank" title="AL104 分析天平">AL104 分析天平</a></li>
				<li class="pri1"><p><a href="goods.php?id=103#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="5.00分" class="star5">&nbsp;</span></big></a></p> 市场价：<small>￥0.0</small>				</li>
				<li class="pri2"><em><a href="goods.php?id=103#comment" title="查看评论">(已有0人评论)</a></em>
                
                
                    本店价：<span>￥</span><strong>
                0.0        </strong>
                            </li>
			</ul>
                
			<ul>
				<li class="img"><a href="goods.php?id=102" target="_blank" title="分析天平ATX/ATY系列"><img src="images/201705/thumb_img/102_thumb_G_1493855494416.jpg" alt="分析天平ATX/ATY系列" /></a></li>
				<li class="txt"><a href="goods.php?id=102" target="_blank" title="分析天平ATX/ATY系列">分析天平ATX/ATY系列</a></li>
				<li class="pri1"><p><a href="goods.php?id=102#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="5.00分" class="star5">&nbsp;</span></big></a></p> 市场价：<small>￥0.0</small>				</li>
				<li class="pri2"><em><a href="goods.php?id=102#comment" title="查看评论">(已有0人评论)</a></em>
                
                
                    本店价：<span>￥</span><strong>
                0.0        </strong>
                            </li>
			</ul>
                
			<ul>
				<li class="img"><a href="goods.php?id=99" target="_blank" title="NewClassic ML系列分析天平"><img src="images/201705/thumb_img/99_thumb_G_1493855262029.jpg" alt="NewClassic ML系列分析天平" /></a></li>
				<li class="txt"><a href="goods.php?id=99" target="_blank" title="NewClassic ML系列分析天平">NewClassic ML系列分析天平</a></li>
				<li class="pri1"><p><a href="goods.php?id=99#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="5.00分" class="star5">&nbsp;</span></big></a></p> 市场价：<small>￥0.0</small>				</li>
				<li class="pri2"><em><a href="goods.php?id=99#comment" title="查看评论">(已有0人评论)</a></em>
                
                
                    本店价：<span>￥</span><strong>
                0.0        </strong>
                            </li>
			</ul>
     
		<div class="clear"></div>
		</div>        
		<div class="clear"></div>
	  <div class="pages6">
						            
              				
            				 </div>
	</div>
			
	<div class="clear line15"></div>
</div>
<div class="ebody"></div>
<div class="footer7">
	<div class="abody">
	<div class="kfbox7 crz">
    
		<ul class="s1">
			<li class="t1 im1">新手上路 </li>
            			<li><a href="article.php?id=9" target="_blank" rel="nofollow">怎样下订单</a></li>
            			<li><a href="article.php?id=10" target="_blank" rel="nofollow">注册常见问题</a></li>
             
		</ul>
    
		<ul class="s2">
			<li class="t1 im2">如何付款</li>
            			<li><a href="article.php?id=11" target="_blank" rel="nofollow">支付方式</a></li>
             
		</ul>
    
		<ul class="s3">
			<li class="t1 im3">配送说明</li>
            			<li><a href="article.php?id=15" target="_blank" rel="nofollow">配送方式</a></li>
            			<li><a href="article.php?id=16" target="_blank" rel="nofollow">配送范围</a></li>
             
		</ul>
    
		<ul class="s4">
			<li class="t1 im4">售后服务</li>
            			<li><a href="article.php?id=18" target="_blank" rel="nofollow">服务保障承诺</a></li>
             
		</ul>
    
		<ul class="s5">
			<li class="t1 im5">常见问题</li>
            			<li><a href="article.php?id=20" target="_blank" rel="nofollow">账号 & 密码问题</a></li>
            			<li><a href="article.php?id=21" target="_blank" rel="nofollow">缺货登记</a></li>
             
		</ul>
                
		<ul class="s6">
			<li class="t1 im6">联系客服</li>
			<li>订购热线</li>
			<li class="t2">021-67885523</li>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="line15"></div>
	<p class="link">
             <a href="index.php" target="_blank">首页</a> | 
          <a href="article.php?id=5" target="_blank">关于我们</a> | 
          <a href="article.php?id=4" target="_blank">联系我们</a> | 
          <a href="article_cat.php?id=10" target="_blank">技术应用</a> | 
            
    <a href="#">回顶部</a>
    </p>
	<p> 上海懋德电子科技有限公司 版权所有 并保留所有权利</p>
</div>
<div style="display:none"><script src="http://s94.cnzz.com/stat.php?id=1068883&web_id=1068883&show=pic1" language="JavaScript"></script></div>
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=right&amp;uid=66616" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":100};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
</body>
</html>