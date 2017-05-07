(function($)
{
    $.fn.jqzoom = function(options)
    {
        var settings = {
            zoomType: 'standard',
            zoomWidth: 300,
            zoomHeight: 300,
            xOffset: 10,
            yOffset: 0,
            position: "right" ,
            lens:true,
			lensReset : false,
			imageOpacity: 0.2,
			title : false,
			alwaysOn: false,
			showEffect: 'show',
			hideEffect: 'hide',
			fadeinSpeed: 'fast',
			fadeoutSpeed: 'slow',
			preloadImages :true,
			showPreload: false,
			preloadText : 'Loading…',
			preloadPosition : 'center'
        };
			options = options || {};
        	$.extend(settings, options);
		return this.each(function()
		{
			var a = $(this);
			var aTitle = a.attr('title');
			$(a).removeAttr('title');
			$(a).css('outline-style','none');
			var img = $("img", this);
			var imageTitle = img.attr('title');
			img.removeAttr('title');
			var smallimage = new Smallimage( img );
			var smallimagedata = {};
			var btop = 0;
			var bleft = 0;
			var ZoomTitle = '';//(trim(aTitle).length > 0) ? aTitle :(trim(imageTitle).length > 0) ? imageTitle : null;
			var ZoomTitleObj = new zoomTitle();
			var largeimage = new Largeimage(a[0].href);
            largeimage.loadimage();
			var lens = new Lens();
			var lensdata = {};
			var largeimageloaded = false;
			var scale = {};
			var stage = null;
			var running = false;
			var mousepos = {};
			var firstime = 0;
			var preloadshow = false;
			var isMouseDown = false;
			var dragstatus = false
			smallimage.loadimage();
			$(this).click(function(){return false;});
			$(this).hover(function(e)
			{
				mousepos.x = e.pageX;
				mousepos.y	= e.pageY;
				activate();
			},function()
			{
				deactivate();
			});
			if(settings.alwaysOn)
			{
				setTimeout(function(){activate();},150);
			}
			function activate()
			{
				if ( !running ) {
					smallimage.findborder();
					running = true;
					imageTitle = img.attr('title');
					img.removeAttr('title');
					aTitle = a.attr('title');
					$(a).removeAttr('title');
					if (!largeimage || $.browser.safari) {
						largeimage = new Largeimage( a[0].href );
					}
					if(!largeimageloaded || $.browser.safari)
					{
					    if ($.browser.msie && $.browser.version > 6)
					    {
						    largeimage = new Largeimage(a[0].href);
						}
					    largeimage.loadimage();
					}else
					{
					    largeimage = new Largeimage(a[0].href);
					    largeimage.loadimage();
						if(settings.zoomType != 'innerzoom')
						{
							stage = new Stage();
							stage.activate();
						}
						lens = new Lens;
						lens.activate();
					}
					a[0].blur();
					return false;
				}
			}
			function deactivate()
			{
				if(settings.zoomType == 'reverse' &&  !settings.alwaysOn)
				{
					img.css({'opacity' : 1});
				}
				if(!settings.alwaysOn)
				{
					running = false;
					largeimageloaded = false;
					$(lens.node).unbind('mousemove');
					lens.remove();
					if($('div.jqZoomWindow').length >0)
					{
						stage.remove();
					}
					if($('div.jqZoomTitle').length > 0)
					{
						ZoomTitleObj.remove();
					}
					img.attr('title',imageTitle);
					a.attr('title',aTitle);
					$().unbind();
					a.unbind('mousemove');
					firstime = 0;
					if(jQuery('.zoom_ieframe').length > 0)
					{
						jQuery('.zoom_ieframe').remove();
					}
				}else
				{
					if(settings.lensReset)
					{
						switch(settings.zoomType)
						{
							case 'innerzoom':
							largeimage.setcenter();
							break;
							default:
							lens.center();
							break;
						}
					}
				}
				if(settings.alwaysOn)
				{
					activate();
				}
			};
		function Smallimage( image )
		{
			this.node = image[0];
			this.loadimage = function() {
				this.node.src = image[0].src;
			};
			this.findborder = function()
			{
				var bordertop = '';
				bordertop = $(img).css('border-top-width');
				btop = '';
				var borderleft = '';
				borderleft = $(img).css('border-left-width');
				bleft = '';
				if(bordertop)
				{
					for(i=0;i<3;i++)
					{
						var x = [];
						x = bordertop.substr(i,1);
						if(isNaN(x) == false)
						{
							btop = btop +''+ bordertop.substr(i,1);
						}else
						{
							break;
						}
					}
				}
				if(borderleft)
				{
					for(i=0;i<3;i++)
					{
						if(!isNaN(borderleft.substr(i,1)))
						{
							bleft = bleft + borderleft.substr(i,1)
						}else
						{
							break;
						}
					}
				}
				btop = (btop.length > 0) ? eval(btop) : 0;
				bleft = (bleft.length > 0) ? eval(bleft) : 0;
			}
			this.node.onload = function()
			{
				a.css({'cursor':'crosshair','display':'block'});
				if(a.css('position')!= 'absolute' && a.parent().css('position'))
				{
					a.css({'cursor':'crosshair','position':'relative','display':'block'});
				}
				if(a.parent().css('position') != 'absolute')
				{
					a.parent().css('position','relative');
				}
				else{
				}
				if($.browser.safari || $.browser.opera)
				{
					$(img).css({position:'absolute',top:'0px',left:'0px'});
				}
				smallimagedata.w = $( this ).width();
				smallimagedata.h = $( this ).height();
				smallimagedata.h = $( this ).height();
				smallimagedata.pos = $( this ).offset();
				smallimagedata.pos.l = $( this ).offset().left;
				smallimagedata.pos.t = $( this ).offset().top;
				smallimagedata.pos.r = smallimagedata.w + smallimagedata.pos.l;
				smallimagedata.pos.b = smallimagedata.h + smallimagedata.pos.t;
				a.height(smallimagedata.h);
				a.width(smallimagedata.w);
				if(settings.preloadImages)
				{
					largeimage.loadimage();
				}
			};
			return this;
		};
		function Lens()
		{
			this.node = document.createElement("div");
			$(this.node).addClass('jqZoomPup');
			this.node.onclick = function(){
			   window.open($('.jqzoom').attr('href'));	
			}
			this.node.onerror = function() {
				$( lens.node ).remove();
				lens = new Lens();
				lens.activate() ;
			};
			this.loadlens = function()
			{
				switch(settings.zoomType)
				{
					case 'reverse':
						this.image = new Image();
						this.image.src = smallimage.node.src;
						this.node.appendChild( this.image );
						$( this.node ).css({'opacity' : 1});
					break;
					case 'innerzoom':
						this.image = new Image();
						this.image.src = largeimage.node.src;
						this.node.appendChild( this.image );
						$( this.node ).css({'opacity' : 1});
					break
					default:
					break;
				}
				switch(settings.zoomType)
				{
					case 'innerzoom':
						lensdata.w = smallimagedata.w;
						lensdata.h = smallimagedata.h;
					break;
					default:
					    if(isH)
					    {
						    lensdata.w = (settings.zoomWidth)/(scale.x*1.24);
						    lensdata.h = (settings.zoomHeight)/(scale.y*0.84);
						}
						else
						{
						    lensdata.w = (settings.zoomWidth)/(scale.x*1);
						    lensdata.h = (settings.zoomHeight)/(scale.y*1.16);
						}
					break;
				}
			$( this.node ).css({
					width: lensdata.w + 'px',
					height: lensdata.h + 'px',
					position: 'absolute',
					display: 'none',
					borderWidth: 1+'px'
				});
			a.append(this.node);
			}
			return this;
		};
		Lens.prototype.activate = function()
		{
			this.loadlens();
			switch(settings.zoomType)
			{
				case 'reverse':
					img.css({'opacity' : settings.imageOpacity});
					(settings.alwaysOn) ? lens.center() : lens.setposition(null);
					a.bind( 'mousemove', function(e)
					{
						mousepos.x = e.pageX;
						mousepos.y = e.pageY;
						lens.setposition( e );
					});
				break;
				case 'innerzoom':
					$( this.node ).css({top : 0 ,left: 0});
				   	if(settings.title)
					{
						ZoomTitleObj.loadtitle();
					}
					largeimage.setcenter();
				   	a.bind( 'mousemove', function(e)
				   	{
						mousepos.x = e.pageX;
						mousepos.y = e.pageY;
						largeimage.setinner( e );
					});
				break;
				default:
					(settings.alwaysOn) ? lens.center() : lens.setposition(null);
					$(a).bind( 'mousemove', function(e)
					{
						mousepos.x = e.pageX;
						mousepos.y = e.pageY;
						lens.setposition( e );
					});
				break;
			}
			return this;
		};
		Lens.prototype.setposition = function( e)
		{
			if(e)
			{
				mousepos.x = e.pageX;
				mousepos.y	= e.pageY;
			}
			if(firstime == 0)
			{
			 	var lensleft = (smallimagedata.w)/2 - (lensdata.w)/2 ;
			 	var lenstop = (smallimagedata.h)/2 - (lensdata.h)/2 ;
				$('div.jqZoomPup').show()
				if(settings.lens)
				{
					this.node.style.visibility = 'visible';
				}
				else
				{
					this.node.style.visibility = 'hidden';
					$('div.jqZoomPup').hide();
				}
				firstime = 1;
			}else
			{
				var lensleft = mousepos.x - smallimagedata.pos.l - (lensdata.w)/2 ;
				var lenstop = mousepos.y - smallimagedata.pos.t -(lensdata.h)/2 ;
			}
				if(overleft())
				{
					lensleft = 0  + bleft;
				}else
				if(overright())
				{
					if($.browser.msie)
					{
					lensleft = smallimagedata.w - lensdata.w  + bleft + 1  ;
					}
					else
					{
					lensleft = smallimagedata.w - lensdata.w  + bleft - 1  ;
					}
				}
				if(overtop())
				{
					lenstop = 0 + btop ;
				}else
				if(overbottom())
				{
					if($.browser.msie)
					{
					lenstop = smallimagedata.h - lensdata.h  + btop + 1 ;
					}else
					{
					lenstop = smallimagedata.h - lensdata.h - 1 + btop  ;
					}
				}
				lensleft = parseInt(lensleft);
				lenstop = parseInt(lenstop);
				$('div.jqZoomPup',a).css({top: lenstop,left: lensleft });
				if(settings.zoomType == 'reverse')
				{
					$('div.jqZoomPup img',a).css({'position': 'absolute','top': -( lenstop - btop +1) ,'left': -(lensleft - bleft +1)  });
				}
				this.node.style.left = lensleft + 'px';
				this.node.style.top = lenstop + 'px';
				largeimage.setposition();
				function overleft() {
					return mousepos.x - (lensdata.w +2*1)/2  - bleft < smallimagedata.pos.l;
				}
				function overright() {
					return mousepos.x + (lensdata.w + 2* 1)/2  > smallimagedata.pos.r + bleft ;
				}
				function overtop() {
					return mousepos.y - (lensdata.h + 2* 1)/2  - btop < smallimagedata.pos.t;
				}
				function overbottom() {
					return mousepos.y + (lensdata.h + 2* 1)/2    > smallimagedata.pos.b + btop;
				}
			return this;
		};
		Lens.prototype.center = function()
		{
			$('div.jqZoomPup',a).css('display','none');
			var lensleft = (smallimagedata.w)/2 - (lensdata.w)/2 ;
			var lenstop = (smallimagedata.h)/2 - (lensdata.h)/2;
			this.node.style.left = lensleft + 'px';
			this.node.style.top = lenstop + 'px';
			$('div.jqZoomPup',a).css({top: lenstop,left: lensleft });
			if(settings.zoomType == 'reverse')
			{
					$('div.jqZoomPup img',a).css({'position': 'absolute','top': -(lenstop - btop + 1) ,'left': -( lensleft  - bleft +1)   });
			}
			largeimage.setposition();
			if($.browser.msie)
			{
				$('div.jqZoomPup',a).show();
			}else
			{
				setTimeout(function(){$('div.jqZoomPup').fadeIn('fast');},10);
			}
		};
		Lens.prototype.getoffset = function() {
			var o = {};
			o.left = parseInt(this.node.style.left) ;
			o.top =  parseInt(this.node.style.top) ;
			return o;
		};
		Lens.prototype.remove = function()
		{
			if(settings.zoomType == 'innerzoom')
			{
				$('div.jqZoomPup',a).fadeOut('fast',function(){$(this).remove();});
			}else
			{
				$('div.jqZoomPup',a).remove();
			}
		};
		Lens.prototype.findborder = function()
		{
			var bordertop = '';
			bordertop = $('div.jqZoomPup').css('borderTop');
			lensbtop = '';
			var borderleft = '';
			borderleft = $('div.jqZoomPup').css('borderLeft');
			lensbleft = '';
			if($.browser.msie)
			{
				var temp = bordertop.split(' ');
				bordertop = temp[1];
				var temp = borderleft.split(' ');
				borderleft = temp[1];
			}
			if(bordertop)
			{
				for(i=0;i<3;i++)
				{
					var x = [];
					x = bordertop.substr(i,1);
					if(isNaN(x) == false)
					{
						lensbtop = lensbtop +''+ bordertop.substr(i,1);
					}else
					{
						break;
					}
				}
			}
			if(borderleft)
			{
				for(i=0;i<3;i++)
				{
					if(!isNaN(borderleft.substr(i,1)))
					{
						lensbleft = lensbleft + borderleft.substr(i,1)
					}else
					{
						break;
					}
				}
			}
			lensbtop = (lensbtop.length > 0) ? eval(lensbtop) : 0;
			lensbleft = (lensbleft.length > 0) ? eval(lensbleft) : 0;
		}
		function Largeimage( url )
		{
			this.url = url;
			this.node = new Image();
			this.loadimage = function()
			{
				if(!this.node)
				this.node = new Image();
				this.node.style.position = 'absolute';
				this.node.style.display = 'none';
				this.node.style.left = '-5000px';
				this.node.style.top = '10px';
				document.body.appendChild( this.node );
				this.node.src = this.url;
			}
			this.node.onload = function()
			{		
				this.style.display = 'block';
				var w = Math.round($(this).width());
				var	h = Math.round($(this).height());
				this.style.display = 'none';
				scale.x = (w / smallimagedata.w);
				scale.y = (h / smallimagedata.h);
				if($('div.preload').length > 0)
				{
					$('div.preload').remove();
				}
				largeimageloaded = true;
				if(settings.zoomType != 'innerzoom' && running){
					stage = new Stage();
					stage.activate();
				}
				if(running)
				{
				lens = new Lens();
				lens.activate() ;
				}
				if($('div.preload').length > 0)
				{
					$('div.preload').remove();
				}
			}
			return this;
		}
		Largeimage.prototype.setposition = function()
		{
		    if(isH)
		    {
          	    this.node.style.left = Math.ceil(- scale.x / 1.16 * parseInt(lens.getoffset().left) + bleft) + 'px';
			    this.node.style.top = Math.ceil(- scale.y / 0.92 * parseInt(lens.getoffset().top) +btop) + 'px';
			}
			else
			{
			    this.node.style.left = Math.ceil( - scale.x/1 * parseInt(lens.getoffset().left) + bleft) + 'px';
			    this.node.style.top = Math.ceil( - scale.y /1.16 * parseInt(lens.getoffset().top) +btop) + 'px';
			}
		};
		Largeimage.prototype.setinner = function(e) {
          	this.node.style.left = Math.ceil( - scale.x * Math.abs(e.pageX - smallimagedata.pos.l)) + 'px';
			this.node.style.top = Math.ceil( - scale.y * Math.abs(e.pageY - smallimagedata.pos.t)) + 'px';
			$('div.jqZoomPup img',a).css({'position': 'absolute','top': this.node.style.top,'left': this.node.style.left  });
		};
		Largeimage.prototype.setcenter = function() {
          	this.node.style.left = Math.ceil(- scale.x * Math.abs((smallimagedata.w)/2)) + 'px';
			this.node.style.top = Math.ceil( - scale.y * Math.abs((smallimagedata.h)/2)) + 'px';
			$('div.jqZoomPup img',a).css({'position': 'absolute','top': this.node.style.top,'left': this.node.style.left  });
		};
		function Stage()
		{
			var leftpos = smallimagedata.pos.l;
			var toppos = smallimagedata.pos.t;
			this.node = document.createElement("div");
			$(this.node).addClass('jqZoomWindow');
			$( this.node )
				.css({
					position: 'absolute',
					width: Math.round(settings.zoomWidth) + 'px',
					height: Math.round(settings.zoomHeight) + 'px',
					display: 'none',
					zIndex: 10000,
					overflow: 'hidden'
				});
		    var ie6 = $.browser.msie && /MSIE 6.0/.test(navigator.userAgent);
		    this.node.style.left = bigPXoffset + 'px';
			this.node.style.top = toppos + 'px';
            if($.browser.msie)
            {
			    if(ie6)
			    {
			        if(!isH)
			            this.node.style.left = (bigPXoffset-2) + 'px';
			    }
			    this.node.style.top = (toppos+18) + 'px';
			}
			return this;
		}
		Stage.prototype.activate = function()
		{
			if ( !this.node.firstChild )
					this.node.appendChild( largeimage.node );
			if(settings.title)
			{
				ZoomTitleObj.loadtitle();
			}
			document.body.appendChild( this.node );
			switch(settings.showEffect)
			{
				case 'show':
					$(this.node).show();
				break;
				case 'fadein':
					$(this.node).fadeIn(settings.fadeinSpeed);
				break;
				default:
					$(this.node).show();
				break;
			}
			$(this.node).show();
            if ($.browser.msie && $.browser.version < 7) {
	        this.ieframe = $('<iframe class="zoom_ieframe" frameborder="0" src="#"></iframe>')
	          .css({ position: "absolute", left:this.node.style.left,top:this.node.style.top,zIndex: 99,width:settings.zoomWidth,height:settings.zoomHeight })
	          .insertBefore(this.node);
	     	 };
			largeimage.node.style.display = 'block';
		}
		Stage.prototype.remove = function() {
			switch(settings.hideEffect)
			{
				case 'hide':
					$('.jqZoomWindow').remove();
				break;
				case 'fadeout':
					$('.jqZoomWindow').fadeOut(settings.fadeoutSpeed);
				break;
				default:
					$('.jqZoomWindow').remove();
				break;
			}
		}
		function zoomTitle()
		{
			this.node =  jQuery('<div />')
				.addClass('jqZoomTitle')
				.html('' + ZoomTitle +'');
			this.loadtitle = function()
			{
				if(settings.zoomType == 'innerzoom')
				{
					$(this.node)
					.css({position: 'absolute',
						  top: smallimagedata.pos.b +3,
						  left: (smallimagedata.pos.l+1),
						  width:smallimagedata.w
						  })
					.appendTo('body');
				}else
				{
					$(this.node).appendTo(stage.node);
				}
			};
		}
		zoomTitle.prototype.remove = function() {
			$('.jqZoomTitle').remove();
		}
		});
	}
})(jQuery);
	function trim(stringa)
	{
	   if(stringa){
		   while (stringa.substring(0,1) == ' '){
				stringa = stringa.substring(1, stringa.length);
			}
			while (stringa.substring(stringa.length-1, stringa.length) == ' '){
				stringa = stringa.substring(0,stringa.length-1);
			}
	   }
	    return stringa;
	}

