// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-09-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blinds(options,$IMGs,$container){var $=jQuery;var cnt=12;$IMGs.each(function(index){if(index){$(this).hide();}});var $partscont=$("<div></div>");$partscont.css({position:"absolute",width:options.width+"px",height:options.height+"px",left:(options.outWidth-options.width)/2+"px",top:(options.outHeight-options.height)/2+"px"});$container.append($partscont);var parts=[];for(var i=0;i<cnt;i++){parts[i]=$("<div></div>");}$(parts).each(function(index){$(this).css({position:"absolute",'z-index':2,'background-repeat':"no-repeat",height:"100%",border:"none",margin:0,top:0,left:Math.round(100/cnt)*index+"%",width:(index<cnt-1?Math.round(100/cnt):100-Math.round(100/cnt)*(cnt-1))+"%"});$partscont.append(this);$partscont.hide();});this.go=function(index,prevIndex,dx){var dir=prevIndex>index?1:0;if(dx){if(dx<=-1){index=(prevIndex+1)%$IMGs.length;dir=0;}else if(dx>=1){index=(prevIndex-1+$IMGs.length)%$IMGs.length;dir=1;}else{return-1;}}for(var i=0;i<parts.length;i++){parts[i].stop(true,true);}function startPart(part_i,func){var $part=parts[part_i];var w=$part.width();var img=$IMGs.get(index);$part.css({'background-position':(!dir?-$(img).width():$(img).width()-$part.position().left)+"px 0",'background-image':"url("+img.src+")"});$part.animate({'background-position':-$part.position().left+"px 0"},options.duration/(parts.length+1)*(dir?parts.length-part_i+1:part_i+2),func);}function applyImage(){$IMGs.hide();$($IMGs.get(index)).show();$partscont.hide();$(parts).each(function(){$(this).css({'background-image':"none"});});}$partscont.show();for(var i=0;i<parts.length;i++){startPart(i,!dir&&i==parts.length-1||dir&&!i?applyImage:null);}return index;};}(function($){if(!document.defaultView||!document.defaultView.getComputedStyle){var oldCurCSS=$.curCSS;$.curCSS=function(elem,name,force){if(name==="background-position"){name="backgroundPosition";}if(name!=="backgroundPosition"||!elem.currentStyle||elem.currentStyle[name]){return oldCurCSS.apply(this,arguments);}var style=elem.style;if(!force&&style&&style[name]){return style[name];}return oldCurCSS(elem,"backgroundPositionX",force)+" "+oldCurCSS(elem,"backgroundPositionY",force);};}var oldAnim=$.fn.animate;$.fn.animate=function(prop){if("background-position"in prop){prop.backgroundPosition=prop['background-position'];delete prop['background-position'];}if("backgroundPosition"in prop){prop.backgroundPosition="("+prop.backgroundPosition;}return oldAnim.apply(this,arguments);};function toArray(strg){strg=strg.replace(/left|top/g,"0px");strg=strg.replace(/right|bottom/g,"100%");strg=strg.replace(/([0-9\.]+)(\s|\)|$)/g,"$1px$2");var res=strg.match(/(-?[0-9\.]+)(px|\%|em|pt)\s(-?[0-9\.]+)(px|\%|em|pt)/);return[parseFloat(res[1],10),res[2],parseFloat(res[3],10),res[4]];}$.fx.step.backgroundPosition=function(fx){if(!fx.bgPosReady){var start=$.curCSS(fx.elem,"backgroundPosition");if(!start){start="0px 0px";}start=toArray(start);fx.start=[start[0],start[2]];var end=toArray(fx.end);fx.end=[end[0],end[2]];fx.unit=[end[1],end[3]];fx.bgPosReady=true;}var nowPosX=[];nowPosX[0]=(fx.end[0]-fx.start[0])*fx.pos+fx.start[0]+fx.unit[0];nowPosX[1]=(fx.end[1]-fx.start[1])*fx.pos+fx.start[1]+fx.unit[1];fx.elem.style.backgroundPosition=nowPosX[0]+" "+nowPosX[1];};})(jQuery);// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-09-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"blinds",prev:"",next:"",duration:10*100,delay:50*100,outWidth:998,outHeight:480,width:998,height:480,autoPlay:true,stopOnHover:false,loop:false,bullets:true,caption:true,controls:true});