function InvalidMsg(textbox) {  
    if (textbox.value == '') {
        textbox.setCustomValidity('Required text.');
    } else if(textbox.validity.typeMismatch){
      	textbox.setCustomValidity('Type email valid, Have to @ i n address.');
    } else if(textbox.validity.patternMismatch) {
      	textbox.setCustomValidity('Data type not valid.'); 
    } else if(textbox.validity.rangeUnderflow) {
        textbox.setCustomValidity('Min 4 char.'); 
    } else if(textbox.validity.rangeOverflow) {
        textbox.setCustomValidity('Max 4 char.');
    } else {
       	textbox.setCustomValidity('');
    }
    return true;
}