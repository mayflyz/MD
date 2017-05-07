<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:51:"/Applications/MAMP/htdocs/MD/themes/hecha/index.dwt";i:1;s:65:"/Applications/MAMP/htdocs/MD/themes/hecha/library/page_header.lbi";i:2;s:64:"/Applications/MAMP/htdocs/MD/themes/hecha/library/index_menu.lbi";i:3;s:73:"/Applications/MAMP/htdocs/MD/themes/hecha/library/index_category_tree.lbi";i:4;s:62:"/Applications/MAMP/htdocs/MD/themes/hecha/library/index_ad.lbi";i:5;s:60:"/Applications/MAMP/htdocs/MD/themes/hecha/library/brands.lbi";i:6;s:63:"/Applications/MAMP/htdocs/MD/themes/hecha/library/cat_goods.lbi";i:7;s:65:"/Applications/MAMP/htdocs/MD/themes/hecha/library/ad_position.lbi";i:8;s:66:"/Applications/MAMP/htdocs/MD/themes/hecha/library/cat_articles.lbi";i:9;s:58:"/Applications/MAMP/htdocs/MD/themes/hecha/library/link.lbi";i:10;s:65:"/Applications/MAMP/htdocs/MD/themes/hecha/library/page_footer.lbi";}s:7:"expires";i:1494173650;s:8:"maketime";i:1494170050;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上海懋德电子科技有限公司</title>
<meta name="Keywords" content="上海懋德电子科技有限公司" />
<meta name="Description" content="上海懋德电子科技有限公司" />
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/hecha/js/index_url.js"></script>
<script type="text/javascript" src="themes/hecha/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/jquery.plus.js"></script>
<script src="themes/hecha/themes/hechaV2.5/skin/tm5/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<!--<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("body").find("img").not(".hd_img,.brandlist_img").lazyload({threshold : 200,effect : "fadeIn",placeholder : "http://www.hecha.cn/themes/hechaV2.5/skin/tm5/images/grey.gif",failurelimit : 10});
});
</script>-->
<script  type="text/javascript">
var _bdhm_top = 0;
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
var _bdhm_tim = new Image(1,1);
_bdhm_tim.id = "bdhmPerimg";
_bdhm_tim.src = _bdhmProtocol + "hm.baidu.com/_tt.gif?si=5929d4f83ef0b1fad3dd9365bf2c00b4&rnd=" + Math.round(Math.random()*2147483647);
_bdhm_tim.onload=function(){_bdhm_top = 1;}
</script>
</head>
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
<div class="menu7">
	<div class="abody">
	<div class="mxal">
		<p class="til">所有商品分类</p>
	</div>
	<div class="mxnx">
	<ul>
    
		<li class="this"><a href="index.php"><span title="首页">首页</span></a></li>
        
		<li ><a href="category.php?id=11"><span title="生命科学">生命科学</span></a></li>
       
		<li ><a href="category.php?id=12"><span title="实验室仪器">实验室仪器</span></a></li>
       
		<li ><a href="category.php?id=14"><span title="耗材配件">耗材配件</span></a></li>
       
		<li ><a href="category.php?id=59"><span title="计量仪器">计量仪器</span></a></li>
       
		<li ><a href="category.php?id=9"><span title="物性测试仪器">物性测试仪器</span></a></li>
       
		<li ><a href="article_cat.php?id=11"><span title="行业新闻">行业新闻</span></a></li>
       
		<li ><a href="article_cat.php?id=10"><span title="技术应用">技术应用</span></a></li>
        
		<div class="clear"></div>
		<!--<div class="new1"></div>-->
	</ul>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="slidebox">
<div class="homenav">
	<div class="lnav7">
    		<dl >
			<dt><a href="category.php?id=1"><big>分析仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=1">分析仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=2">色谱</a>
             							<a href="category.php?id=3">光谱</a>
             							<a href="category.php?id=4">质谱</a>
             							<a href="category.php?id=5">电化学仪器</a>
             							<a href="category.php?id=14">元素分析仪</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=2"> &nbsp;&nbsp;&nbsp;&nbsp;  色谱</a>
                                                                                                                                                                                                                                                                                  </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=2">&nbsp;&nbsp;&nbsp;&nbsp; 色谱</a>
                                                                                                                                         </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=6"><big>光学仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=6">光学仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=7">光学测量仪</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=7"> &nbsp;&nbsp;&nbsp;&nbsp;  光学测量仪</a>
                                                                          </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=7">&nbsp;&nbsp;&nbsp;&nbsp; 光学测量仪</a>
                                     </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=10"><big>环境监测仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=10">环境监测仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=38">水质分析仪</a>
             							<a href="category.php?id=39">气体检测仪</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=38"> &nbsp;&nbsp;&nbsp;&nbsp;  水质分析仪</a>
                                                                                                                            </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=38">&nbsp;&nbsp;&nbsp;&nbsp; 水质分析仪</a>
                                                              </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=11"><big>生命科学</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=11">生命科学</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=40">生化分子生物</a>
             							<a href="category.php?id=41">生物工程设备</a>
             							<a href="category.php?id=80">电泳成像</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=40"> &nbsp;&nbsp;&nbsp;&nbsp;  生化分子生物</a>
                                                                                                                                                                              </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=40">&nbsp;&nbsp;&nbsp;&nbsp; 生化分子生物</a>
                                                                                       </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=15"><big>耗材配件</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=15">耗材配件</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=52">色谱柱</a>
             							<a href="category.php?id=55">定氮仪</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=52"> &nbsp;&nbsp;&nbsp;&nbsp;  色谱柱</a>
                                                                                                                            </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=52">&nbsp;&nbsp;&nbsp;&nbsp; 色谱柱</a>
                                                              </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=22"><big>行业专用仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=22">行业专用仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=53">药物检测仪器</a>
             							<a href="category.php?id=54">农业和食品专用仪器</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=53"> &nbsp;&nbsp;&nbsp;&nbsp;  药物检测仪器</a>
                                                                                                                            </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=53">&nbsp;&nbsp;&nbsp;&nbsp; 药物检测仪器</a>
                                                              </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=25"><big>计量仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=25">计量仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=9">温度计量仪器</a>
             							<a href="category.php?id=31">天平衡器</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=9"> &nbsp;&nbsp;&nbsp;&nbsp;  温度计量仪器</a>
                                                                                                                            </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=9">&nbsp;&nbsp;&nbsp;&nbsp; 温度计量仪器</a>
                                                              </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=30"><big>实验室仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=30">实验室仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
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
                                                  						<a href="category.php?id=42"> &nbsp;&nbsp;&nbsp;&nbsp;  清洗消毒设备</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=42">&nbsp;&nbsp;&nbsp;&nbsp; 清洗消毒设备</a>
                                                                                                                                                                                                                                                                      </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=32"><big>物性测试仪器</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=32">物性测试仪器</a></strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></li>
						<li class="txt">
             							<a href="category.php?id=33">粒度仪</a>
             							<a href="category.php?id=34">热分析仪器</a>
             							<a href="category.php?id=35">流变仪</a>
             							<a href="category.php?id=36">环境试验箱</a>
             							<a href="category.php?id=37">其他</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=33"> &nbsp;&nbsp;&nbsp;&nbsp;  粒度仪</a>
                                                                                                                                                                                                                                                                                  </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=33">&nbsp;&nbsp;&nbsp;&nbsp; 粒度仪</a>
                                                                                                                                         </dd>
		</dl>
        
			<div class="clear"></div>
  </div></div>
