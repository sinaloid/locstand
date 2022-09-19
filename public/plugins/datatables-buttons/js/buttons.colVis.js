/*
 * Column visibility buttons for Buttons and DataTables.
 * 2016 SpryMedia Ltd - datatables.net/license
 */
(function(a){if(typeof define==="function"&&define.amd){define(["jquery","datatables.net","datatables.net-buttons"],function(b){return a(b,window,document)})}else{if(typeof exports==="object"){module.exports=function(c,b){if(!c){c=window}if(!b||!b.fn.dataTable){b=require("datatables.net")(c,b).$}if(!b.fn.dataTable.Buttons){require("datatables.net-buttons")(c,b)}return a(b,c,c.document)}}else{a(jQuery,window,document)}}}(function(a,e,c,d){var b=a.fn.dataTable;a.extend(b.ext.buttons,{colvis:function(g,f){return{extend:"collection",text:function(h){return h.i18n("buttons.colvis","Column visibility")},className:"buttons-colvis",buttons:[{extend:"columnsToggle",columns:f.columns,columnText:f.columnText}]}},columnsToggle:function(h,g){var f=h.columns(g.columns).indexes().map(function(i){return{extend:"columnToggle",columns:i,columnText:g.columnText}}).toArray();return f},columnToggle:function(g,f){return{extend:"columnVisibility",columns:f.columns,columnText:f.columnText}},columnsVisibility:function(h,g){var f=h.columns(g.columns).indexes().map(function(i){return{extend:"columnVisibility",columns:i,visibility:g.visibility,columnText:g.columnText}}).toArray();return f},columnVisibility:{columns:d,text:function(h,f,g){return g._columnText(h,g)},className:"buttons-columnVisibility",action:function(k,j,f,h){var g=j.columns(h.columns);var i=g.visible();g.visible(h.visibility!==d?h.visibility:!(i.length?i[0]:false))},init:function(h,f,g){var i=this;f.attr("data-cv-idx",g.columns);h.on("column-visibility.dt"+g.namespace,function(j,k){if(!k.bDestroying&&k.nTable==h.settings()[0].nTable){i.active(h.column(g.columns).visible())}}).on("column-reorder.dt"+g.namespace,function(k,l,j){if(h.columns(g.columns).count()!==1){return}f.text(g._columnText(h,g));i.active(h.column(g.columns).visible())});this.active(h.column(g.columns).visible())},destroy:function(h,f,g){h.off("column-visibility.dt"+g.namespace).off("column-reorder.dt"+g.namespace)},_columnText:function(g,f){var h=g.column(f.columns).index();var i=g.settings()[0].aoColumns[h].sTitle.replace(/\n/g," ").replace(/<br\s*\/?>/gi," ").replace(/<select(.*?)<\/select>/g,"").replace(/<!\-\-.*?\-\->/g,"").replace(/<.*?>/g,"").replace(/^\s+|\s+$/g,"");return f.columnText?f.columnText(g,h,i):i}},colvisRestore:{className:"buttons-colvisRestore",text:function(f){return f.i18n("buttons.colvisRestore","Restore visibility")},init:function(h,f,g){g._visOriginal=h.columns().indexes().map(function(i){return h.column(i).visible()}).toArray()},action:function(i,h,f,g){h.columns().every(function(j){var k=h.colReorder&&h.colReorder.transpose?h.colReorder.transpose(j,"toOriginal"):j;this.visible(g._visOriginal[k])})}},colvisGroup:{className:"buttons-colvisGroup",action:function(i,h,f,g){h.columns(g.show).visible(true,false);h.columns(g.hide).visible(false,false);h.columns.adjust()},show:[],hide:[]}});return b.Buttons}));