(function(b,z,q){function w(){for(var f=x.length-1;f>=0;f--){var i=b(x[f]);if(i[0]==z||i.is(":visible")){var c=i.width(),a=i.height(),l=i.data(d);!l||c===l.w&&a===l.h?k[g]=k[m]:(k[g]=k[e],i.trigger(A,[l.w=c,l.h=a]))}else{l=i.data(d),l.w=0,l.h=0}}y!==null&&(y=z.requestAnimationFrame(w))}var x=[],k=b.resize=b.extend(b.resize,{}),y,v="setTimeout",A="resize",d=A+"-special-event",g="delay",m="pendingDelay",e="activeDelay",j="throttleWindow";k[m]=250,k[e]=20,k[g]=k[m],k[j]=!0,b.event.special[A]={setup:function(){if(!k[j]&&this[v]){return !1}var a=b(this);x.push(this),a.data(d,{w:a.width(),h:a.height()}),x.length===1&&(y=q,w())},teardown:function(){if(!k[j]&&this[v]){return !1}var c=b(this);for(var a=x.length-1;a>=0;a--){if(x[a]==this){x.splice(a,1);break}}c.removeData(d),x.length||(cancelAnimationFrame(y),y=null)},add:function(f){function c(p,h,n){var l=b(this),r=l.data(d);r.w=h!==q?h:l.width(),r.h=n!==q?n:l.height(),a.apply(this,arguments)}if(!k[j]&&this[v]){return !1}var a;if(b.isFunction(f)){return a=f,c}a=f.handler,f.handler=c}},z.requestAnimationFrame||(z.requestAnimationFrame=function(){return z.webkitRequestAnimationFrame||z.mozRequestAnimationFrame||z.oRequestAnimationFrame||z.msRequestAnimationFrame||function(a,c){return z.setTimeout(a,k[g])}}()),z.cancelAnimationFrame||(z.cancelAnimationFrame=function(){return z.webkitCancelRequestAnimationFrame||z.mozCancelRequestAnimationFrame||z.oCancelRequestAnimationFrame||z.msCancelRequestAnimationFrame||clearTimeout}())})(jQuery,this);(function(a){var c={};function b(f){function e(){var h=f.getPlaceholder();if(h.width()==0||h.height()==0){return}f.resize();f.setupGrid();f.draw()}function d(i,h){i.getPlaceholder().resize(e)}function g(i,h){i.getPlaceholder().unbind("resize",e)}f.hooks.bindEvents.push(d);f.hooks.shutdown.push(g)}a.plot.plugins.push({init:b,options:c,name:"resize",version:"1.0"})})(jQuery);