<div class="slide">
<ul class="bd">
              <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019xbnmnr.jpg" /></a></small></li>
                <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019zyjjaj.jpg" /></a></small></li>
                <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019wbsehx.jpg" /></a></small></li>
                <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019ehwgfi.jpg" /></a></small></li>
                <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019nktwuv.jpg" /></a></small></li>
  
        </ul>
<div class="hd"><ul>
  <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
  </ul><a class="prev">></a></div>
</div>
<script type="text/javascript">jQuery(".slide").slide({titCell:".hd li",mainCell:".bd",effect:"fade",delayTime:1000,interTime:5000,autoPlay:true,nextCell:".prev"});</script>
<div class="homebrand">
	<div class="brbg">
	<div class="title">
	<em><a href="brand.php" target="_blank">更多品牌</a></em><img src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/brand_tx1.gif" align="absmiddle" /></div>
	<div class="brandbox">
		<span class="brand_left" id="brand_left" title="向左滚动"></span>
		<div class="brandlist">
		<ul id="brandlist">
                                      <li><a href="search.php?brand=12" target="_blank" title="岛津(Shimadzu)"><img class="brandlist_img" src="data/brandlogo/1493679153287406987.jpg" alt="岛津(Shimadzu)"/></a></li>
                                                <li><a href="search.php?brand=16" target="_blank" title="梅特勒(Mettler Toledo)"><img class="brandlist_img" src="data/brandlogo/1493679274520525272.jpg" alt="梅特勒(Mettler Toledo)"/></a></li>
                                                <li><a href="search.php?brand=53" target="_blank" title="北分瑞利"><img class="brandlist_img" src="data/brandlogo/1493680105903116945.jpg" alt="北分瑞利"/></a></li>
                                                <li><a href="search.php?brand=39" target="_blank" title="爱宕(Atago)"><img class="brandlist_img" src="data/brandlogo/1493679813672606030.jpg" alt="爱宕(Atago)"/></a></li>
                                                <li><a href="search.php?brand=28" target="_blank" title="柯尼卡美能达(Konica-Minolta)"><img class="brandlist_img" src="data/brandlogo/1493679572947851402.jpg" alt="柯尼卡美能达(Konica-Minolta)"/></a></li>
                                                <li><a href="search.php?brand=69" target="_blank" title="上海精科"><img class="brandlist_img" src="data/brandlogo/1493850792349300618.jpg" alt="上海精科"/></a></li>
                                                <li><a href="search.php?brand=15" target="_blank" title="艾卡(IKA)"><img class="brandlist_img" src="data/brandlogo/1493679252214728562.jpg" alt="艾卡(IKA)"/></a></li>
                                                <li><a href="search.php?brand=14" target="_blank" title="艾本德(Eppendorf)"><img class="brandlist_img" src="data/brandlogo/1493679218957881629.jpg" alt="艾本德(Eppendorf)"/></a></li>
                                                <li><a href="search.php?brand=21" target="_blank" title="上海一恒"><img class="brandlist_img" src="data/brandlogo/1493679416577096340.jpg" alt="上海一恒"/></a></li>
                                                <li><a href="search.php?brand=68" target="_blank" title="普拉勒（PECULIAR）"><img class="brandlist_img" src="data/brandlogo/1493681632533143193.jpg" alt="普拉勒（PECULIAR）"/></a></li>
                                                <li><a href="search.php?brand=22" target="_blank" title="松下(Panasonic)"><img class="brandlist_img" src="data/brandlogo/1493679440592304698.jpg" alt="松下(Panasonic)"/></a></li>
                                                <li><a href="search.php?brand=23" target="_blank" title="博勒飞(Brookfield)"><img class="brandlist_img" src="data/brandlogo/1493679463108002303.jpg" alt="博勒飞(Brookfield)"/></a></li>
                  		</ul>
		</div>
		<span class="brand_right" id="brand_right" title="向右滚动"></span>
	</div>
    <script type="text/javascript">
	var bodyh=document.documentElement.clientHeight;
	var bodyw=document.documentElement.clientWidth
	if(bodyw < 1200)
	{
	}
	else
	{
	  jQuery(".brandbox").slide({effect:"leftLoop",mainCell:".brandlist ul",delayTime:1000,interTime:5000,autoPlay:true,prevCell:".brand_left",nextCell:".brand_right",scroll:5,vis:6,easing:"easeOutCirc"});
	}
    </script> 
	</div>
