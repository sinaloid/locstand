(function(a){if(typeof define==="function"&&define.amd){define(["jquery","../jquery.validate"],a)}else{if(typeof module==="object"&&module.exports){module.exports=a(require("jquery"))}else{a(jQuery)}}}(function(a){a.extend(a.validator.methods,{date:function(c,b){return this.optional(b)||/^\d\d?\-\d\d?\-\d\d\d?\d?$/.test(c)},number:function(c,b){return this.optional(b)||/^-?(?:\d+|\d{1,3}(?:\.\d{3})+)(?:,\d+)?$/.test(c)}});return a}));