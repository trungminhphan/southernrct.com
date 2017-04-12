function InvalidMsg(textbox) {  
    if (textbox.value == '') {
        textbox.setCustomValidity('Hãy nhập dữ liệu vào.');
    } else if(textbox.validity.typeMismatch){
      	textbox.setCustomValidity('Kiểu nhập vào không đúng, Nếu email cần có @ vào trong địa chỉ.');
    } else if(textbox.validity.patternMismatch) {
      	textbox.setCustomValidity('Dữ liệu nhập không đúng yêu cầu.'); 
    } else if(textbox.validity.rangeUnderflow) {
        textbox.setCustomValidity('Nhập vào 4 chữ số.'); 
    } else if(textbox.validity.rangeOverflow) {
        textbox.setCustomValidity('Nhập vào 4 chữ số.');
    } else {
       	textbox.setCustomValidity('');
    }
    return true;
}