</div>
</div>
<div class="clear line15"></div>
<div class="abody">
    <script type="text/javascript">
	jQuery(".newprobox").slide({titCell:".title_h5 li",mainCell:".hotprox",delayTime:0,delayTime:500,interTime:5000,autoPlay:true});
    </script>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col1">
		<strong>耗材配件 <span>1F</span></strong>
		<em>
   
        <a href="category.php?id=52" target="_blank">色谱柱</a> | 
     
        <a href="category.php?id=55" target="_blank">定氮仪</a> | 
  
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=15" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=4&uri=' target='_blank'><img src='data/afficheimg/1493751391871309701.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=76" target="_blank"><img src="images/201705/thumb_img/76_thumb_G_1493848479463.jpg"  alt="WondaGuard C18 保护柱" title="WondaGuard C18 保护柱"/></a><p class="tit protit_box"><a href="goods.php?id=76" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">WondaGuard C18 保护柱</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t2"><a href="goods.php?id=75" target="_blank"><img src="images/201705/thumb_img/75_thumb_G_1493848429998.jpg"  alt="岛津(Shimadzu) 氘灯" title="岛津(Shimadzu) 氘灯"/></a><p class="tit protit_box"><a href="goods.php?id=75" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) 氘灯</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t3"><a href="goods.php?id=74" target="_blank"><img src="images/201705/thumb_img/74_thumb_G_1493848304335.jpg"  alt=" Inertsil ODS-SP 液相色谱柱" title=" Inertsil ODS-SP 液相色谱柱"/></a><p class="tit protit_box"><a href="goods.php?id=74" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">Inertsil ODS-SP 液相色谱...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t4"><a href="goods.php?id=73" target="_blank"><img src="images/201705/thumb_img/73_thumb_G_1493848141922.jpg"  alt="岛津(Shimadzu) GC毛细管色谱柱WondaCap系列" title="岛津(Shimadzu) GC毛细管色谱柱WondaCap系列"/></a><p class="tit protit_box"><a href="goods.php?id=73" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) GC毛细管色谱...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t5"><a href="goods.php?id=72" target="_blank"><img src="images/201705/thumb_img/72_thumb_G_1493848036429.jpg"  alt="岛津(Shimadzu) 进样垫" title="岛津(Shimadzu) 进样垫"/></a><p class="tit protit_box"><a href="goods.php?id=72" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) 进样垫</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t6"><a href="goods.php?id=71" target="_blank"><img src="images/201705/thumb_img/71_thumb_G_1493847935599.jpg"  alt="岛津(Shimadzu) InertCap 1 毛细管柱" title="岛津(Shimadzu) InertCap 1 毛细管柱"/></a><p class="tit protit_box"><a href="goods.php?id=71" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) InertCa...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t7"><a href="goods.php?id=70" target="_blank"><img src="images/201705/thumb_img/70_thumb_G_1493847861501.jpg"  alt="岛津(Shimadzu) 样品瓶" title="岛津(Shimadzu) 样品瓶"/></a><p class="tit protit_box"><a href="goods.php?id=70" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) 样品瓶</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">耗材配件热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=76" target="_blank"><img src="images/201705/thumb_img/76_thumb_G_1493848479463.jpg" alt="WondaGuard C18 保护柱"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=76" title="WondaGuard C18 保护柱">WondaGuard C18 保护柱</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=76"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=75" target="_blank"><img src="images/201705/thumb_img/75_thumb_G_1493848429998.jpg" alt="岛津(Shimadzu) 氘灯"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=75" title="岛津(Shimadzu) 氘灯">岛津(Shimadzu) 氘灯</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=75"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=74" target="_blank"><img src="images/201705/thumb_img/74_thumb_G_1493848304335.jpg" alt=" Inertsil ODS-SP 液相色谱柱"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=74" title=" Inertsil ODS-SP 液相色谱柱">Inertsil ODS-SP 液相色谱...</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=74"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=73" title="岛津(Shimadzu) GC毛细管色谱柱WondaCap系列">岛津(Shimadzu) GC毛细管色谱...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=72" title="岛津(Shimadzu) 进样垫">岛津(Shimadzu) 进样垫</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=71" title="岛津(Shimadzu) InertCap 1 毛细管柱">岛津(Shimadzu) InertCa...</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col2">
		<strong>光学仪器 <span>2F</span></strong>
		<em>
   
        <a href="category.php?id=7" target="_blank">光学测量仪</a> | 
  
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=6" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=5&uri=' target='_blank'><img src='data/afficheimg/1493751459928963506.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=83" target="_blank"><img src="images/201705/thumb_img/83_thumb_G_1493851119812.jpg"  alt="上海精科 WYA－2S数字阿贝折射仪" title="上海精科 WYA－2S数字阿贝折射仪"/></a><p class="tit protit_box"><a href="goods.php?id=83" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">上海精科 WYA－2S数字阿贝折射仪</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t2"><a href="goods.php?id=82" target="_blank"><img src="images/201705/thumb_img/82_thumb_G_1493851043442.jpg"  alt=" 上海精科 WZZ－1自动旋光仪" title=" 上海精科 WZZ－1自动旋光仪"/></a><p class="tit protit_box"><a href="goods.php?id=82" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">上海精科 WZZ－1自动旋光仪</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t3"><a href="goods.php?id=81" target="_blank"><img src="images/201705/thumb_img/81_thumb_G_1493850578395.jpg"  alt="CR-10小型色差计" title="CR-10小型色差计"/></a><p class="tit protit_box"><a href="goods.php?id=81" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">CR-10小型色差计</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t4"><a href="goods.php?id=80" target="_blank"><img src="images/201705/thumb_img/80_thumb_G_1493850348128.jpg"  alt="CR-400/CR-410色彩色差计" title="CR-400/CR-410色彩色差计"/></a><p class="tit protit_box"><a href="goods.php?id=80" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">CR-400/CR-410色彩色差计</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t5"><a href="goods.php?id=79" target="_blank"><img src="images/201705/thumb_img/79_thumb_G_1493849883985.jpg"  alt=" PAL-ACID4醋酸酸度计" title=" PAL-ACID4醋酸酸度计"/></a><p class="tit protit_box"><a href="goods.php?id=79" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">PAL-ACID4醋酸酸度计</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t6"><a href="goods.php?id=78" target="_blank"><img src="images/201705/thumb_img/78_thumb_G_1493849679080.jpg"  alt="PR-101α 中低浓度数显折射计" title="PR-101α 中低浓度数显折射计"/></a><p class="tit protit_box"><a href="goods.php?id=78" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">PR-101α 中低浓度数显折射计</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t7"><a href="goods.php?id=77" target="_blank"><img src="images/201705/thumb_img/77_thumb_G_1493849597025.jpg"  alt="MASTER-AGRI 刻度式折射计" title="MASTER-AGRI 刻度式折射计"/></a><p class="tit protit_box"><a href="goods.php?id=77" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">MASTER-AGRI 刻度式折射计</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">光学仪器热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=83" target="_blank"><img src="images/201705/thumb_img/83_thumb_G_1493851119812.jpg" alt="上海精科 WYA－2S数字阿贝折射仪"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=83" title="上海精科 WYA－2S数字阿贝折射仪">上海精科 WYA－2S数字阿贝折射仪</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=83"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=82" target="_blank"><img src="images/201705/thumb_img/82_thumb_G_1493851043442.jpg" alt=" 上海精科 WZZ－1自动旋光仪"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=82" title=" 上海精科 WZZ－1自动旋光仪">上海精科 WZZ－1自动旋光仪</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=82"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=81" target="_blank"><img src="images/201705/thumb_img/81_thumb_G_1493850578395.jpg" alt="CR-10小型色差计"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=81" title="CR-10小型色差计">CR-10小型色差计</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=81"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=80" title="CR-400/CR-410色彩色差计">CR-400/CR-410色彩色差计</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=79" title=" PAL-ACID4醋酸酸度计">PAL-ACID4醋酸酸度计</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=78" title="PR-101α 中低浓度数显折射计">PR-101α 中低浓度数显折射计</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col3">
		<strong>实验室仪器 <span>3F</span></strong>
		<em>
   
        <a href="category.php?id=42" target="_blank">清洗消毒设备</a> | 
     
        <a href="category.php?id=43" target="_blank">制样消解设备</a> | 
     
        <a href="category.php?id=44" target="_blank">分离萃取设备</a> | 
                
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=30" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=10&uri=category.php?id=33' target='_blank'><img src='data/afficheimg/1493762466624621655.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=90" target="_blank"><img src="images/201705/thumb_img/90_thumb_G_1493852603500.jpg"  alt="松下全自动高压蒸汽灭菌器MLS-3751L-PC MLS-3781L-PC" title="松下全自动高压蒸汽灭菌器MLS-3751L-PC MLS-3781L-PC"/></a><p class="tit protit_box"><a href="goods.php?id=90" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">松下全自动高压蒸汽灭菌器MLS-3751...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t2"><a href="goods.php?id=89" target="_blank"><img src="images/201705/thumb_img/89_thumb_G_1493852473780.jpg"  alt=" 上海一恒 恒温恒湿箱LHS-50CH" title=" 上海一恒 恒温恒湿箱LHS-50CH"/></a><p class="tit protit_box"><a href="goods.php?id=89" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">上海一恒 恒温恒湿箱LHS-50CH</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t3"><a href="goods.php?id=88" target="_blank"><img src="images/201705/thumb_img/88_thumb_G_1493852341381.jpg"  alt="Peculiar普拉勒 高纯氢气发生器Hydrogen-500" title="Peculiar普拉勒 高纯氢气发生器Hydrogen-500"/></a><p class="tit protit_box"><a href="goods.php?id=88" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">Peculiar普拉勒 高纯氢气发生器H...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t4"><a href="goods.php?id=87" target="_blank"><img src="images/201705/thumb_img/87_thumb_G_1493852257424.jpg"  alt="上海一恒 真空干燥箱BPZ-6933LC (原BPZ-6930LC)" title="上海一恒 真空干燥箱BPZ-6933LC (原BPZ-6930LC)"/></a><p class="tit protit_box"><a href="goods.php?id=87" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">上海一恒 真空干燥箱BPZ-6933LC...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t5"><a href="goods.php?id=86" target="_blank"><img src="images/201705/thumb_img/86_thumb_G_1493852173731.jpg"  alt="艾本德(Eppendorf) Research® plus 可调量程移液器" title="艾本德(Eppendorf) Research® plus 可调量程移液器"/></a><p class="tit protit_box"><a href="goods.php?id=86" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">艾本德(Eppendorf) Resea...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t6"><a href="goods.php?id=85" target="_blank"><img src="images/201705/thumb_img/85_thumb_G_1493852081847.jpg"  alt="圣斯特无油真空泵 R300" title="圣斯特无油真空泵 R300"/></a><p class="tit protit_box"><a href="goods.php?id=85" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">圣斯特无油真空泵 R300</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t7"><a href="goods.php?id=84" target="_blank"><img src="images/201705/thumb_img/84_thumb_G_1493852009544.jpg"  alt="艾卡(IKA) A11分析研磨机" title="艾卡(IKA) A11分析研磨机"/></a><p class="tit protit_box"><a href="goods.php?id=84" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">艾卡(IKA) A11分析研磨机</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">实验室仪器热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=90" target="_blank"><img src="images/201705/thumb_img/90_thumb_G_1493852603500.jpg" alt="松下全自动高压蒸汽灭菌器MLS-3751L-PC MLS-3781L-PC"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=90" title="松下全自动高压蒸汽灭菌器MLS-3751L-PC MLS-3781L-PC">松下全自动高压蒸汽灭菌器MLS-3751...</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=90"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=89" target="_blank"><img src="images/201705/thumb_img/89_thumb_G_1493852473780.jpg" alt=" 上海一恒 恒温恒湿箱LHS-50CH"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=89" title=" 上海一恒 恒温恒湿箱LHS-50CH">上海一恒 恒温恒湿箱LHS-50CH</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=89"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=88" target="_blank"><img src="images/201705/thumb_img/88_thumb_G_1493852341381.jpg" alt="Peculiar普拉勒 高纯氢气发生器Hydrogen-500"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=88" title="Peculiar普拉勒 高纯氢气发生器Hydrogen-500">Peculiar普拉勒 高纯氢气发生器H...</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=88"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=87" title="上海一恒 真空干燥箱BPZ-6933LC (原BPZ-6930LC)">上海一恒 真空干燥箱BPZ-6933LC...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=86" title="艾本德(Eppendorf) Research® plus 可调量程移液器">艾本德(Eppendorf) Resea...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=85" title="圣斯特无油真空泵 R300">圣斯特无油真空泵 R300</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col4">
		<strong>行业专用仪器 <span>4F</span></strong>
		<em>
   
        <a href="category.php?id=53" target="_blank">药物检测仪器</a> | 
     
        <a href="category.php?id=54" target="_blank">农业和食品专用仪器</a> | 
  
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=22" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=11&uri=' target='_blank'><img src='data/afficheimg/1369547583465615309.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=91" target="_blank"><img src="images/201705/thumb_img/91_thumb_G_1493853138475.jpg"  alt="龟甲万(Kikkoman) Lumitester PD-20 ATP荧光检测仪" title="龟甲万(Kikkoman) Lumitester PD-20 ATP荧光检测仪"/></a><p class="tit protit_box"><a href="goods.php?id=91" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">龟甲万(Kikkoman) Lumite...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">行业专用仪器热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=91" target="_blank"><img src="images/201705/thumb_img/91_thumb_G_1493853138475.jpg" alt="龟甲万(Kikkoman) Lumitester PD-20 ATP荧光检测仪"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=91" title="龟甲万(Kikkoman) Lumitester PD-20 ATP荧光检测仪">龟甲万(Kikkoman) Lumite...</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=91"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                
                
                                                      
                                    
                    
                    
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col5">
		<strong>分析仪器 <span>5F</span></strong>
		<em>
   
        <a href="category.php?id=2" target="_blank">色谱</a> | 
     
        <a href="category.php?id=3" target="_blank">光谱</a> | 
     
        <a href="category.php?id=4" target="_blank">质谱</a> | 
      
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=1" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=12&uri=' target='_blank'><img src='data/afficheimg/1369547596245713492.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=63" target="_blank"><img src="images/no_picture.gif"  alt="梅特勒(Mettler Toledo) FiveEasy™ plus电导率仪–FE38" title="梅特勒(Mettler Toledo) FiveEasy™ plus电导率仪–FE38"/></a><p class="tit protit_box"><a href="goods.php?id=63" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t2"><a href="goods.php?id=69" target="_blank"><img src="images/201705/thumb_img/69_thumb_G_1493839350142.jpg"  alt="北分瑞利 SY-8100 高效液相色谱仪" title="北分瑞利 SY-8100 高效液相色谱仪"/></a><p class="tit protit_box"><a href="goods.php?id=69" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">北分瑞利 SY-8100 高效液相色谱仪</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t3"><a href="goods.php?id=62" target="_blank"><img src="data/index_gimg/1493838281388151016.jpg"  alt=" 岛津(Shimadzu) 紫外可见分光光度计 UV-2450/2550" title=" 岛津(Shimadzu) 紫外可见分光光度计 UV-2450/2550"/></a><p class="tit protit_box"><a href="goods.php?id=62" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) 紫外可见分光光...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t4"><a href="goods.php?id=64" target="_blank"><img src="images/no_picture.gif"  alt="梅特勒(Mettler Toledo) FiveEasy™ plus台式PH计–FE28" title="梅特勒(Mettler Toledo) FiveEasy™ plus台式PH计–FE28"/></a><p class="tit protit_box"><a href="goods.php?id=64" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t5"><a href="goods.php?id=65" target="_blank"><img src="images/201705/thumb_img/65_thumb_G_1493838787386.jpg"  alt="梅特勒(Mettler Toledo) FG2 – FiveGo™ 便携式pH计" title="梅特勒(Mettler Toledo) FG2 – FiveGo™ 便携式pH计"/></a><p class="tit protit_box"><a href="goods.php?id=65" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t6"><a href="goods.php?id=66" target="_blank"><img src="images/201705/thumb_img/66_thumb_G_1493838888093.jpg"  alt="岛津(Shimadzu) 双光束紫外可见分光光度计 UV-1800" title="岛津(Shimadzu) 双光束紫外可见分光光度计 UV-1800"/></a><p class="tit protit_box"><a href="goods.php?id=66" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) 双光束紫外可见...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t7"><a href="goods.php?id=67" target="_blank"><img src="images/201705/thumb_img/67_thumb_G_1493838981942.jpg"  alt="岛津(Shimadzu) 紫外可见分光光度计 UV-1750" title="岛津(Shimadzu) 紫外可见分光光度计 UV-1750"/></a><p class="tit protit_box"><a href="goods.php?id=67" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">岛津(Shimadzu) 紫外可见分光光...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">分析仪器热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=69" target="_blank"><img src="images/201705/thumb_img/69_thumb_G_1493839350142.jpg" alt="北分瑞利 SY-8100 高效液相色谱仪"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=69" title="北分瑞利 SY-8100 高效液相色谱仪">北分瑞利 SY-8100 高效液相色谱仪</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=69"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=68" target="_blank"><img src="images/201705/thumb_img/68_thumb_G_1493839113913.jpg" alt="梅特勒(Mettler Toledo) SevenGo™ 轻巧型便携式PH计-SG2"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=68" title="梅特勒(Mettler Toledo) SevenGo™ 轻巧型便携式PH计-SG2">梅特勒(Mettler Toledo) ...</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=68"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=67" target="_blank"><img src="images/201705/thumb_img/67_thumb_G_1493838981942.jpg" alt="岛津(Shimadzu) 紫外可见分光光度计 UV-1750"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=67" title="岛津(Shimadzu) 紫外可见分光光度计 UV-1750">岛津(Shimadzu) 紫外可见分光光...</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=67"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=66" title="岛津(Shimadzu) 双光束紫外可见分光光度计 UV-1800">岛津(Shimadzu) 双光束紫外可见...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=65" title="梅特勒(Mettler Toledo) FG2 – FiveGo™ 便携式pH计">梅特勒(Mettler Toledo) ...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=64" title="梅特勒(Mettler Toledo) FiveEasy™ plus台式PH计–FE28">梅特勒(Mettler Toledo) ...</a></p>
					</li>
                                  
                                                   
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col6">
		<strong>计量仪器 <span>6F</span></strong>
		<em>
   
        <a href="category.php?id=9" target="_blank">温度计量仪器</a> | 
     
        <a href="category.php?id=31" target="_blank">天平衡器</a> | 
  
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=25" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=13&uri=' target='_blank'><img src='data/afficheimg/1369547610219041353.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=105" target="_blank"><img src="images/201705/thumb_img/105_thumb_G_1493855672047.jpg"  alt="testo 826-T2食品用红外测温仪" title="testo 826-T2食品用红外测温仪"/></a><p class="tit protit_box"><a href="goods.php?id=105" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">testo 826-T2食品用红外测温仪</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t2"><a href="goods.php?id=104" target="_blank"><img src="images/201705/thumb_img/104_thumb_G_1493855627457.jpg"  alt="NewClassic MS系列半微量天平" title="NewClassic MS系列半微量天平"/></a><p class="tit protit_box"><a href="goods.php?id=104" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">NewClassic MS系列半微量天平</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t3"><a href="goods.php?id=103" target="_blank"><img src="images/201705/thumb_img/103_thumb_G_1493855585231.jpg"  alt="AL104 分析天平" title="AL104 分析天平"/></a><p class="tit protit_box"><a href="goods.php?id=103" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">AL104 分析天平</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t4"><a href="goods.php?id=102" target="_blank"><img src="images/201705/thumb_img/102_thumb_G_1493855494416.jpg"  alt="分析天平ATX/ATY系列" title="分析天平ATX/ATY系列"/></a><p class="tit protit_box"><a href="goods.php?id=102" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">分析天平ATX/ATY系列</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t5"><a href="goods.php?id=101" target="_blank"><img src="images/201705/thumb_img/101_thumb_G_1493855435849.jpg"  alt=" testo 810红外测温仪" title=" testo 810红外测温仪"/></a><p class="tit protit_box"><a href="goods.php?id=101" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">testo 810红外测温仪</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t6"><a href="goods.php?id=100" target="_blank"><img src="images/201705/thumb_img/100_thumb_G_1493855346753.jpg"  alt="testo 106防水型食品中心温度计" title="testo 106防水型食品中心温度计"/></a><p class="tit protit_box"><a href="goods.php?id=100" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">testo 106防水型食品中心温度计</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t7"><a href="goods.php?id=99" target="_blank"><img src="images/201705/thumb_img/99_thumb_G_1493855262029.jpg"  alt="NewClassic ML系列分析天平" title="NewClassic ML系列分析天平"/></a><p class="tit protit_box"><a href="goods.php?id=99" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">NewClassic ML系列分析天平</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">计量仪器热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=105" target="_blank"><img src="images/201705/thumb_img/105_thumb_G_1493855672047.jpg" alt="testo 826-T2食品用红外测温仪"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=105" title="testo 826-T2食品用红外测温仪">testo 826-T2食品用红外测温仪</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=105"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=104" target="_blank"><img src="images/201705/thumb_img/104_thumb_G_1493855627457.jpg" alt="NewClassic MS系列半微量天平"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=104" title="NewClassic MS系列半微量天平">NewClassic MS系列半微量天平</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=104"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=103" target="_blank"><img src="images/201705/thumb_img/103_thumb_G_1493855585231.jpg" alt="AL104 分析天平"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=103" title="AL104 分析天平">AL104 分析天平</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=103"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=102" title="分析天平ATX/ATY系列">分析天平ATX/ATY系列</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=101" title=" testo 810红外测温仪">testo 810红外测温仪</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=100" title="testo 106防水型食品中心温度计">testo 106防水型食品中心温度计</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col7">
		<strong>物性测试仪器 <span>7F</span></strong>
		<em>
   
        <a href="category.php?id=33" target="_blank">粒度仪</a> | 
     
        <a href="category.php?id=34" target="_blank">热分析仪器</a> | 
     
        <a href="category.php?id=35" target="_blank">流变仪</a> | 
      
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=32" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
<a href='affiche.php?ad_id=14&uri=' target='_blank'><img src='data/afficheimg/1369547622956661686.jpg' width='255' height='360' /></a>     
		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=98" target="_blank"><img src="images/201705/thumb_img/98_thumb_G_1493854587667.jpg"  alt="美墨尔特(MEMMERT) 环境测试箱CTC256" title="美墨尔特(MEMMERT) 环境测试箱CTC256"/></a><p class="tit protit_box"><a href="goods.php?id=98" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">美墨尔特(MEMMERT) 环境测试箱C...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t2"><a href="goods.php?id=97" target="_blank"><img src="images/201705/thumb_img/97_thumb_G_1493854448848.jpg"  alt=" 博勒飞(Brookfield) DV-Ⅱ+ Pro粘度计" title=" 博勒飞(Brookfield) DV-Ⅱ+ Pro粘度计"/></a><p class="tit protit_box"><a href="goods.php?id=97" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">博勒飞(Brookfield) DV-Ⅱ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t3"><a href="goods.php?id=96" target="_blank"><img src="images/201705/thumb_img/96_thumb_G_1493854340139.jpg"  alt="博勒飞(Brookfield) DV-Ⅲ Ultra 流变仪" title="博勒飞(Brookfield) DV-Ⅲ Ultra 流变仪"/></a><p class="tit protit_box"><a href="goods.php?id=96" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">博勒飞(Brookfield) DV-Ⅲ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t4"><a href="goods.php?id=95" target="_blank"><img src="images/201705/thumb_img/95_thumb_G_1493854235105.jpg"  alt="梅特勒(Mettler Toledo) MP70 熔点仪" title="梅特勒(Mettler Toledo) MP70 熔点仪"/></a><p class="tit protit_box"><a href="goods.php?id=95" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t5"><a href="goods.php?id=94" target="_blank"><img src="images/201705/thumb_img/94_thumb_G_1493854058336.jpg"  alt="梅特勒(Mettler Toledo) MP50 熔点仪" title="梅特勒(Mettler Toledo) MP50 熔点仪"/></a><p class="tit protit_box"><a href="goods.php?id=94" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t6"><a href="goods.php?id=93" target="_blank"><img src="images/201705/thumb_img/93_thumb_G_1493853935581.jpg"  alt="梅特勒(Mettler Toledo) TGA/DSC1 同步热分析仪" title="梅特勒(Mettler Toledo) TGA/DSC1 同步热分析仪"/></a><p class="tit protit_box"><a href="goods.php?id=93" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
        <li class="t7"><a href="goods.php?id=92" target="_blank"><img src="images/201705/thumb_img/92_thumb_G_1493853806454.jpg"  alt="梅特勒(Mettler Toledo) DP70 滴点软化点仪" title="梅特勒(Mettler Toledo) DP70 滴点软化点仪"/></a><p class="tit protit_box"><a href="goods.php?id=92" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">梅特勒(Mettler Toledo) ...</a></p><p class="pri protit_box">
        <strong>
                                0.0                 
         </strong><small>0.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">物性测试仪器热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=98" target="_blank"><img src="images/201705/thumb_img/98_thumb_G_1493854587667.jpg" alt="美墨尔特(MEMMERT) 环境测试箱CTC256"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=98" title="美墨尔特(MEMMERT) 环境测试箱CTC256">美墨尔特(MEMMERT) 环境测试箱C...</a></p>
						<p class="pri">
                                0.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=98"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=97" target="_blank"><img src="images/201705/thumb_img/97_thumb_G_1493854448848.jpg" alt=" 博勒飞(Brookfield) DV-Ⅱ+ Pro粘度计"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=97" title=" 博勒飞(Brookfield) DV-Ⅱ+ Pro粘度计">博勒飞(Brookfield) DV-Ⅱ...</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=97"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=96" target="_blank"><img src="images/201705/thumb_img/96_thumb_G_1493854340139.jpg" alt="博勒飞(Brookfield) DV-Ⅲ Ultra 流变仪"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=96" title="博勒飞(Brookfield) DV-Ⅲ Ultra 流变仪">博勒飞(Brookfield) DV-Ⅲ...</a></p>
						<p class="pri">
                                0.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=96"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=95" title="梅特勒(Mettler Toledo) MP70 熔点仪">梅特勒(Mettler Toledo) ...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=94" title="梅特勒(Mettler Toledo) MP50 熔点仪">梅特勒(Mettler Toledo) ...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=93" title="梅特勒(Mettler Toledo) TGA/DSC1 同步热分析仪">梅特勒(Mettler Toledo) ...</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<div class="abody">
	<div class="row7">
