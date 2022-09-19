/* Responsive 2.2.3
 * 2014-2018 SpryMedia Ltd - datatables.net/license
 */
(function(a){if(typeof define==="function"&&define.amd){define(["jquery","datatables.net"],function(b){return a(b,window,document)})}else{if(typeof exports==="object"){module.exports=function(c,b){if(!c){c=window}if(!b||!b.fn.dataTable){b=require("datatables.net")(c,b).$}return a(b,c,c.document)}}else{a(jQuery,window,document)}}}(function(a,j,g,i){var f=a.fn.dataTable;var h=function(l,k){if(!f.versionCheck||!f.versionCheck("1.10.10")){throw"DataTables Responsive requires DataTables 1.10.10 or newer"}this.s={dt:new f.Api(l),columns:[],current:[]};if(this.s.dt.settings()[0].responsive){return}if(k&&typeof k.details==="string"){k.details={type:k.details}}else{if(k&&k.details===false){k.details={type:false}}else{if(k&&k.details===true){k.details={type:"inline"}}}}this.c=a.extend(true,{},h.defaults,f.defaults.responsive,k);l.responsive=this;this._constructor()};a.extend(h.prototype,{_constructor:function(){var o=this;var l=this.s.dt;var m=l.settings()[0];var n=a(j).width();l.settings()[0]._responsive=this;a(j).on("resize.dtr orientationchange.dtr",f.util.throttle(function(){var p=a(j).width();if(p!==n){o._resize();n=p}}));m.oApi._fnCallbackReg(m,"aoRowCreatedCallback",function(r,p,q){if(a.inArray(false,o.s.current)!==-1){a(">td, >th",r).each(function(s){var t=l.column.index("toData",s);if(o.s.current[t]===false){a(this).css("display","none")}})}});l.on("destroy.dtr",function(){l.off(".dtr");a(l.table().body()).off(".dtr");a(j).off("resize.dtr orientationchange.dtr");a.each(o.s.current,function(p,q){if(q===false){o._setColumnVis(p,true)}})});this.c.breakpoints.sort(function(p,q){return p.width<q.width?1:p.width>q.width?-1:0});this._classLogic();this._resizeAuto();var k=this.c.details;if(k.type!==false){o._detailsInit();l.on("column-visibility.dtr",function(){if(o._timer){clearTimeout(o._timer)}o._timer=setTimeout(function(){o._timer=null;o._classLogic();o._resizeAuto();o._resize();o._redrawChildren()},100)});l.on("draw.dtr",function(){o._redrawChildren()});a(l.table().node()).addClass("dtr-"+k.type)}l.on("column-reorder.dtr",function(q,r,p){o._classLogic();o._resizeAuto();o._resize()});l.on("column-sizing.dtr",function(){o._resizeAuto();o._resize()});l.on("preXhr.dtr",function(){var p=[];l.rows().every(function(){if(this.child.isShown()){p.push(this.id(true))}});l.one("draw.dtr",function(){o._resizeAuto();o._resize();l.rows(p).every(function(){o._detailsDisplay(this,false)})})});l.on("init.dtr",function(q,r,p){o._resizeAuto();o._resize();if(a.inArray(false,o.s.current)){l.columns.adjust()}});this._resize()},_columnsVisiblity:function(l){var p=this.s.dt;var n=this.s.columns;var r,s;var t=n.map(function(z,A){return{columnIdx:A,priority:z.priority}}).sort(function(z,A){if(z.priority!==A.priority){return z.priority-A.priority}return z.columnIdx-A.columnIdx});var o=a.map(n,function(z,A){if(p.column(A).visible()===false){return"not-visible"}return z.auto&&z.minWidth===null?false:z.auto===true?"-":a.inArray(l,z.includeIn)!==-1});var u=0;for(r=0,s=o.length;r<s;r++){if(o[r]===true){u+=n[r].minWidth}}var v=p.settings()[0].oScroll;var k=v.sY||v.sX?v.iBarWidth:0;var y=p.table().container().offsetWidth-k;var x=y-u;for(r=0,s=o.length;r<s;r++){if(n[r].control){x-=n[r].minWidth}}var q=false;for(r=0,s=t.length;r<s;r++){var m=t[r].columnIdx;if(o[m]==="-"&&!n[m].control&&n[m].minWidth){if(q||x-n[m].minWidth<0){q=true;o[m]=false}else{o[m]=true}x-=n[m].minWidth}}var w=false;for(r=0,s=n.length;r<s;r++){if(!n[r].control&&!n[r].never&&o[r]===false){w=true;break}}for(r=0,s=n.length;r<s;r++){if(n[r].control){o[r]=w}if(o[r]==="not-visible"){o[r]=false}}if(a.inArray(true,o)===-1){o[0]=true}return o},_classLogic:function(){var q=this;var m={};var l=this.c.breakpoints;var p=this.s.dt;var o=p.columns().eq(0).map(function(u){var s=this.column(u);var r=s.header().className;var v=p.settings()[0].aoColumns[u].responsivePriority;if(v===i){var t=a(s.header()).data("priority");v=t!==i?t*1:10000}return{className:r,includeIn:[],auto:false,control:false,never:r.match(/\bnever\b/)?true:false,priority:v}});var k=function(r,t){var s=o[r].includeIn;if(a.inArray(t,s)===-1){s.push(t)}};var n=function(r,v,w,u){var x,s,t;if(!w){o[r].includeIn.push(v)}else{if(w==="max-"){x=q._find(v).width;for(s=0,t=l.length;s<t;s++){if(l[s].width<=x){k(r,l[s].name)}}}else{if(w==="min-"){x=q._find(v).width;for(s=0,t=l.length;s<t;s++){if(l[s].width>=x){k(r,l[s].name)}}}else{if(w==="not-"){for(s=0,t=l.length;s<t;s++){if(l[s].name.indexOf(u)===-1){k(r,l[s].name)}}}}}}};o.each(function(t,v){var s=t.className.split(" ");var u=false;for(var w=0,x=s.length;w<x;w++){var r=a.trim(s[w]);if(r==="all"){u=true;t.includeIn=a.map(l,function(y){return y.name});return}else{if(r==="none"||t.never){u=true;return}else{if(r==="control"){u=true;t.control=true;return}}}a.each(l,function(A,y){var z=y.name.split("-");var C=new RegExp("(min\\-|max\\-|not\\-)?("+z[0]+")(\\-[_a-zA-Z0-9])?");var B=r.match(C);if(B){u=true;if(B[2]===z[0]&&B[3]==="-"+z[1]){n(v,y.name,B[1],B[2]+B[3])}else{if(B[2]===z[0]&&!B[3]){n(v,y.name,B[1],B[2])}}}})}if(!u){t.auto=true}});this.s.columns=o},_detailsDisplay:function(n,p){var o=this;var l=this.s.dt;var k=this.c.details;if(k&&k.type!==false){var m=k.display(n,p,function(){return k.renderer(l,n[0],o._detailsObj(n[0]))});if(m===true||m===false){a(l.table().node()).triggerHandler("responsive-display.dt",[l,n,m,p])}}},_detailsInit:function(){var o=this;var l=this.s.dt;var k=this.c.details;if(k.type==="inline"){k.target="td:first-child, th:first-child"}l.on("draw.dtr",function(){o._tabIndexes()});o._tabIndexes();a(l.table().body()).on("keyup.dtr","td, th",function(p){if(p.keyCode===13&&a(this).data("dtr-keyboard")){a(this).click()}});var n=k.target;var m=typeof n==="string"?n:"td, th";a(l.table().body()).on("click.dtr mousedown.dtr mouseup.dtr",m,function(p){if(!a(l.table().node()).hasClass("collapsed")){return}if(a.inArray(a(this).closest("tr").get(0),l.rows().nodes().toArray())===-1){return}if(typeof n==="number"){var r=n<0?l.columns().eq(0).length+n:n;if(l.cell(this).index().column!==r){return}}var q=l.row(a(this).closest("tr"));if(p.type==="click"){o._detailsDisplay(q,false)}else{if(p.type==="mousedown"){a(this).css("outline","none")}else{if(p.type==="mouseup"){a(this).blur().css("outline","")}}}})},_detailsObj:function(l){var m=this;var k=this.s.dt;return a.map(this.s.columns,function(n,o){if(n.never||n.control){return}return{title:k.settings()[0].aoColumns[o].sTitle,data:k.cell(l,o).render(m.c.orthogonal),hidden:k.column(o).visible()&&!m.s.current[o],columnIndex:o,rowIndex:l}})},_find:function(n){var k=this.c.breakpoints;for(var l=0,m=k.length;l<m;l++){if(k[l].name===n){return k[l]}}},_redrawChildren:function(){var l=this;var k=this.s.dt;k.rows({page:"current"}).iterator("row",function(o,m){var n=k.row(m);l._detailsDisplay(k.row(m),true)})},_resize:function(){var u=this;var q=this.s.dt;var w=a(j).width();var l=this.c.breakpoints;var k=l[0].name;var o=this.s.columns;var r,s;var t=this.s.current.slice();for(r=l.length-1;r>=0;r--){if(w<=l[r].width){k=l[r].name;break}}var p=this._columnsVisiblity(k);this.s.current=p;var n=false;for(r=0,s=o.length;r<s;r++){if(p[r]===false&&!o[r].never&&!o[r].control&&!q.column(r).visible()===false){n=true;break}}a(q.table().node()).toggleClass("collapsed",n);var m=false;var v=0;q.columns().eq(0).each(function(x,y){if(p[y]===true){v++}if(p[y]!==t[y]){m=true;u._setColumnVis(x,p[y])}});if(m){this._redrawChildren();a(q.table().node()).trigger("responsive-resize.dt",[q,this.s.current]);if(q.page.info().recordsDisplay===0){a("td",q.table().body()).eq(0).attr("colspan",v)}}},_resizeAuto:function(){var q=this.s.dt;var o=this.s.columns;if(!this.c.auto){return}if(a.inArray(true,a.map(o,function(w){return w.auto}))===-1){return}if(!a.isEmptyObject(d)){a.each(d,function(x){var w=x.split("-");c(q,w[0]*1,w[1]*1)})}var v=q.table().node().offsetWidth;var p=q.columns;var n=q.table().node().cloneNode(false);var m=a(q.table().header().cloneNode(false)).appendTo(n);var k=a(q.table().body()).clone(false,false).empty().appendTo(n);var t=q.columns().header().filter(function(w){return q.column(w).visible()}).to$().clone(false).css("display","table-cell").css("min-width",0);a(k).append(a(q.rows({page:"current"}).nodes()).clone(false)).find("th, td").css("display","");var r=q.table().footer();if(r){var l=a(r.cloneNode(false)).appendTo(n);var s=q.columns().footer().filter(function(w){return q.column(w).visible()}).to$().clone(false).css("display","table-cell");a("<tr/>").append(s).appendTo(l)}a("<tr/>").append(t).appendTo(m);if(this.c.details.type==="inline"){a(n).addClass("dtr-inline collapsed")}a(n).find("[name]").removeAttr("name");a(n).css("position","relative");var u=a("<div/>").css({width:1,height:1,overflow:"hidden",clear:"both"}).append(n);u.insertBefore(q.table().node());t.each(function(w){var x=q.column.index("fromVisible",w);o[x].minWidth=this.offsetWidth||0});u.remove()},_setColumnVis:function(k,n){var m=this.s.dt;var l=n?"":"none";a(m.column(k).header()).css("display",l);a(m.column(k).footer()).css("display",l);m.column(k).nodes().to$().css("display",l);if(!a.isEmptyObject(d)){m.cells(null,k).indexes().each(function(o){c(m,o.row,o.column)})}},_tabIndexes:function(){var m=this.s.dt;var k=m.cells({page:"current"}).nodes().to$();var l=m.settings()[0];var n=this.c.details.target;k.filter("[data-dtr-keyboard]").removeData("[data-dtr-keyboard]");if(typeof n==="number"){m.cells(null,n,{page:"current"}).nodes().to$().attr("tabIndex",l.iTabIndex).data("dtr-keyboard",1)}else{if(n==="td:first-child, th:first-child"){n=">td:first-child, >th:first-child"}a(n,m.rows({page:"current"}).nodes()).attr("tabIndex",l.iTabIndex).data("dtr-keyboard",1)}}});h.breakpoints=[{name:"desktop",width:Infinity},{name:"tablet-l",width:1024},{name:"tablet-p",width:768},{name:"mobile-l",width:480},{name:"mobile-p",width:320}];h.display={childRow:function(l,m,k){if(m){if(a(l.node()).hasClass("parent")){l.child(k(),"child").show();return true}}else{if(!l.child.isShown()){l.child(k(),"child").show();a(l.node()).addClass("parent");return true}else{l.child(false);a(l.node()).removeClass("parent");return false}}},childRowImmediate:function(l,m,k){if((!m&&l.child.isShown())||!l.responsive.hasHidden()){l.child(false);a(l.node()).removeClass("parent");return false}else{l.child(k(),"child").show();a(l.node()).addClass("parent");return true}},modal:function(k){return function(o,p,n){if(!p){var l=function(){m.remove();a(g).off("keypress.dtr")};var m=a('<div class="dtr-modal"/>').append(a('<div class="dtr-modal-display"/>').append(a('<div class="dtr-modal-content"/>').append(n())).append(a('<div class="dtr-modal-close">&times;</div>').click(function(){l()}))).append(a('<div class="dtr-modal-background"/>').click(function(){l()})).appendTo("body");a(g).on("keyup.dtr",function(q){if(q.keyCode===27){q.stopPropagation();l()}})}else{a("div.dtr-modal-content").empty().append(n())}if(k&&k.header){a("div.dtr-modal-content").prepend("<h2>"+k.header(o)+"</h2>")}}}};var d={};function b(m,r,l){var p=r+"-"+l;if(d[p]){return d[p]}var q=[];var k=m.cell(r,l).node().childNodes;for(var n=0,o=k.length;n<o;n++){q.push(k[n])}d[p]=q;return q}function c(m,v,l){var r=v+"-"+l;if(!d[r]){return}var s=m.cell(v,l).node();var w=d[r];var t=w[0].parentNode;var u=t.childNodes;var k=[];for(var n=0,o=u.length;n<o;n++){k.push(u[n])}for(var p=0,q=k.length;p<q;p++){s.appendChild(k[p])}d[r]=i}h.renderer={listHiddenNodes:function(){return function(k,o,l){var p=a('<ul data-dtr-index="'+o+'" class="dtr-details"/>');var n=false;var m=a.each(l,function(r,q){if(q.hidden){a('<li data-dtr-index="'+q.columnIndex+'" data-dt-row="'+q.rowIndex+'" data-dt-column="'+q.columnIndex+'"><span class="dtr-title">'+q.title+"</span> </li>").append(a('<span class="dtr-data"/>').append(b(k,q.rowIndex,q.columnIndex))).appendTo(p);n=true}});return n?p:false}},listHidden:function(){return function(k,n,l){var m=a.map(l,function(o){return o.hidden?'<li data-dtr-index="'+o.columnIndex+'" data-dt-row="'+o.rowIndex+'" data-dt-column="'+o.columnIndex+'"><span class="dtr-title">'+o.title+'</span> <span class="dtr-data">'+o.data+"</span></li>":""}).join("");return m?a('<ul data-dtr-index="'+n+'" class="dtr-details"/>').append(m):false}},tableAll:function(k){k=a.extend({tableClass:""},k);return function(l,o,m){var n=a.map(m,function(p){return'<tr data-dt-row="'+p.rowIndex+'" data-dt-column="'+p.columnIndex+'"><td>'+p.title+":</td> <td>"+p.data+"</td></tr>"}).join("");return a('<table class="'+k.tableClass+' dtr-details" width="100%"/>').append(n)}}};h.defaults={breakpoints:h.breakpoints,auto:true,details:{display:h.display.childRow,renderer:h.renderer.listHidden(),target:0,type:"inline"},orthogonal:"display"};var e=a.fn.dataTable.Api;e.register("responsive()",function(){return this});e.register("responsive.index()",function(k){k=a(k);return{column:k.data("dtr-index"),row:k.parent().data("dtr-index")}});e.register("responsive.rebuild()",function(){return this.iterator("table",function(k){if(k._responsive){k._responsive._classLogic()}})});e.register("responsive.recalc()",function(){return this.iterator("table",function(k){if(k._responsive){k._responsive._resizeAuto();k._responsive._resize()}})});e.register("responsive.hasHidden()",function(){var k=this.context[0];return k._responsive?a.inArray(false,k._responsive.s.current)!==-1:false});e.registerPlural("columns().responsiveHidden()","column().responsiveHidden()",function(){return this.iterator("column",function(l,k){return l._responsive?l._responsive.s.current[k]:false},1)});h.version="2.2.3";a.fn.dataTable.Responsive=h;a.fn.DataTable.Responsive=h;a(g).on("preInit.dt.dtr",function(k,n,m){if(k.namespace!=="dt"){return}if(a(n.nTable).hasClass("responsive")||a(n.nTable).hasClass("dt-responsive")||n.oInit.responsive||f.defaults.responsive){var l=n.oInit.responsive;if(l!==false){new h(n,a.isPlainObject(l)?l:{})}}});return h}));