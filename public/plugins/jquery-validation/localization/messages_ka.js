(function(a){if(typeof define==="function"&&define.amd){define(["jquery","../jquery.validate"],a)}else{if(typeof module==="object"&&module.exports){module.exports=a(require("jquery"))}else{a(jQuery)}}}(function(a){a.extend(a.validator.messages,{required:"ამ ველის შევსება აუცილებელია.",remote:"გთხოვთ მიუთითოთ სწორი მნიშვნელობა.",email:"გთხოვთ მიუთითოთ ელ-ფოსტის კორექტული მისამართი.",url:"გთხოვთ მიუთითოთ კორექტული URL.",date:"გთხოვთ მიუთითოთ კორექტული თარიღი.",dateISO:"გთხოვთ მიუთითოთ კორექტული თარიღი ISO ფორმატში.",number:"გთხოვთ მიუთითოთ ციფრი.",digits:"გთხოვთ მიუთითოთ მხოლოდ ციფრები.",creditcard:"გთხოვთ მიუთითოთ საკრედიტო ბარათის კორექტული ნომერი.",equalTo:"გთხოვთ მიუთითოთ ასეთივე მნიშვნელობა კიდევ ერთხელ.",extension:"გთხოვთ აირჩიოთ ფაილი კორექტული გაფართოებით.",maxlength:a.validator.format("დასაშვებია არაუმეტეს {0} სიმბოლო."),minlength:a.validator.format("აუცილებელია შეიყვანოთ მინიმუმ {0} სიმბოლო."),rangelength:a.validator.format("ტექსტში სიმბოლოების რაოდენობა უნდა იყოს {0}-დან {1}-მდე."),range:a.validator.format("გთხოვთ შეიყვანოთ ციფრი {0}-დან {1}-მდე."),max:a.validator.format("გთხოვთ შეიყვანოთ ციფრი რომელიც ნაკლებია ან უდრის {0}-ს."),min:a.validator.format("გთხოვთ შეიყვანოთ ციფრი რომელიც მეტია ან უდრის {0}-ს.")});return a}));