<p>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:0:"";s:3:"num";s:0:"";}554fcae493e564ee0dc75bdf2ebf94ca
</p>
	<div class="line15"></div>
        <div class="fnav">
		<div class="title">
		<p><a href="#" target="_blank">查看所有商品分类</a></p>
		</div>
		<ul>
                   			<li><em>
			<a href="category.php?id=1" target="_blank">更多 »</a></em><strong>分析仪器：</strong>
                           			<a href="category.php?id=2" target="_blank">色谱</a> |
                                          			<a href="category.php?id=3" target="_blank">光谱</a> |
                                          			<a href="category.php?id=4" target="_blank">质谱</a> |
                                          			<a href="category.php?id=5" target="_blank">电化学仪器</a> |
                                          			<a href="category.php?id=14" target="_blank">元素分析仪</a> |
                           
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=6" target="_blank">更多 »</a></em><strong>光学仪器：</strong>
                           			<a href="category.php?id=7" target="_blank">光学测量仪</a> |
                           
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=10" target="_blank">更多 »</a></em><strong>环境监测仪器：</strong>
                           			<a href="category.php?id=38" target="_blank">水质分析仪</a> |
                                          			<a href="category.php?id=39" target="_blank">气体检测仪</a> |
                           
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=11" target="_blank">更多 »</a></em><strong>生命科学：</strong>
                           			<a href="category.php?id=40" target="_blank">生化分子生物</a> |
                                          			<a href="category.php?id=41" target="_blank">生物工程设备</a> |
                                          			<a href="category.php?id=80" target="_blank">电泳成像</a> |
                           
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=15" target="_blank">更多 »</a></em><strong>耗材配件：</strong>
                           			<a href="category.php?id=52" target="_blank">色谱柱</a> |
                                          			<a href="category.php?id=55" target="_blank">定氮仪</a> |
                           
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=22" target="_blank">更多 »</a></em><strong>行业专用仪器：</strong>
                           			<a href="category.php?id=53" target="_blank">药物检测仪器</a> |
                                          			<a href="category.php?id=54" target="_blank">农业和食品专用仪器</a> |
                           
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                                                                            
			<!--<li><em><a href="http://www.hecha.cn/wulong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>乌 龙 茶：</strong><a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">铁 观 音</a> |  <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">大 红 袍</a> |  <a href="http://www.hecha.cn/shuixian_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">水　　仙</a> |  <a href="http://www.hecha.cn/rougui_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">肉　　桂</a> |  <a href="http://www.hecha.cn/qitawulong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">其他岩茶</a></li>
			<li><em><a href="http://www.hecha.cn/hongcha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>红　　茶：</strong><a href="http://www.hecha.cn/xiaozhong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">正山小种</a> |  <a href="http://www.hecha.cn/qimen_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">祁门红茶</a> |  <a href="http://www.hecha.cn/dianhong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">云南滇红</a> |  <a href="http://www.hecha.cn/rougui_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">坦洋工夫</a> |  <a href="http://www.hecha.cn/zhenghe_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">政和工夫</a> |  <a href="http://www.hecha.cn/bailin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白琳功夫</a> |  <a href="http://www.hecha.cn/jinjunmei_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">金骏眉</a> |  <a href="http://www.hecha.cn/qitahongcha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">其他红茶</a></li>
			<li><em><a href="http://www.hecha.cn/baicha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>福鼎白茶：</strong><a href="http://www.hecha.cn/baihaoyinzhen_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白毫银针</a> |  <a href="http://www.hecha.cn/baimudan_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白 牡 丹</a> |  <a href="http://www.hecha.cn/shoumei_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">寿　　眉</a> |  <a href="http://www.hecha.cn/xinbaicha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">新工艺白茶</a></li>
			<li><em><a href="http://www.hecha.cn/sitemap.php" target="_blank" onclick="return gourl(this.href,'?hra=81',this.target);">更多 »</a></em><strong>其他茗茶：</strong><a href="http://www.hecha.cn/puer_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">普 洱 茶</a> |  <a href="http://www.hecha.cn/molihuacha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">茉莉花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">玫瑰花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">大麦茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">菊花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">苦荞茶</a></li>
			<li><em><a href="http://www.hecha.cn/chaju_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>精品茶具：</strong><a href="http://www.hecha.cn/gongfuchaju_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">功夫茶具</a> |  <a href="http://www.hecha.cn/dianzichaju_list.html" target="_blank">电子茶具</a> |  <a href="http://www.hecha.cn/chahuchabei_list.html" target="_blank">茶杯茶壶</a> |  <a href="http://www.hecha.cn/shipin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">茶 配 饰</a></li>-->
		</ul>
		<div class="clear"></div>
	</div>
	</div>
	<div class="row8">
