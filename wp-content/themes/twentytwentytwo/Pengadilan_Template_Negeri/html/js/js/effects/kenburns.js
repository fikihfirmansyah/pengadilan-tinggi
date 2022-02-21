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
function ws_kenburns(options,images,container){var $=jQuery;var w=options.width,h=options.height;var useCanvas=document.createElement("canvas").getContext;var paths=[{from:[0,0,1.2],to:[1,0,1.2]},{from:[0,0,1.3],to:[0,1,1]},{from:[1,0,1.3],to:[0,1,1.3]},{from:[1,0,1.3],to:[1,1,1.3]},{from:[0,1,1.3],to:[0,0,1]},{from:[0,1,1.2],to:[1,1,1.2]},{from:[1,0,1.2],to:[1,1,1.2]}];var paths2=[{from:[0.5,1,1],to:[0.5,0,1.15]},{from:[1,0.5,1.2],to:[1,0.5,1]},{from:[0.5,0.5,1],to:[0.5,0.5,1.2]},{from:[0.5,0.5,1.3],to:[0.5,0.5,1]},{from:[1,0.5,1],to:[1,0.5,1.3]},{from:[0,0.5,1.2],to:[0,0.5,1]},{from:[1,0.5,1],to:[1,0.5,1.2]},{from:[1,0.5,1.2],to:[1,0.5,1]},{from:[0.5,0.5,1],to:[0.5,0.5,1.2]},{from:[0.5,1,1],to:[0.5,1,1.3]}];function getPath(ind){var path=paths[Math.floor(Math.random()*paths.length)];if(useCanvas){path=paths2[Math.floor(Math.random()*paths2.length)];}return path;}function process(func,delay){var busy,a=0,da=40/delay;var timer=setInterval(function(){if(a<1){if(!busy){busy=1;func(a);busy=0;}a+=da;}else{stop(1);}},40);function stop(end){clearInterval(timer);if(end){func(1);}}return{stop:stop};}var ctx;var proc;if(useCanvas){var canvas=$("<canvas width=\""+w+"\" height=\""+h+"\"/>");canvas.appendTo(container);canvas.css({'z-index':8,position:"absolute",left:0,top:0});ctx=canvas.get(0).getContext("2d");}function calcPos(path,hProp,vProp){var an={width:w*path[2]+"px",left:"auto",right:"auto",top:"auto",bottom:"auto"};an[hProp?"right":"left"]=-w*(path[2]-1)*(hProp?1-path[0]:path[0])+"px";an[vProp?"bottom":"top"]=-h*(path[2]-1)*(vProp?1-path[1]:path[1])+"px";return an;}function setAnimate(img,path,needFade){if(ctx){if(proc){proc.stop();}proc=process(function(a){var p=[path.from[0]*(1-a)+a*path.to[0],path.from[1]*(1-a)+a*path.to[1],path.from[2]*(1-a)+a*path.to[2]];ctx.globalAlpha=needFade?Math.min(a*(1+options.delay/options.duration),1):1;ctx.drawImage(img,-w*(p[2]-1)*p[0],-h*(p[2]-1)*p[1],w*p[2],h*p[2]);},options.duration+options.delay);}else{img=$(img);with(path){img.css(calcPos(from,from[0]>0.5,from[1]>0.5));img.stop(1,1).animate(calcPos(to,from[0]>0.5,from[1]>0.5),{easing:"linear",queue:false,duration:options.duration+options.delay});if(needFade){img.fadeIn(options.duration);}}}}images.each(function(Index){$(this).css({left:"auto",top:"auto",right:"auto",bottom:"auto"});if(!Index){setAnimate(this,getPath(0),0);}else{$(this).hide();}});this.go=function(new_index,curIdx){setAnimate(images.get(new_index),getPath(new_index),1);if(!ctx){$(images.get(curIdx)).fadeOut(options.duration);}return new_index;};}// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Last updated: 2011-09-27
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"kenburns",prev:"",next:"",duration:10*100,delay:50*100,outWidth:998,outHeight:480,width:998,height:480,autoPlay:true,stopOnHover:false,loop:false,bullets:true,caption:true,controls:true});