<div class="img">
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:0:"";s:3:"num";s:0:"";}554fcae493e564ee0dc75bdf2ebf94ca
</div>
		</div>
	</div>
	<div class="clear line15"></div>
</div>
<div class="abody">
	<div class="line15"></div>
		<div class="txtli_b">
        
		<dl class="st1">
			<div class="title_h2" style="cursor:hand"><strong><a href="article_cat.php?id=10">技术应用</a></strong><em><a href="article_cat.php?id=10">更多...</a></em></div>
  
    
			<dt><a href="article.php?id=69" target="_blank" title="高压灭菌器如何合理使用及如何控制灭菌时间"><img src="" width="92" height="92" align="absmiddle" /></a>
<p>
				<strong><a href="article.php?id=69" title="高压灭菌器如何合理使用及如何控制灭菌时间" target="_blank">高压灭菌器如何合理使用及如何控制灭菌时间</a></strong>
				<a href="article.php?id=69" title="高压灭菌器如何合理使用及如何控制灭菌时间" class="link" target="_blank">详细</a>
			</p>
			<div class="clear"></div>
			</dt>
    
    
    
    
    
    
    
    
    
    
    
  			<dd>
 
     
    
  <h5><a href="article.php?id=68" title="如何选择移液器" target="_blank">如何选择移液器</a></h5>
     
    
  <h5><a href="article.php?id=67" title="电子天平选购常识" target="_blank">电子天平选购常识</a></h5>
     
    
  <h5><a href="article.php?id=66" title="梅特勒-托利多pH计&电导率仪常见问题解决方法" target="_blank">梅特勒-托利多pH计&电导率仪常见问题解决方法</a></h5>
     
    
  <h5><a href="article.php?id=65" title="ATAGO在乳制品行业的应用检测方案" target="_blank">ATAGO在乳制品行业的应用检测方案</a></h5>
     
      <p><a href="article.php?id=64" title="磁力搅拌器使用过程中应注意的问题" target="_blank">磁力搅拌器使用过程中应注意的问题</a></p>
   
      <p><a href="article.php?id=63" title="铬毒胶囊检测方案 - 微波消解石墨炉原子吸收法" target="_blank">铬毒胶囊检测方案 - 微波消解石墨炉原子吸收法</a></p>
   
      <p><a href="article.php?id=62" title="饮用水溴酸盐检测经济解决方案" target="_blank">饮用水溴酸盐检测经济解决方案</a></p>
   
      <p><a href="article.php?id=61" title="肉品新鲜度的快速检验法" target="_blank">肉品新鲜度的快速检验法</a></p>
   
      <p><a href="article.php?id=60" title="猪肉猪肝中莱克多巴胺和瘦肉精的前处理及检测" target="_blank">猪肉猪肝中莱克多巴胺和瘦肉精的前处理及检测</a></p>
   
      <p><a href="article.php?id=59" title="顶空-气相色谱法测定血液中酒精含量" target="_blank">顶空-气相色谱法测定血液中酒精含量</a></p>
   
      <p><a href="article.php?id=58" title="饮料糖度的测量方法" target="_blank">饮料糖度的测量方法</a></p>
  
<div class="clear"></div>
			</dd>
            
		</dl>
        
        
		<dl class="st1">
			<div class="title_h2" style="cursor:hand"><strong><a href="article_cat.php?id=11">行业新闻</a></strong><em><a href="article_cat.php?id=11">更多...</a></em></div>
  
    
			<dt><a href="article.php?id=73" target="_blank" title=""土十条"给分析仪器带来了什么？"><img src="" width="92" height="92" align="absmiddle" /></a>
<p>
				<strong><a href="article.php?id=73" title=""土十条"给分析仪器带来了什么？" target="_blank">"土十条"给分析仪器带来了什么？</a></strong>
				<a href="article.php?id=73" title=""土十条"给分析仪器带来了什么？" class="link" target="_blank">详细</a>
			</p>
			<div class="clear"></div>
			</dt>
    
    
    
  			<dd>
 
     
    
  <h5><a href="article.php?id=72" title="暑期大放“价”—岛津LCMS-8040限时特惠" target="_blank">暑期大放“价”—岛津LCMS-8040限时特惠</a></h5>
     
    
  <h5><a href="article.php?id=71" title="2016中国第三方检测产业高峰论坛7月将在南京召开" target="_blank">2016中国第三方检测产业高峰论坛7月将在南京召开</a></h5>
     
    
  <h5><a href="article.php?id=70" title="梅特勒-托利多2016销售增长7% 中国市场超预期“反弹”" target="_blank">梅特勒-托利多2016销售增长7% 中国市场超预期“反弹”</a></h5>
    
<div class="clear"></div>
			</dd>
            
		</dl>
        
        <dl class="st2">
			<div class="title_h2"><strong>网店信息</strong><em><a href="article.php?id=5" target="_blank">更多»</a></em></div>
			<dd class="box1">
  <p><a rel="nofollow" href="article.php?id=1" target="_blank" title="为什么选择和茶网" >为什么选择和茶网</a></p>
    <p><a rel="nofollow" href="article.php?id=2" target="_blank" title="和茶网价值观" >和茶网价值观</a></p>
    <p><a rel="nofollow" href="article.php?id=4" target="_blank" title="联系我们" >联系我们</a></p>
    <p><a rel="nofollow" href="article.php?id=5" target="_blank" title="关于我们" >关于我们</a></p>
  
								<!--<p><a rel="nofollow" href="http://www.hecha.cn/about/hc-about.html" title="和茶网简介" target="_blank">和茶网简介</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_experts.html" title="和茶网产品质量评审委员会介绍 " target="_blank">和茶网产品质量评审委员会介绍 </a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_experts.html" title="评审委员会成员介绍" target="_blank">评审委员会成员介绍</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc-about.html#a1" title="和茶网价值观" target="_blank">和茶网价值观</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_supplier.html" title="和茶网原产地供货商" target="_blank">和茶网原产地供货商</a></p>
								<p><a rel="nofollow" href="http://info.hecha.cn/9/show_27732.html" target="_blank" title="中国首家茶行业中的'国美'和茶匯落户福州" >中国首家茶行业中的"国美"和茶匯落户福州</a></p>
				<p><a rel="nofollow" href="http://info.hecha.cn/8/show_26372.html" target="_blank" title="【媒体报道】和茶网借力世博会成为茶电子商务领跑者">【媒体报道】和茶网借力世博会成为...</a></p>
				<p><a rel="nofollow" href="http://info.hecha.cn/8/show_25924.html" target="_blank" title="【媒体报道】和茶网参展世博会 引领中国茶叶风靡全球">【媒体报道】和茶网参展世博会 引...</a></p>-->
			</dd>
		</dl>
		<div class="row8">
		</div>
		<div class="clear line15"></div>
	</div>
</div>
<div class="abody">
	<div class="flink">
		<div class="title"><strong>友情链接</strong></div>
		<div class="list">
		<ul class="crz">
              <li><a href="http://memmertchina.tecenet.com/" title="美墨尔特(Memmert)" target="_blank">美墨尔特(Memmert)</a></li>
               <li><a href="http://www.shsan-xin.com/" title="上海三信" target="_blank">上海三信</a></li>
                                            
		</ul>
		</div>
	</div>
	<div class="clear line10"></div>
</div>
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
<div class="rnavx">
	<ul id="floarrnav">
	    <li class="slix"><a href="javascript:void(0);" onclick="AddFavorite();" class="st1">收藏我</a></li>
		<li class="slix"><a href="javascript:;" class="st4" id="backtotop">回顶部</a></li>
	</ul>
</div>
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=right&amp;uid=66616" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
</body>
</html>